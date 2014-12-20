<?php

namespace Drupal\entity2\Loader;

interface LoaderManagerInterface {

  /**
   * @param string $typeName
   *
   * @return EntityLoaderInterface
   */
  function typeGetLoader($typeName);
}
