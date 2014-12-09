<?php


namespace Drupal\entity2\Wrapper\Value;


use Drupal\entity2\Info\Property\BasicProperty;
use Drupal\entity2\Wrapper\Entity\EntityWrapperInterface;

class BasicValueWrapper implements SingleValueWrapperInterface {

  /**
   * @var EntityWrapperInterface
   */
  private $entityWrapper;

  /**
   * @var BasicProperty
   */
  private $property;

  /**
   * @param EntityWrapperInterface $entityWrapper
   * @param BasicProperty $property
   */
  function __construct(EntityWrapperInterface $entityWrapper, BasicProperty $property) {
    $this->entityWrapper = $entityWrapper;
    $this->property = $property;
  }

  /**
   * @return mixed
   */
  function getValue() {
    return $this->property->extractValue($this->entityWrapper);
  }
} 
