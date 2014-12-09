<?php


namespace Drupal\entity2\Info\ListProperty;


use Drupal\entity2\Info\Bundle;
use Drupal\entity2\Info\Property\AbstractProperty;
use Drupal\entity2\Wrapper\Entity\EntityWrapperInterface;
use Drupal\entity2\Wrapper\ListValue\BasicValueListWrapper;

class BasicListProperty extends AbstractProperty implements ListPropertyInterface {

  /**
   * @var string
   *   E.g. "integer".
   */
  protected $listType;

  /**
   * @param Bundle $bundle
   * @param string $propertyName
   * @param array $propertyInfo
   * @param string $listType
   */
  public function __construct(Bundle $bundle, $propertyName, array $propertyInfo, $listType) {
    parent::__construct($bundle, $propertyName, $propertyInfo);
    $this->listType = $listType;
  }

  /**
   * @param EntityWrapperInterface $entityWrapper
   *
   * @return BasicValueListWrapper
   */
  public function buildValueWrapper(EntityWrapperInterface $entityWrapper) {
    return new BasicValueListWrapper($entityWrapper, $this);
  }
} 
