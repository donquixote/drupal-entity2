<?php


namespace Drupal\entity2\Wrapper\Entity;


use Drupal\entity2\Info\EntityType;

class EntityWrapper extends EntityWrapperBase {

  /**
   * @var \stdClass|null
   *   The entity being wrapped.
   */
  protected $entity;

  /**
   * @param \stdClass $parentEntity
   * @param EntityType $entityType
   */
  function __construct(\stdClass $parentEntity, EntityType $entityType) {
    $this->entity = $parentEntity;
    parent::__construct($entityType);
  }

  /**
   * @return \stdClass|null
   *   The entity being wrapped.
   */
  public function getEntity() {
    return $this->entity;
  }
}
