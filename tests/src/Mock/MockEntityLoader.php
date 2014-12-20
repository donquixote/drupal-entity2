<?php

namespace Drupal\entity2\Tests\Mock;

use Drupal\entity2\Exception\MissingEntityException;
use Drupal\entity2\Loader\EntityLoaderInterface;

/**
 * @see MockLoaderManager
 */
class MockEntityLoader implements EntityLoaderInterface {

  /**
   * @var object[]
   */
  private $storage;

  /**
   * @var string
   */
  private $typeName;

  /**
   * @param object[] $storage
   * @param string $typeName
   */
  function __construct(array $storage, $typeName) {
    $this->storage = $storage;
    $this->typeName = $typeName;
  }

  /**
   * @param int $etid
   *
   * @return object|null
   *   The loaded entity object.
   */
  function loadById($etid) {
    return isset($this->storage[$etid])
      ? $this->storage[$etid]
      : NULL;
  }

  /**
   * @param int[] $etids
   *
   * @return object[]
   */
  function loadMultipleByIds(array $etids) {
    $entities = array();
    foreach ($etids as $etid) {
      if (isset($this->storage[$etid])) {
        $entities[$etid] = $this->storage[$etid];
      }
    }
    return $entities;
  }

  /**
   * @param int $etid
   *
   * @return object
   *   The loaded entity object.
   *
   * @throws \Exception
   *   Thrown if entity cannot be loaded.
   */
  public function loadByIdRequired($etid) {
    if (!isset($this->storage[$etid])) {
      throw new MissingEntityException("No entity of type '$this->typeName' and id=$etid found.");
    }
    return $this->storage[$etid];
  }
}
