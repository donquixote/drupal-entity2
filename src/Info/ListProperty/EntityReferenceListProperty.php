<?php


namespace Drupal\entity2\Info\ListProperty;


use Drupal\entity2\Info\Bundle;
use Drupal\entity2\Info\EntityType;
use Drupal\entity2\Info\Property\AbstractProperty;
use Drupal\entity2\Wrapper\Entity\EntityWrapperInterface;
use Drupal\entity2\Wrapper\ListValue\EntityReferenceListWrapper;
use Drupal\entity2\Wrapper\Value\SingleValueWrapperInterface;

class EntityReferenceListProperty extends AbstractProperty implements ListPropertyInterface {

  /**
   * @var EntityType
   */
  protected $targetEntityType;

  /**
   * @param Bundle $bundle
   * @param string $propertyName
   * @param array $propertyInfo
   * @param EntityType $targetEntityType
   */
  function __construct(Bundle $bundle, $propertyName, array $propertyInfo, EntityType $targetEntityType) {
    parent::__construct($bundle, $propertyName, $propertyInfo);
    $this->targetEntityType = $targetEntityType;
  }

  /**
   * @param EntityWrapperInterface $entityWrapper
   *
   * @return SingleValueWrapperInterface
   */
  public function buildValueWrapper(EntityWrapperInterface $entityWrapper) {
    return new EntityReferenceListWrapper($entityWrapper, $this, $this->targetEntityType);
  }

  /**
   * @return EntityType
   */
  public function getTargetEntityType() {
    return $this->targetEntityType;
  }
}
