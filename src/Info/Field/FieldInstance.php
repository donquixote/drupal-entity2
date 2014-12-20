<?php

namespace Drupal\entity2\Info\Field;

class FieldInstance {

  /**
   * @var array
   */
  protected $info;

  /**
   * @param array $info
   */
  function __construct(array $info) {
    $this->info = $info;
  }
}
