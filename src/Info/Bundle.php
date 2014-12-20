<?php


namespace Drupal\entity2\Info;


use Drupal\entity2\Exception\PropertyMisconfigurationException;
use Drupal\entity2\Exception\UnkownPropertyException;
use Drupal\entity2\Info\Property\BasicProperty;
use Drupal\entity2\Info\Property\EntityReferenceProperty;
use Drupal\entity2\Info\Property\PropertyInterface;
use Drupal\entity2\Info\Property\UnspecificEntityReferenceProperty;

class Bundle {

  /**
   * @var EntityTypes
   */
  protected $entityTypes;

  /**
   * @var EntityType
   */
  protected $entityType;

  /**
   * @var string
   */
  protected $bundleName;

  /**
   * @var array
   */
  protected $bundleInfo;

  /**
   * @var array
   */
  protected $propertyInfo;

  /**
   * @var BasicProperty[]
   */
  protected $properties = array();

  /**
   * @var \Drupal\entity2\Info\Field\FieldInstance[]
   */
  protected $fieldInstances;

  /**
   * @param EntityType $type
   * @param string $bundleName
   * @param array $bundleInfo
   * @param array $propertyInfo
   * @param \Drupal\entity2\Info\Field\FieldInstance[] $fieldInstances
   */
  function __construct(
    EntityType $type,
    $bundleName,
    array $bundleInfo,
    array $propertyInfo,
    array $fieldInstances
  ) {
    $this->entityTypes = $type->getEntityTypes();
    $this->entityType = $type;
    $this->bundleName = $bundleName;
    $this->bundleInfo = $bundleInfo;
    $this->propertyInfo = $propertyInfo;
    $this->fieldInstances = $fieldInstances;
  }

  /**
   * Initialize all lazy configuration components.
   */
  public function initAll() {
    foreach ($this->propertyInfo as $propertyName => $propertyInfo) {
      $this->getProperty($propertyName);
    }
  }

  /**
   * @return EntityType
   */
  public function getEntityType() {
    return $this->entityType;
  }

  /**
   * @return \stdClass
   */
  public function getLanguage() {
    return $this->entityType->getLanguage();
  }

  /**
   * @param string $propertyName
   *
   * @throws \Exception
   * @return PropertyInterface
   */
  function getProperty($propertyName) {

    if (isset($this->properties[$propertyName])) {
      return $this->properties[$propertyName];
    }

    if (!isset($this->propertyInfo[$propertyName])) {
      throw new UnkownPropertyException($propertyName, $this->bundleName, $this->entityType->getTypeName());
    }

    $propertyInfo = $this->propertyInfo[$propertyName];

    if (!is_array($propertyInfo)) {
      $propertyInfoType = is_object($propertyInfo) ? get_class($propertyInfo) : gettype($propertyInfo);
      throw new PropertyMisconfigurationException(
        $propertyInfo,
        "\$propertyInfo must be an array. $propertyInfoType given instead.",
        $propertyName,
        $this->bundleName,
        $this->entityType->getTypeName());
    }

    if (!isset($propertyInfo['type'])) {
      throw new PropertyMisconfigurationException(
        $propertyInfo,
        'no property type',
        $propertyName,
        $this->bundleName,
        $this->entityType->getTypeName());
    }

    return $this->properties[$propertyName] = $this->buildProperty($propertyName, $propertyInfo);
  }

  /**
   * @return Property\BasicProperty[]
   */
  public function getProperties() {
    foreach ($this->propertyInfo as $propertyName => $propertyInfo) {
      $this->getProperty($propertyName);
    }
    return $this->properties;
  }

  /**
   * @todo This could be moved to a PropertyFactory or PropertyManager class.
   *
   * @param string $propertyName
   * @param array $propertyInfo
   *
   * @return \Drupal\entity2\Info\Property\PropertyInterface
   * @throws \Drupal\entity2\Exception\UnkownEntityTypeException
   * @throws \Exception
   */
  public function buildProperty($propertyName, array $propertyInfo) {
    if (!isset($propertyInfo['type'])) {
      \Drupal\krumong\dpm($propertyInfo, $this->entityType->getTypeName());
    }
    $type = $propertyInfo['type'];
    if ('entity' === $type) {
      return new UnspecificEntityReferenceProperty($this, $propertyName, $propertyInfo, $this->entityTypes);
    }
    elseif ($this->entityTypes->isKnownEntityType($type)) {
      $entityType = $this->entityTypes->requireEntityType($type);
      return new EntityReferenceProperty($this, $propertyName, $propertyInfo, $entityType);
    }
    elseif ('list' === $type) {
      throw new \Exception("Lists are currently not supported.");
      # return $this->buildListProperty($propertyName, $propertyInfo, NULL);
    }
    elseif (FALSE !== $listType = $this->getListType($type)) {
      throw new \Exception("Lists are currently not supported.");
      # return $this->buildListProperty($propertyName, $propertyInfo, $listType);
    }
    else {
      return new BasicProperty($this, $propertyName, $propertyInfo);
    }
  }

  /**
   * @param string $type
   *
   * @return string|false
   */
  protected function getListType($type) {
    if (0 === strpos($type, 'list<') && '>' === $type[strlen($type) - 1]) {
      return substr($type, 5, -1);
    }
    return FALSE;
  }

  /**
   * @param string $fieldName
   *
   * @return \Drupal\entity2\Info\Field\FieldInstance|null
   */
  public function getFieldInstance($fieldName) {
    return isset($this->fieldInstances[$fieldName])
      ? $this->fieldInstances[$fieldName]
      : null;
  }

  /**
   * @return \Drupal\entity2\Info\Field\FieldInstance[]
   */
  public function getFieldInstances() {
    return $this->fieldInstances;
  }

  /**
   * @param object $entity
   * @param string $langcode
   *
   * @return string[]
   *   Format: $[$fieldName] = $fieldLangcode
   */
  public function langChooseFieldLanguages($entity, $langcode) {

    if (!is_string($langcode)) {
      throw new \InvalidArgumentException('Argument $langcode must be string.');
    }

    $langFieldLanguages = array();

    // By default display language is set to LANGUAGE_NONE if the field
    // translation is not available. It is up to translation handlers to
    // implement language fallback rules.
    foreach ($this->getFieldInstances() as $fieldName => $fieldInstance) {
      $langFieldLanguages[$fieldName] = isset($entity->{$fieldName}[$langcode])
        ? $langcode
        : 'und';
    }

    if ($this->entityType->hasAnyTranslationHandler()) {
      $this->entityType->fieldLanguagesAlter($langFieldLanguages, $entity, $langcode);
    }

    return $langFieldLanguages;
  }
} 
