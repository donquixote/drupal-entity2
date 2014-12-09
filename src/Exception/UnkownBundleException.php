<?php


namespace Drupal\entity2\Exception;


class UnkownBundleException extends Entity2Exception {

  /**
   * @param string $bundleName
   * @param string $typeName
   */
  function __construct($bundleName, $typeName) {
    parent::__construct(format_string("@typeName/@bundleName", array(
      '@bundleName' => $bundleName,
      '@typeName' => $typeName,
    )));
  }
} 
