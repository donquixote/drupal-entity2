<?php


namespace Drupal\entity2\Info;


use Drupal\entity2\Exception\PropertyMisconfigurationException;
use Drupal\entity2\Exception\UnkownPropertyException;
use Drupal\entity2\Info\ListProperty\BasicListProperty;
use Drupal\entity2\Info\ListProperty\ListPropertyInterface;
use Drupal\entity2\Info\Property\BasicProperty;
use Drupal\entity2\Info\ListProperty\EntityReferenceListProperty;
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
   * @param EntityType $type
   * @param string $bundleName
   * @param array $bundleInfo
   * @param array $propertyInfo
   */
  function __construct(EntityType $type, $bundleName, $bundleInfo, array $propertyInfo) {
    $this->entityTypes = $type->getEntityTypes();
    $this->entityType = $type;
    $this->bundleName = $bundleName;
    $this->bundleInfo = $bundleInfo;
    $this->propertyInfo = $propertyInfo;
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
   * @return PropertyInterface
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
      return $this->buildListProperty($propertyName, $propertyInfo, NULL);
    }
    elseif (FALSE !== $listType = $this->getListType($type)) {
      return $this->buildListProperty($propertyName, $propertyInfo, $listType);
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
   * @param string $propertyName
   * @param array $propertyInfo
   * @param string $listType
   *
   * @throws PropertyMisconfigurationException
   * @return ListPropertyInterface
   */
  protected function buildListProperty($propertyName, $propertyInfo, $listType) {
    if ('entity' === $listType) {
      throw new PropertyMisconfigurationException(
        $propertyInfo,
        "Illegal list type 'entity'.",
        $propertyName,
        $this->bundleName,
        $this->entityType->getTypeName());
    }
    elseif ($this->entityTypes->isKnownEntityType($listType)) {
      $targetEntityType = $this->entityTypes->requireEntityType($listType);
      return new EntityReferenceListProperty($this, $propertyName, $propertyInfo, $targetEntityType);
    }
    else {
      return new BasicListProperty($this, $propertyName, $propertyInfo, $listType);
    }
  }
} 
