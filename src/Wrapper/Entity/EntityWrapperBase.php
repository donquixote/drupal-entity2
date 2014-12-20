<?php


namespace Drupal\entity2\Wrapper\Entity;


use Drupal\entity2\Info\Bundle;
use Drupal\entity2\Info\EntityType;
use Drupal\entity2\Wrapper\Value\BasicValueWrapper;
use Drupal\entity2\Wrapper\Value\ValueWrapperInterface;

abstract class EntityWrapperBase implements EntityWrapperInterface {

  /**
   * @var EntityType
   */
  protected $entityType;

  /**
   * Bundle of the entity. This stays NULL until getBundle() is called.
   *
   * @var Bundle|null
   */
  protected $bundle;

  /**
   * Lazy-evaluated language per field for this entity.
   *
   * @var string[][]
   *   Format: $[$langcode][$fieldName] = $fieldLangcode
   */
  protected $fieldLanguages = array();

  /**
   * @var BasicValueWrapper[]
   */
  protected $propertyValues = array();

  /**
   * @param EntityType $parentEntityType
   */
  function __construct(EntityType $parentEntityType) {
    $this->entityType = $parentEntityType;
  }

  /**
   * @throws \Exception
   * @return Bundle
   */
  function getBundle() {
    if (isset($this->bundle)) {
      return $this->bundle;
    }
    $entity = $this->getEntity();
    if (empty($entity)) {
      throw new \Exception("No entity.");
    }
    return $this->bundle = $this->entityType->entityGetBundle($entity);
  }

  /**
   * Gets a raw property value.
   *
   * @param string $propertyName
   *
   * @return mixed|null
   */
  function get($propertyName) {
    $entity = $this->getEntity();
    return isset($entity->$propertyName)
      ? $entity->$propertyName
      : NULL;
  }

  /**
   * @param string $propertyName
   *
   * @throws \Exception
   * @return ValueWrapperInterface
   */
  function getPropertyValueWrapper($propertyName) {
    if (isset($this->propertyValues[$propertyName])) {
      return $this->propertyValues[$propertyName];
    }
    $property = $this->getBundle()->getProperty($propertyName);
    $valueWrapper = $property->buildValueWrapper($this);
    if (!$valueWrapper instanceof ValueWrapperInterface) {
      throw new \Exception("Invalid value wrapper returned for property $propertyName");
    }
    return $this->propertyValues[$propertyName] = $valueWrapper;
  }

  /**
   * @return ValueWrapperInterface[]
   */
  public function getPropertyValueWrappers() {
    foreach ($this->getBundle()->getProperties() as $propertyName => $property) {
      $this->getPropertyValueWrapper($propertyName);
    }
    return $this->propertyValues;
  }

  /**
   * @param string $fieldName
   * @param string $valueKey
   * @param int $delta
   * @param string|null $langcode
   *
   * @return mixed|null
   */
  public function getFieldValue($fieldName, $valueKey = 'value', $delta = 0, $langcode = NULL) {
    $items = $this->getFieldItems($fieldName, $langcode);
    return isset($items[$delta][$valueKey])
      ? $items[$delta][$valueKey]
      : NULL;
  }

  /**
   * @param string $fieldName
   * @param int $delta
   * @param string|null $langcode
   *
   * @return array|null
   */
  function getFieldItem($fieldName, $delta = 0, $langcode = NULL) {
    $items = $this->getFieldItems($fieldName, $langcode);
    return isset($items[$delta])
      ? $items[$delta]
      : NULL;
  }

  /**
   * @param string $fieldName
   * @param string|null $langcode
   *
   * @return array[]
   *
   * @see field_get_items()
   */
  function getFieldItems($fieldName, $langcode = NULL) {
    $entity = $this->getEntity();
    if (empty($entity->$fieldName)) {
      return array();
    }
    $fieldLangcode = $this->getFieldLanguage($fieldName);
    if (!isset($fieldLangcode)) {
      return array('NO FIELD LANGCODE');
    }
    return (isset($fieldLangcode) && isset($entity->{$fieldName}[$fieldLangcode]))
      ? $entity->{$fieldName}[$fieldLangcode]
      : array();
  }

  /**
   * @param string $fieldName
   * @param string|null $langcode
   *
   * @return string|null
   *
   * @see field_language()
   */
  function getFieldLanguage($fieldName, $langcode = NULL) {
    $langcode = $this->entityType->fieldValidLanguage($langcode, FALSE);
    $langFieldLanguages = $this->langGetFieldLanguages($langcode);
    return isset($langFieldLanguages[$fieldName])
      ? $langFieldLanguages[$fieldName]
      : NULL;
  }

  /**
   * @param string $langcode
   *
   * @return string[]
   *   Format: $[$fieldName] = $fieldLangcode
   */
  public function langGetFieldLanguages($langcode) {
    return isset($this->fieldLanguages[$langcode])
      ? $this->fieldLanguages[$langcode]
      : $this->fieldLanguages[$langcode] = $this->getBundle()->langChooseFieldLanguages($this->getEntity(), $langcode);
  }

  /**
   * @return int
   */
  public function getEntityId() {
    return $this->entityType->entityGetId($this->getEntity());
  }

  /**
   * @return string
   *   E.g. 'node' or 'taxonomy_term'.
   */
  public function getEntityTypeId() {
    return $this->entityType->getTypeName();
  }

  /**
   * @return int|null
   */
  public function getRevisionId() {
    return $this->entityType->entityGetRevisionId($this->getEntity());
  }

  /**
   * @return string
   */
  function getBundleName() {
    return $this->entityType->entityGetBundleName($this->getEntity());
  }
} 
