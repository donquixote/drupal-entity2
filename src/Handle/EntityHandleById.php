<?php

namespace Drupal\entity2\Handle;

use Drupal\entity2\Loader\EntityLoaderInterface;

class EntityHandleById implements EntityHandleInterface {

  /**
   * @var int
   */
  protected $etid;

  /**
   * @var \Drupal\entity2\Loader\EntityLoaderInterface
   */
  protected $loader;

  /**
   * @param int $etid
   * @param \Drupal\entity2\Loader\EntityLoaderInterface $loader
   */
  function __construct($etid, EntityLoaderInterface $loader) {
    $this->etid = $etid;
    $this->loader = $loader;
  }

  /**
   * @return object|null
   *   The loaded entity.
   */
  function load() {
    return $this->loader->loadById($this->etid);
  }

  /**
   * @return object|null
   *   The loaded entity.
   *
   * @throws \Exception
   */
  function loadRequire() {
    return $this->loader->loadByIdRequired($this->etid);
  }
}
