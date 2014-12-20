<?php

namespace Drupal\entity2\Info\Field;

/**
 * @see field_info_instances()
 */
class FieldInfoInstancesCached implements FieldInstancesInterface {

  /**
   * @var \FieldInfo
   */
  private $cache;

  /**
   * @param \FieldInfo $info
   *   Info, as returned from field_info_instances()
   */
  public function __construct(\FieldInfo $info) {
    $this->cache = $info;
  }

  /**
   * @param $typeName
   * @param $bundleName
   *
   * @return array
   */
  public function bundleGetFieldInstances($typeName, $bundleName) {
    $instances = array();
    foreach ($this->cache->getBundleInstances($typeName, $bundleName) as $fieldName => $info) {
      $instances[$fieldName] = new FieldInstance($info);
    }
    return $instances;
  }

}
