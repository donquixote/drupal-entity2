<?php


namespace Drupal\entity2\Wrapper\Iterator;


use Drupal\entity2\Wrapper\_List\AbstractEntityIdListWrapper;
use Drupal\entity2\Wrapper\Entity\EntityIdWrapper;

class EntityIdIterator extends AbstractListIterator {

  /**
   * @var AbstractEntityIdListWrapper
   */
  protected $listWrapper;

  /**
   * @param AbstractEntityIdListWrapper $listWrapper
   * @param string[]|int[] $deltas
   */
  function __construct(AbstractEntityIdListWrapper $listWrapper, array $deltas) {
    $this->listWrapper = $listWrapper;
    parent::__construct($deltas);
  }


  /**
   * @return EntityIdWrapper
   */
  public function current() {
    if (!isset($this->deltas[$this->position])) {
      return NULL;
    }
    $delta = $this->deltas[$this->position];
    return $this->listWrapper->offsetGet($delta);
  }
}
