<?php

namespace Drupal\entity2\Tests\Mock;

use Drupal\entity2\Loader\LoaderManagerInterface;
use Drupal\entity2\Tests\Fixtures\SiteData;

class MockLoaderManager implements LoaderManagerInterface {

  /**
   * @param string $typeName
   *
   * @return \Drupal\entity2\Loader\EntityLoaderInterface
   * @throws \Exception
   */
  function typeGetLoader($typeName) {
    $entitiesAll = SiteData::getEntitiesAll();
    $storage = $entitiesAll[$typeName];
    return new MockEntityLoader($storage, $typeName);
  }
}
