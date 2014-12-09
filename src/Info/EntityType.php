<?php


namespace Drupal\entity2\Info;



use Drupal\entity2\Exception\UnkownBundleException;


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
   * @param EntityTypes $entityTypes
   * @param string $typeName
   * @param array $entityInfo
   * @param array $propertyInfo
   */
  function __construct(EntityTypes $entityTypes, $typeName, array $entityInfo, array $propertyInfo) {
    $this->entityTypes = $entityTypes;
    $this->typeName = $typeName;
    $this->entityInfo = $entityInfo;
    $this->propertyInfo = $propertyInfo;
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
   * @param \stdClass $entity
   *
   * @return Bundle
   */
  public function entityGetBundle(\stdClass $entity) {
    $bundleName = $this->entityGetBundleName($entity);
    return $this->getBundle($bundleName);
  }

  /**
   * @param string $bundleName
   *
   * @throws UnkownBundleException
   * @return Bundle
   */
  public function getBundle($bundleName) {

    if (isset($this->bundles[$bundleName])) {
      return $this->bundles[$bundleName];
    }

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

    return $this->bundles[$bundleName] = new Bundle(
      $this,
      $bundleName,
      $this->entityInfo['bundles'][$bundleName],
      $bundlePropertiesInfo);
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
  protected function entityGetBundleName(\stdClass $entity) {

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
   * @param int $id
   *
   * @return \stdClass|null
   *   The loaded entity, or NULL if none was found.
   */
  public function loadEntity($id) {
    return entity_load_single($this->typeName, $id);
  }

  /**
   * @param int $etid
   *
   * @return \stdClass
   * @throws \Exception
   */
  public function loadRequiredEntity($etid) {
    if (empty($etid) || (string)(int)$etid !== (string)$etid || !$etid > 0) {
      throw new \Exception("Invalid entity id.");
    }
    $entity = $this->loadEntity($etid);
    if (!$entity) {
      throw new \Exception("No entity of type '$this->typeName' and id=$etid found.");
    }
    return $entity;
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
} 
