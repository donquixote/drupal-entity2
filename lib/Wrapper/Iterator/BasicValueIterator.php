<?php


namespace Drupal\entity2\Wrapper\Iterator;


use Drupal\entity2\Wrapper\ListValue\BasicValueListWrapper;

class BasicValueIterator extends AbstractListIterator {

  /**
   * @var BasicValueListWrapper
   */
  protected $listWrapper;

  /**
   * @param BasicValueListWrapper $listWrapper
   * @param string[]|int[] $deltas
   */
  function __construct(BasicValueListWrapper $listWrapper, array $deltas) {
    $this->listWrapper = $listWrapper;
    parent::__construct($deltas);
  }

  /**
   * @return mixed|null
   */
  public function current() {
    if (!isset($this->deltas[$this->position])) {
      return NULL;
    }
    $delta = $this->deltas[$this->position];
    return $this->listWrapper->offsetGet($delta);
  }
}
