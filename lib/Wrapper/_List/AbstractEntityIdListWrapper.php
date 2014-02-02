<?php


namespace Drupal\entity2\Wrapper\_List;


use Drupal\entity2\Info\EntityType;
use Drupal\entity2\Wrapper\Entity\EntityIdWrapper;
use Drupal\entity2\Wrapper\Iterator\EntityIdIterator;

/**
 * Represents a lazy-loaded list of entities.
 *
 * Etids are retrieved with $this->getEntityIds() as soon as they are needed.
 * The etids are enough to create EntityIdWrapper objects, so that loading of
 * the real entities is postponed even further.
 */
abstract class AbstractEntityIdListWrapper extends AbstractListWrapper {

  /**
   * @var EntityIdWrapper[]
   */
  protected $listEntityWrappers = array();

  /**
   * @var EntityType
   */
  protected $listEntityType;

  /**
   * @param EntityType $entityType
   *   Entity type of list items.
   *
   * @throws \Exception
   */
  function __construct(EntityType $entityType) {
    if (empty($entityType)) {
      throw new \Exception('$entityType must not be empty.');
    }
    $this->listEntityType = $entityType;
  }

  /**
   * @return int[]
   */
  abstract protected function getEntityIds();

  /**
   * @param string|int $delta
   *
   * @return int
   */
  protected function getEntityId($delta) {
    $etids = $this->getEntityIds();
    return $etids[$delta];
  }

  /**
   * @return EntityIdIterator
   */
  public function getIterator() {
    return new EntityIdIterator($this, array_keys($this->getEntityIds()));
  }

  /**
   * @param string|int $delta
   *
   * @return EntityIdWrapper
   */
  public function offsetGet($delta) {
    if (isset($this->listEntityWrappers[$delta])) {
      return $this->listEntityWrappers[$delta];
    }
    $etid = $this->getEntityId($delta);
    return $this->listEntityWrappers[$delta] = new EntityIdWrapper($etid, $this->listEntityType);
  }

  /**
   * @return int[]
   */
  protected function getRawItems() {
    return $this->getEntityIds();
  }
}
