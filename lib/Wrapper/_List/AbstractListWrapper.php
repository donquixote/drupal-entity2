<?php


namespace Drupal\entity2\Wrapper\_List;


abstract class AbstractListWrapper implements ListWrapperInterface {

  /**
   * @param string|int $delta
   *
   * @return bool
   *   TRUE, if the offset exists.
   */
  public function offsetExists($delta) {
    $rawItems = $this->getRawItems();
    return isset($rawItems[$delta]);
  }

  /**
   * @param string|int $delta
   * @param mixed $value
   *
   * @throws \Exception
   */
  public function offsetSet($delta, $value) {
    throw new \Exception("Not supported");
  }

  /**
   * @param string|int $delta
   *
   * @throws \Exception
   */
  public function offsetUnset($delta) {
    throw new \Exception("Not supported");
  }

  /**
   * @return int
   */
  public function count() {
    return count($this->getRawItems());
  }

  /**
   * @return mixed[]
   */
  abstract protected function getRawItems();

  /**
   * @return string[]|int[]
   */
  public function getDeltas() {
    return array_keys($this->getRawItems());
  }
}
