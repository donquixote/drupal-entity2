<?php


namespace Drupal\entity2\Exception;


class UnkownPropertyException extends Entity2Exception {

  /**
   * @param string $propertyName
   * @param string $bundleName
   * @param string $typeName
   */
  function __construct($propertyName, $bundleName, $typeName) {
    parent::__construct(format_string("@propertyName in @typeName/@bundleName", array(
      '@propertyName' => $propertyName,
      '@bundleName' => $bundleName,
      '@typeName' => $typeName,
    )));
  }
} 
