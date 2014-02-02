<?php


namespace Drupal\entity2\Info\Property;


use Drupal\entity2\Wrapper\Entity\EntityWrapperInterface;
use Drupal\entity2\Wrapper\Value\SingleValueWrapperInterface;

interface PropertyInterface {

  /**
   * @param EntityWrapperInterface $entityWrapper
   *
   * @return SingleValueWrapperInterface
   */
  public function buildValueWrapper(EntityWrapperInterface $entityWrapper);
}
