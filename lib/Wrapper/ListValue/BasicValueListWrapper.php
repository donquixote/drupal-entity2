<?php


namespace Drupal\entity2\Wrapper\ListValue;


use Drupal\entity2\Info\ListProperty\BasicListProperty;
use Drupal\entity2\Wrapper\_List\AbstractListWrapper;
use Drupal\entity2\Wrapper\Entity\EntityWrapperInterface;
use Drupal\entity2\Wrapper\Iterator\BasicValueIterator;
use Drupal\entity2\Wrapper\Value\ValueWrapperInterface;

class BasicValueListWrapper extends AbstractListWrapper implements ValueWrapperInterface {

  /**
   * @var EntityWrapperInterface
   */
  private $entityWrapper;

  /**
   * @var BasicListProperty
   */
  private $property;

  /**
   * @param EntityWrapperInterface $entityWrapper
   * @param BasicListProperty $property
   */
  function __construct(EntityWrapperInterface $entityWrapper, BasicListProperty $property) {
    $this->entityWrapper = $entityWrapper;
    $this->property = $property;
  }

  /**
   * @return mixed[]
   */
  protected function getRawItems() {
    return $this->property->extractValue($this->entityWrapper);
  }

  /**
   * @return \Traversable
   */
  public function getIterator() {
    return new BasicValueIterator($this, $this->getRawItems());
  }

  /**
   * @todo This should return a list item wrapper in every case.
   *
   * @param string|int $offset
   *
   * @return mixed
   */
  public function offsetGet($offset) {
    $rawItems = $this->getRawItems();
    if (!isset($rawItems[$offset])) {
      return NULL;
    }
    return $rawItems[$offset];
  }
}
