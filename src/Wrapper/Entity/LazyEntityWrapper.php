<?php

namespace Drupal\entity2\Wrapper\Entity;

use Drupal\entity2\Handle\EntityHandleInterface;
use Drupal\entity2\Info\EntityType;

class LazyEntityWrapper extends EntityWrapperBase {

  /**
   * @var object|null
   */
  protected $entity;

  /**
   * @var EntityHandleInterface
   */
  protected $handle;

  /**
   * @param \Drupal\entity2\Info\EntityType $type
   * @param \Drupal\entity2\Handle\EntityHandleInterface $handle
   */
  function __construct(EntityType $type, EntityHandleInterface $handle) {
    parent::__construct($type);
    $this->handle = $handle;
  }

  /**
   * @return object
   *   The entity being wrapped.
   */
  function getEntity() {
    return isset($this->entity)
      ? $this->entity
      : $this->entity = $this->handle->loadRequire();
  }
}
