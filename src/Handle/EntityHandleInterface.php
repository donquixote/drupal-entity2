<?php

namespace Drupal\entity2\Handle;

interface EntityHandleInterface {

  /**
   * @return object|null
   *   The loaded entity.
   */
  function load();

  /**
   * @return object|null
   *   The loaded entity.
   *
   * @throws \Exception
   */
  function loadRequire();
}
