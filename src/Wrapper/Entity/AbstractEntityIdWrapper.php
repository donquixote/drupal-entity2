<?php


namespace Drupal\entity2\Wrapper\Entity;


abstract class AbstractEntityIdWrapper extends AbstractEntityWrapper {

  /**
   * @var \stdClass|null
   *   The entity being wrapped.
   *   This is NULL until initialized with $this->getEntity().
   */
  protected $entity;

  /**
   * @return \stdClass|null
   *   The entity being wrapped.
   */
  public function getEntity() {
    if (isset($this->entity)) {
      return $this->entity;
    }
    $etid = $this->getEntityId();
    if (empty($etid) || (string)(int)$etid !== (string)$etid || !$etid > 0) {
      \Drupal\krumong\dpm(ddebug_backtrace(TRUE));
      \Drupal\krumong\dpm($this);
      return NULL;
    }
    $this->entity = $this->entityType->loadRequiredEntity($etid);
    return $this->entity;
  }

  /**
   * @return int
   */
  abstract public function getEntityId();
}
