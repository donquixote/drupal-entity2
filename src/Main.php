<?php


namespace Drupal\entity2;


use Drupal\entity2\Handle\EntityHandleById;
use Drupal\entity2\Info\EntityTypes;
use Drupal\entity2\Loader\LoaderManagerInterface;
use Drupal\entity2\Wrapper\Entity\EntityWrapper;
use Drupal\entity2\Wrapper\Entity\LazyEntityWrapper;

class Main {

  /**
   * @var EntityTypes
   */
  protected $entityTypes;

  /**
   * @var \Drupal\entity2\Loader\LoaderManagerInterface
   */
  protected $loaderManager;

  /**
   * @param EntityTypes $entityTypes
   * @param \Drupal\entity2\Loader\LoaderManagerInterface $loaderManager
   */
  function __construct(EntityTypes $entityTypes, LoaderManagerInterface $loaderManager) {
    $this->entityTypes = $entityTypes;
    $this->loaderManager = $loaderManager;
  }

  /**
   * @param string $typeName
   * @param object $entity
   *
   * @return \Drupal\entity2\Wrapper\Entity\EntityWrapperInterface
   */
  function wrapEntity($typeName, $entity) {
    return new EntityWrapper($entity, $this->entityTypes->requireEntityType($typeName));
  }

  /**
   * @param string $typeName
   * @param int $etid
   *
   * @return \Drupal\entity2\Wrapper\Entity\EntityWrapperInterface
   */
  function wrapEntityId($typeName, $etid) {
    $type = $this->entityTypes->requireEntityType($typeName);
    $loader = $this->loaderManager->typeGetLoader($typeName);
    $handle = new EntityHandleById($etid, $loader);
    return new LazyEntityWrapper($type, $handle);
  }
} 
