<?php


namespace Drupal\entity2\Wrapper\ListValue;


use Drupal\entity2\Info\EntityType;
use Drupal\entity2\Info\ListProperty\EntityReferenceListProperty;
use Drupal\entity2\Wrapper\_List\AbstractEntityIdListWrapper;
use Drupal\entity2\Wrapper\Entity\EntityWrapperInterface;
use Drupal\entity2\Wrapper\Value\ValueWrapperInterface;

class EntityReferenceListWrapper extends AbstractEntityIdListWrapper implements ValueWrapperInterface {

  /**
   * @var EntityWrapperInterface
   */
  private $entityWrapper;

  /**
   * @var EntityReferenceListProperty
   */
  private $property;

  /**
   * @param EntityWrapperInterface $entityWrapper
   * @param EntityReferenceListProperty $property
   * @param EntityType $targetEntityType
   */
  function __construct(EntityWrapperInterface $entityWrapper, EntityReferenceListProperty $property, EntityType $targetEntityType) {
    $this->entityWrapper = $entityWrapper;
    $this->property = $property;
    parent::__construct($targetEntityType);
  }

  /**
   * @return int[]
   */
  protected function getEntityIds() {
    return $this->property->extractValue($this->entityWrapper);
  }
}
