<?php


namespace Drupal\entity2\Wrapper\_List;


interface ListWrapperInterface extends \IteratorAggregate, \ArrayAccess, \Countable {

  /**
   * @return string[]|int[]
   */
  public function getDeltas();
} 
