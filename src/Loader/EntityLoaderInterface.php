<?php

namespace Drupal\entity2\Loader;

interface EntityLoaderInterface {

  /**
   * @param int $etid
   *
   * @return object|null
   *   The loaded entity object.
   */
  function loadById($etid);

  /**
   * @param int[] $etids
   *
   * @return object[]
   */
  function loadMultipleByIds(array $etids);

  /**
   * @param int $etid
   *
   * @return object
   *   The loaded entity object.
   *
   * @throws \Exception
   *   Thrown if entity cannot be loaded.
   */
  public function loadByIdRequired($etid);

}
