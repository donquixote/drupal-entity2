<?php
namespace Drupal\entity2\Info\Field;

/**
 * @see field_info_instances()
 */
interface FieldInstancesInterface {

  /**
   * @param $typeName
   * @param $bundleName
   *
   * @return array
   */
  public function bundleGetFieldInstances($typeName, $bundleName);
}
