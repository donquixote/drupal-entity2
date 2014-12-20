<?php

namespace Drupal\entity2\Util;

use Drupal\entity2\Util\Dump\VarExport;

class DumpUtil {

  /**
   * @param mixed $var
   *
   * @return string
   */
  static function varExport($var) {
    $dumper = new VarExport();
    return $dumper->dump($var);
  }
}
