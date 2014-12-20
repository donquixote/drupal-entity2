<?php

namespace Drupal\entity2\Info\Field;

use Drupal\entity2\Exception\FieldMisconfigurationException;
use Drupal\entity2\Util\StringUtil;

class Field {

  /**
   * @var string
   */
  private $fieldName;

  /**
   * @var array
   */
  private $info;

  /**
   * @param string $fieldName
   * @param array $info
   */
  public function __construct($fieldName, array $info) {
    $this->fieldName = $fieldName;
    $this->info = $info;
  }

  /**
   * @param string $key
   *
   * @return mixed
   * @throws \Drupal\entity2\Exception\FieldMisconfigurationException
   */
  public function requireSetting($key) {
    if (!isset($this->info['settings'][$key])) {
      $fieldNamePlain = StringUtil::checkPlain($this->fieldName);
      $keyPlain = StringUtil::checkPlain($key);
      throw new FieldMisconfigurationException("Field settings for '$fieldNamePlain' should have a key named '$keyPlain'.");
    }
    return $this->info['settings'][$key];
  }
}
