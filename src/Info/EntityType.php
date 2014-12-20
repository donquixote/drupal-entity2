<?php


namespace Drupal\entity2\Info;



use Drupal\entity2\Exception\UnkownBundleException;
use Drupal\entity2\Info\Field\FieldInstancesInterface;
use Drupal\entity2\System\FieldLanguagesAlterInterface;

class EntityType {

  /**
   * @var EntityTypes
   */
  protected $entityTypes;

  /**
   * @var string
   */
  protected $typeName;

  /**
   * @var array
   */
  protected $entityInfo;

  /**
   * @var string[]
   */
  protected $entityKeys;

  /**
   * @var array
   */
  protected $propertyInfo;

  /**
   * @var Bundle[]
   */
  protected $bundles = array();

  /**
   * @var array
   */
  protected $propertyInfoDefaults = array(
    'type' => 'text',
    'getter callback' => 'entity_property_verbatim_get',
    'clear' => array(),
  );

  /**
   * @var mixed[]
   *   Example: array('locale' => TRUE, 'entity_translation' => array(..))
   */
  protected $translationHandlers;

  /**
   * @var \Drupal\entity2\Info\Field\FieldInstancesInterface
   */
  protected $fieldInfoInstances;

  /**
   * @var \Drupal\entity2\System\FieldLanguagesAlterInterface
   */
  protected $fieldLanguagesAlter;

  /**
   * @param EntityTypes $entityTypes
   * @param string $typeName
   * @param array $entityInfo
   * @param array $propertyInfo
   * @param \Drupal\entity2\Info\Field\FieldInstancesInterface $fieldInfoInstances
   * @param \Drupal\entity2\System\FieldLanguagesAlterInterface $fieldLanguagesAlter
   */
  function __construct(
    EntityTypes $entityTypes,
    $typeName,
    array $entityInfo,
    array $propertyInfo,
    FieldInstancesInterface $fieldInfoInstances,
    FieldLanguagesAlterInterface $fieldLanguagesAlter
  ) {
    $this->entityTypes = $entityTypes;
    $this->typeName = $typeName;
    $this->entityInfo = $entityInfo;
    $this->propertyInfo = $propertyInfo;
    $this->entityKeys = isset($entityInfo['entity keys'])
      ? $entityInfo['entity keys']
      : array();
    $this->translationHandlers = isset($entityInfo['translation'])
      ? $entityInfo['translation']
      : array();
    $this->fieldInfoInstances = $fieldInfoInstances;
    $this->fieldLanguagesAlter = $fieldLanguagesAlter;
  }

  public function getEntityKeys() {
    return $this->entityKeys;
  }

  /**
   * Initialize all lazy configuration components.
   */
  public function initAll() {
    foreach ($this->entityInfo['bundles'] as $bundleName => $bundleInfo) {
      $this->getBundle($bundleName)->initAll();
    }
  }

  /**
   * @param string $bundleName
   *
   * @throws UnkownBundleException
   * @return Bundle
   */
  public function getBundle($bundleName) {

    return isset($this->bundles[$bundleName])
      ? $this->bundles[$bundleName]
      : $this->bundles[$bundleName] = $this->buildBundleObject($bundleName);
  }

  /**
   * @param string $bundleName
   *
   * @throws UnkownBundleException
   * @return Bundle
   */
  private function buildBundleObject($bundleName) {

    if (!isset($this->entityInfo['bundles'][$bundleName])) {
      throw new UnkownBundleException($bundleName, $this->typeName);
    }

    $bundlePropertiesInfo = $this->propertyInfo['properties'];
    if (!empty($this->propertyInfo['bundles'][$bundleName])) {
      $bundlePropertiesInfo = $this->propertyInfo['bundles'][$bundleName]['properties'] + $bundlePropertiesInfo;
    }

    foreach ($bundlePropertiesInfo as &$propertyInfo) {
      $propertyInfo += $this->propertyInfoDefaults;
    }

    $fieldInstances = $this->fieldInfoInstances->bundleGetFieldInstances($this->typeName, $bundleName);

    return new Bundle(
      $this,
      $bundleName,
      $this->entityInfo['bundles'][$bundleName],
      $bundlePropertiesInfo,
      $fieldInstances);
  }

