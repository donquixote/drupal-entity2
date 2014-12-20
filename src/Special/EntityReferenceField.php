<?php

namespace Drupal\entity2\Special;

use Drupal\entity2\Handle\EntityHandleById;
use Drupal\entity2\Info\EntityType;
use Drupal\entity2\Loader\EntityLoaderInterface;
use Drupal\entity2\Wrapper\Entity\EntityWrapperInterface;
use Drupal\entity2\Wrapper\Entity\LazyEntityWrapper;
use Drupal\entity2\DIC\ServiceContainerInterface;

class EntityReferenceField {

  /**
   * @var string
   */
  private $fieldName;

  /**
   * @var \Drupal\entity2\Info\EntityType
   */
  private $targetType;

  /**
   * @var \Drupal\entity2\Loader\EntityLoaderInterface
   */
  private $loader;

  /**
   * @param string $fieldName
   * @param \Drupal\entity2\DIC\ServiceContainerInterface $container
   *
   * @return static
   * @throws \Drupal\entity2\Exception\UnkownEntityTypeException
   */
  static function create($fieldName, ServiceContainerInterface $container) {
    $field = $container->fields->getField($fieldName);
    $targetType = $container->types->requireEntityType($field->requireSetting('target_type'));
    $loader = $container->loaderManager->typeGetLoader($targetType->getTypeName());
    return new static($fieldName, $targetType, $loader);
  }

  /**
   * @param string $fieldName
   * @param \Drupal\entity2\Info\EntityType $targetType
   * @param \Drupal\entity2\Loader\EntityLoaderInterface $loader
   */
  function __construct($fieldName, EntityType $targetType, EntityLoaderInterface $loader) {
    $this->fieldName = $fieldName;
    $this->targetType = $targetType;
    $this->loader = $loader;
  }

  /**
   * @param \Drupal\entity2\Wrapper\Entity\EntityWrapperInterface $eWrapper
   *
   * @return \Drupal\entity2\Wrapper\Entity\EntityWrapperInterface[]
   */
  function entityGetReferencedEntities(EntityWrapperInterface $eWrapper) {
    $result = array();
    foreach ($eWrapper->getFieldItems($this->fieldName) as $item) {
      $etid = $item['target_id'];
      $handle = new EntityHandleById($etid, $this->loader);
      $result[$etid] = new LazyEntityWrapper($this->targetType, $handle);
    }
    return $result;
  }
}
