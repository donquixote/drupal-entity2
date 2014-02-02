<?php


namespace Drupal\entity2\Wrapper\Entity;


use Drupal\entity2\Info\EntityType;

class EntityIdWrapper extends AbstractEntityIdWrapper {

  /**
   * @var int
   */
  protected $etid;

  /**
   * @param int $etid
   * @param EntityType $entityType
   */
  function __construct($etid, EntityType $entityType) {
    $this->etid = $etid;
    parent::__construct($entityType);
  }

  /**
   * @return int
   */
  public function getEntityId() {
    return $this->etid;
  }
}
