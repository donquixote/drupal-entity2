<?php


namespace Drupal\entity2;


use Drupal\entity2\Info\EntityTypes;
use Drupal\entity2\Wrapper\Entity\EntityIdWrapper;
use Drupal\entity2\Wrapper\Entity\EntityWrapper;

class Main {

  /**
   * @var EntityTypes
   */
  protected $entityTypes;

  /**
   * @param EntityTypes $entityTypes
   */
  function __construct(EntityTypes $entityTypes) {
    $this->entityTypes = $entityTypes;
  }

  /**
   * @param string $typeName
   * @param \stdClass $entity
   *
   * @return EntityWrapper
   */
  function wrapEntity($typeName, $entity) {
    return new EntityWrapper($entity, $this->entityTypes->requireEntityType($typeName));
  }

  /**
   * @param string $typeName
   * @param int $etid
   *
   * @return EntityIdWrapper
   */
  function wrapEntityId($typeName, $etid) {
    return new EntityIdWrapper($etid, $this->entityTypes->requireEntityType($typeName));
  }
} 
