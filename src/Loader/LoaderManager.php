<?php

namespace Drupal\entity2\Loader;

class LoaderManager implements LoaderManagerInterface {

  /**
   * @param string $typeName
   *
   * @return EntityLoaderInterface
   */
  function typeGetLoader($typeName) {
    $controller = entity_get_controller($typeName);
    return new EntityLoader($controller, $typeName);
  }
}