  /**
   * @param object $entity
   *
   * @return int|null
   *
   * @see entity_id()
   */
  public function entityGetId($entity) {

    if (method_exists($entity, 'identifier')) {
      return $entity->identifier();
    }

    $key = isset($this->entityKeys['name'])
      ? $this->entityKeys['name']
      : $this->entityKeys['id'];

    return isset($entity->$key)
      ? $entity->$key
      : NULL;
  }

  /**
   * @param object $entity
   *
   * @return int|null
   */
  public function entityGetRevisionId($entity) {
    return ($this->entityKeys['revision'] && isset($entity->{$this->entityKeys['revision']}))
      ? $entity->{$this->entityKeys['revision']}
      : NULL;
  }

  /**
   * @param \stdClass $entity
   *
   * @return Bundle
   */
  public function entityGetBundle(\stdClass $entity) {
    $bundleName = $this->entityGetBundleName($entity);
    return $this->getBundle($bundleName);
  }

  /**
   * See entity_extract_ids()
   *
   * @param \stdClass $entity
   *
   * @throws \EntityMalformedException
   * @return string
   *   The bundle name.
   */
  public function entityGetBundleName(\stdClass $entity) {

    if (empty($this->entityInfo['entity keys']['bundle'])) {
      // The entity type provides no bundle key: assume a single bundle, named
      // after the entity type.
      return $this->typeName;
    }

    $bundleKey = $this->entityInfo['entity keys']['bundle'];

    // Explicitly fail for malformed entities missing the bundle property.
    if (empty($entity->$bundleKey)) {
      throw new \EntityMalformedException(t('Missing bundle property on entity of type @entity_type.', array(
        '@entity_type' => $this->typeName,
      )));
    }

    return $entity->$bundleKey;
  }

  /**
   * @return string
   */
  public function getTypeName() {
    return $this->typeName;
  }

  /**
   * @return \stdClass
   */
  public function getLanguage() {
    return $this->entityTypes->getLanguage();
  }

  /**
   * @return EntityTypes
   */
  public function getEntityTypes() {
    return $this->entityTypes;
  }

  /**
   * Checks if a specific translation handler is registered for this entity type.
   *
   * @param string $handler
   *   The name of the handler to be checked. Defaults to NULL.
   *   Typically this is a module name, e.g. 'locale' or 'entity_translation'.
   *
   * @return bool
   *   TRUE, if the given handler is allowed to manage field translations.
   *
   * @see field_has_translation_handler()
   */
  public function hasTranslationHandler($handler) {
    return !empty($this->translationHandlers[$handler]);
  }

  /**
   * Checks if any translation handlers are registered for this entity type.
   *
   * @return bool
   *   TRUE, if there is at least one registered translation handler.
   *
   * @see field_has_translation_handler()
   */
  public function hasAnyTranslationHandler() {

    foreach ($this->translationHandlers as $handlerInfo) {
      // The translation handler must use a non-empty data structure.
      if (!empty($handlerInfo)) {
        return TRUE;
      }
    }

    return FALSE;
  }

  /**
   * @param string[] $langFieldLanguages
   * @param object $entity
   * @param string $langcode
   */
  public function fieldLanguagesAlter(&$langFieldLanguages, $entity, $langcode) {
    $this->fieldLanguagesAlter->fieldLanguagesAlter($langFieldLanguages, $this->typeName, $entity, $langcode);
  }

  /**
   * @param string|null $langcode
   * @param bool
   *
   * @return string
   *
   * @see field_valid_language()
   */
  public function fieldValidLanguage($langcode, $default = TRUE) {
    return $this->fieldLanguagesAlter->fieldValidLanguage($langcode, $default);
  }
} 
