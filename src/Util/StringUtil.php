<?php

namespace Drupal\entity2\Util;

class StringUtil {

  /**
   * @param string $text
   *
   * @return string
   */
  static function checkPlain($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
  }
}
