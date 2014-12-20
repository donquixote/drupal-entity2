<?php


namespace Drupal\entity2\Wrapper\Value;


use Drupal\entity2\Info\EntityType;
use Drupal\entity2\Info\Property\EntityReferenceProperty;
use Drupal\entity2\Wrapper\Entity\EntityWrapperBase;
use Drupal\entity2\Wrapper\Entity\EntityWrapperInterface;

class EntityReferenceWrapper extends EntityWrapperBase implements SingleValueWrapperInterface {

  /**
   * @var EntityWrapperInterface
   */
  private $parentEntityWrapper;

  /**
   * @var EntityReferenceProperty
   */
  private $property;

  /**
   * @param EntityWrapperInterface $parentEntityWrapper
   * @param EntityReferenceProperty $property
   * @param EntityType $targetEntityType
   */
  function __construct(EntityWrapperInterface $parentEntityWrapper, EntityReferenceProperty $property, EntityType $targetEntityType) {
    $this->parentEntityWrapper = $parentEntityWrapper;
    $this->property = $property;
    parent::__construct($targetEntityType);
  }

  /**
   * @return \stdClass
   */
  function getValue() {
    return $this->getEntity();
  }

  /**
   * @return \stdClass
   *   The entity being wrapped.
   */
  function getEntity() {
    // TODO: Implement getEntity() method.
  }
}
