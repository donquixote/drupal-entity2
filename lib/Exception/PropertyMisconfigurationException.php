<?php


namespace Drupal\entity2\Exception;


class PropertyMisconfigurationException extends Entity2Exception {

  /**
   * @var array
   */
  public $propertyInfo;

  /**
   * @param mixed $propertyInfo
   * @param string $message
   * @param string $propertyName
   * @param string $bundleName
   * @param string $typeName
   */
  function __construct($propertyInfo, $message, $propertyName, $bundleName, $typeName) {
    \Drupal\krumong\dpm($propertyInfo);
    $this->propertyInfo = $propertyInfo;
    parent::__construct(\format_string("Misconfigured property @typeName/@bundleName->@propertyName:\n@message", array(
      '@propertyName' => $propertyName,
      '@bundleName' => $bundleName,
      '@typeName' => $typeName,
      '@message' => $message,
    )));
  }
} 
