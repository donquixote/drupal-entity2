<?php


namespace Drupal\entity2\Info\Property;

use Drupal\entity2\Info\Bundle;
use Drupal\entity2\Info\EntityType;
use Drupal\entity2\Wrapper\Entity\EntityWrapperInterface;
use Drupal\entity2\Wrapper\Value\EntityReferenceWrapper;
use Drupal\entity2\Wrapper\Value\SingleValueWrapperInterface;

/**
 * Property where the value is an entity.
 */
class EntityReferenceProperty extends AbstractProperty {

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
    return new EntityReferenceWrapper($entityWrapper, $this, $this->targetEntityType);
  }

  /**
   * @param EntityWrapperInterface $entityWrapper
   *
   * @throws \Exception
   * @return int|null
   */
  public function extractReferencedEntityId(EntityWrapperInterface $entityWrapper) {
    $referencedEtid = parent::extractValue($entityWrapper);
    if (!isset($referencedEtid)) {
      return NULL;
    }
    if ((string)(int)$referencedEtid !== (string)$referencedEtid || !$referencedEtid > 0) {
      throw new \Exception("Referenced entity id is invalid.");
    }
    return $referencedEtid;
  }
}
