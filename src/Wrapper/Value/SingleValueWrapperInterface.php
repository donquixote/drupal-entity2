<?php


namespace Drupal\entity2\Wrapper\Value;


interface SingleValueWrapperInterface extends ValueWrapperInterface {

  /**
   * @return mixed
   */
  function getValue();
} 
