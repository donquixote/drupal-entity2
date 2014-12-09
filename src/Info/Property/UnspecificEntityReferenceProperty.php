<?php


namespace Drupal\entity2\Info\Property;

use Drupal\entity2\Info\Bundle;
use Drupal\entity2\Info\EntityTypes;
use Drupal\entity2\Wrapper\Entity\EntityWrapperInterface;
use Drupal\entity2\Wrapper\Value\SingleValueWrapperInterface;

/**
 * Property where the value is an entity with yet unknown entity type.
 */
class UnspecificEntityReferenceProperty extends AbstractProperty {

  /**
   * @var EntityTypes
   */
  protected $entityTypes;

  /**
   * @param Bundle $bundle
   * @param string $propertyName
   * @param array $propertyInfo
   * @param EntityTypes $entityTypes
   */
  function __construct(Bundle $bundle, $propertyName, array $propertyInfo, EntityTypes $entityTypes) {
    parent::__construct($bundle, $propertyName, $propertyInfo);
    $this->entityTypes = $entityTypes;
  }

  /**
   * @param EntityWrapperInterface $entityWrapper
   *
   * @return SingleValueWrapperInterface
   */
  public function buildValueWrapper(EntityWrapperInterface $entityWrapper) {
    // TODO: Implement buildValueWrapper() method.
  }
}
