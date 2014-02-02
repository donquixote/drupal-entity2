<?php


namespace Drupal\entity2\DIC;

use Drupal\entity2\Info\EntityTypes;

abstract class AbstractServiceContainer {

  /**
   * @var mixed[]
   */
  protected $services = array();

  /**
   * @param string $key
   *
   * @return mixed|EntityTypes
   */
  function __get($key) {
    if (isset($this->services[$key])) {
      return $this->services[$key];
    }
    $method = 'get_' . $key;
    return $this->services[$key] = $this->$method();
  }
} 
