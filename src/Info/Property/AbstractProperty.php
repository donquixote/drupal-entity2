<?php


namespace Drupal\entity2\Info\Property;


use Drupal\entity2\Info\Bundle;
use Drupal\entity2\Wrapper\Entity\EntityWrapperInterface;

abstract class AbstractProperty implements PropertyInterface {

  /**
   * @var Bundle
   */
  protected $bundle;

  /**
   * @var string
   */
  protected $propertyName;

  /**
   * @var array
   */
  protected $propertyInfo;

  /**
   * @param Bundle $bundle
   * @param string $propertyName
   * @param array $propertyInfo
   */
  public function __construct(Bundle $bundle, $propertyName, array $propertyInfo) {
    $this->bundle = $bundle;
    $this->propertyName = $propertyName;
    $this->propertyInfo = $propertyInfo;
  }

  /**
   * @return \stdClass
   */
  function getLanguage() {
    return $this->bundle->getLanguage();
  }

  /**
   * @param EntityWrapperInterface $entityWrapper
   *
   * @return mixed
   */
  public function extractValue(EntityWrapperInterface $entityWrapper) {
    $options = array(
      'language' => $this->getLanguage(),
      'absolute' => TRUE,
    );
    $callback = $this->propertyInfo['getter callback'];
    return $callback(
      $entityWrapper->getEntity(),
      $options,
      $this->propertyName,
      $this->bundle->getEntityType()->getTypeName(),
      $this->propertyInfo);
  }
} 
