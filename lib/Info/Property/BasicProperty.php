<?php


namespace Drupal\entity2\Info\Property;

use Drupal\entity2\Wrapper\Entity\EntityWrapperInterface;
use Drupal\entity2\Wrapper\Value\BasicValueWrapper;

class BasicProperty extends AbstractProperty {

  /**
   * @param \Drupal\entity2\Wrapper\Entity\EntityWrapperInterface $entityWrapper
   *
   * @return mixed
   */
  public function extractValue(EntityWrapperInterface $entityWrapper) {
    $options = array(
      'language' => $this->getLanguage(),
      'absolute' => TRUE,
    );
    $callback = $this->propertyInfo['getter callback'];
    $context = $this->propertyInfo + array(
      // The callbacks still need old-school entity metadata wrappers.
      'parent' => entity_metadata_wrapper($this->bundle->getEntityType()->getTypeName(), $entityWrapper->getEntity()),
    );
    return $callback(
      $entityWrapper->getEntity(),
      $options,
      $this->propertyName,
      $this->bundle->getEntityType()->getTypeName(),
      $context);
  }

  /**
   * @param EntityWrapperInterface $entityWrapper
   *
   * @return BasicValueWrapper
   */
  public function buildValueWrapper(EntityWrapperInterface $entityWrapper) {
    return new BasicValueWrapper($entityWrapper, $this);
  }
}
