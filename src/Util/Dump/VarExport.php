<?php

namespace Drupal\entity2\Util\Dump;

class VarExport {

  /**
   * @var string
   */
  private $indent = '  ';

  /**
   * @param mixed $var
   *
   * @return string
   */
  function dump($var) {
    if (is_array($var)) {
      return $this->dumpArray($var);
    }
    elseif (is_object($var)) {
      return $this->dumpObject($var);
    }
    else {
      return var_export($var, TRUE);
    }
  }

  /**
   * @param array $var
   *
   * @return string
   */
  private function dumpArray(array $var) {
    if (array() === $var) {
      return 'array()';
    }
    elseif ($var === array_values($var)) {
      $result = '';
      foreach ($var as $k => $v) {
        $vDump = strtr($this->dump($v), array("\n" => "\n" . $this->indent));
        $result .= $this->indent . $vDump . ",\n";
      }
      return "array(\n$result)";
    }
    else {
      $result = '';
      foreach ($var as $k => $v) {
        $kDump = var_export($k, TRUE);
        $vDump = strtr($this->dump($v), array("\n" => "\n  "));
        $result .= $this->indent . $kDump . ' => ' . $vDump . ",\n";
      }
      return "array(\n$result)";
    }
  }

  /**
   * @param object $var
   *
   * @return string
   */
  private function dumpObject($var) {
    $class = get_class($var);
    if ('stdClass' === $class) {
      return '(object)' . $this->dumpArray((array)$var);
    }
    else {
      return 'unserialize(' . var_export(serialize($var), TRUE) . ')';
    }
  }

}
