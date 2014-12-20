<?php


namespace Drupal\entity2\Info;


use Drupal\entity2\Exception\UnkownEntityTypeException;
use Drupal\entity2\Info\Field\FieldInstancesInterface;
use Drupal\entity2\System\FieldLanguagesAlterInterface;

class EntityTypes {

  /**
   * @var array[]
   */
  protected $entityInfo;

  /**
   * @var array[]
   */
  protected $propertyInfo;

  /**
   * @var EntityType[]
   */
  protected $types = array();

  /**
   * @var \stdClass
   */
  protected $language;

  /**
   * @var \Drupal\entity2\Info\Field\FieldInstancesInterface
   */
  protected $fieldInfoInstances;

  /**
   * @var \Drupal\entity2\System\FieldLanguagesAlterInterface
   */
  protected $fieldLanguagesAlter;

  /**
   * @param array $entityInfo
   * @param array $propertyInfo
   * @param \stdClass $language
   * @param \Drupal\entity2\Info\Field\FieldInstancesInterface $fieldInfoInstances
   * @param \Drupal\entity2\System\FieldLanguagesAlterInterface $fieldLanguagesAlter
   */
  function __construct(
    array $entityInfo,
    array $propertyInfo,
    \stdClass $language,
    FieldInstancesInterface $fieldInfoInstances,
    FieldLanguagesAlterInterface $fieldLanguagesAlter
  ) {
    $this->entityInfo = $entityInfo;
    $this->propertyInfo = $propertyInfo;
    $this->language = $language;
    $this->fieldInfoInstances = $fieldInfoInstances;
    $this->fieldLanguagesAlter = $fieldLanguagesAlter;

  }

  /**
   * Initialize all lazy configuration components.
   *
   * @throws UnkownEntityTypeException
   */
  function initAll() {
    foreach ($this->propertyInfo as $typeName => $propertyInfo) {
      if (!isset($this->entityInfo[$typeName])) {
        // This one is not an entity type, but a "structure" type.
        continue;
      }
      $this->requireEntityType($typeName)->initAll();
    }
  }

  /**
   * @return \stdClass
   */
  public function getLanguage() {
    return $this->language;
  }

  /**
   * @param string $typeName
   *
   * @throws \Exception
   * @return EntityType
   */
  function requireEntityType($typeName) {
    if (isset($this->types[$typeName])) {
      return $this->types[$typeName];
    }
    if (!isset($this->entityInfo[$typeName])) {
      throw new UnkownEntityTypeException($typeName);
    }
    if (!isset($this->propertyInfo[$typeName])) {
      throw new UnkownEntityTypeException($typeName);
    }
    return $this->types[$typeName] = new EntityType(
      $this,
      $typeName,
      $this->entityInfo[$typeName],
      $this->propertyInfo[$typeName],
      $this->fieldInfoInstances,
      $this->fieldLanguagesAlter);
  }

  /**
   * @param string $typeName
   *
   * @return bool
   *   TRUE, if the entity type name is known.
   */
  public function isKnownEntityType($typeName) {
    if (isset($this->types[$typeName])) {
      return TRUE;
    }
    return isset($this->entityInfo[$typeName]) && isset($this->propertyInfo[$typeName]);
  }
} 
