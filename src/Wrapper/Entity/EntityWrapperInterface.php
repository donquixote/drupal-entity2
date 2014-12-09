<?php


namespace Drupal\entity2\Wrapper\Entity;


use Drupal\entity2\Info\Bundle;
use Drupal\entity2\Wrapper\Value\ValueWrapperInterface;

interface EntityWrapperInterface {

  /**
   * @return \stdClass
   *   The entity being wrapped.
   */
  function getEntity();

  /**
   * @throws \Exception
   * @return Bundle
   */
  function getBundle();

  /**
   * @param $propertyName
   *
   * @return ValueWrapperInterface
   */
  function getPropertyValue($propertyName);

  /**
   * @return ValueWrapperInterface[]
   */
  function getPropertyValues();

  function getFieldItems($fieldName);

  function getFieldItem($fieldName, $delta = 0);
} 
