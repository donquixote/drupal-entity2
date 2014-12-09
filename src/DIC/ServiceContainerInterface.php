<?php


namespace Drupal\entity2\DIC;

use Drupal\entity2\Info\EntityTypes;
use Drupal\entity2\Main;

/**
 * @property EntityTypes types
 * @property Main main
 */
interface ServiceContainerInterface {

  /**
   * @param string $key
   *
   * @return mixed
   */
  function __get($key);
} 
