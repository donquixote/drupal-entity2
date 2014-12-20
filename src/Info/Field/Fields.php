<?php

namespace Drupal\entity2\Info\Field;

/**
 * @see field_info_fields()
 */
class Fields {

  /**
   * @var array
   */
  private $info;

  /**
   * @param array $info
   *   Info, as returned from field_info_fields()
   */
  public function __construct(array $info) {
    $this->info = $info;
  }

  /**
   * @param string $fieldName
   *
   * @return \Drupal\entity2\Info\Field\Field
   */
  public function getField($fieldName) {
    return new Field($fieldName, $this->info[$fieldName]);
  }

}
