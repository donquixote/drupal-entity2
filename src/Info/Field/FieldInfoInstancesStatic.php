<?php

namespace Drupal\entity2\Info\Field;

class FieldInfoInstancesStatic implements FieldInstancesInterface {

  /**
   * @var array[][]
   */
  private $info;

  /**
   * @param array $info
   */
  function __construct(array $info) {
    $this->info = $info;
  }

  /**
   * @param $typeName
   * @param $bundleName
   *
   * @return array
   */
  public function bundleGetFieldInstances($typeName, $bundleName) {
    return isset($this->info[$typeName][$bundleName])
      ? $this->info[$typeName][$bundleName]
      : array();
  }
}
