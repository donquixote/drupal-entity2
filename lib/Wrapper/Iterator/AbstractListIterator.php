<?php


namespace Drupal\entity2\Wrapper\Iterator;


abstract class AbstractListIterator implements \Iterator {

  /**
   * @var string[]|int[]
   */
  protected $deltas;

  /**
   * @var int
   */
  protected $position = 0;

  /**
   * @param string[]|int[] $deltas
   */
  function __construct(array $deltas) {
    $this->deltas = $deltas;
  }

  /**
   * Move forward to next element
   */
  public function next() {
    ++$this->position;
  }

  /**
   * @return string|int|null
   */
  public function key() {
    if (!isset($this->deltas[$this->position])) {
      return NULL;
    }
    return $this->deltas[$this->position];
  }

  /**
   * @return bool
   *   TRUE, if there is still a value at the current position.
   */
  public function valid() {
    return isset($this->deltas[$this->position]);
  }

  /**
   * Rewind the Iterator to the first element.
   */
  public function rewind() {
    $this->position = 0;
  }
}
