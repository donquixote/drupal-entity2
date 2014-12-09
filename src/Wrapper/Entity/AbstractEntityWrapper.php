<?php


namespace Drupal\entity2\Wrapper\Entity;


use Drupal\entity2\Info\Bundle;
use Drupal\entity2\Info\EntityType;
use Drupal\entity2\Wrapper\Value\BasicValueWrapper;
use Drupal\entity2\Wrapper\Value\ValueWrapperInterface;

abstract class AbstractEntityWrapper implements EntityWrapperInterface {

  /**
   * @var EntityType
   */
  protected $entityType;

  /**
   * @var Bundle
   *   Bundle of the entity. This stays NULL until getBundle() is called.
   */
  protected $bundle;

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
   * @param $propertyName
   *
   * @throws \Exception
   * @return ValueWrapperInterface
   */
  function getPropertyValue($propertyName) {
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
  public function getPropertyValues() {
    foreach ($this->getBundle()->getProperties() as $propertyName => $property) {
      $this->getPropertyValue($propertyName);
    }
    return $this->propertyValues;
  }
} 
