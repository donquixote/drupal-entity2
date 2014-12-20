<?php

namespace Drupal\entity2\Loader;

use Drupal\entity2\Exception\MissingEntityException;

class EntityLoader implements EntityLoaderInterface {

  /**
   * @var \DrupalEntityControllerInterface
   */
  protected $controller;

  /**
   * @var string
   */
  protected $typeName;

  /**
   * @param \DrupalEntityControllerInterface $controller
   * @param string $typeName
   */
  function __construct(\DrupalEntityControllerInterface $controller, $typeName) {
    $this->controller = $controller;
    $this->typeName = $typeName;
  }

  /**
   * @param int $etid
   *
   * @return object
   * @throws \Exception
   */
  public function loadByIdRequired($etid) {
    $entity = $this->loadById($etid);
    if (!$entity) {
      throw new MissingEntityException("No entity of type '$this->typeName' and id=$etid found.");
    }
    return $entity;
  }

  /**
   * @param int $etid
   *
   * @return object|null
   *   The loaded entity object.
   */
  function loadById($etid) {
    $entities = $this->controller->load(array($etid));
    return !empty($entities)
      ? reset($entities)
      : NULL;
  }

  /**
   * @param int[] $etids
   *
   * @return object[]
   */
  function loadMultipleByIds(array $etids) {
    return $this->controller->load($etids);
  }
}
