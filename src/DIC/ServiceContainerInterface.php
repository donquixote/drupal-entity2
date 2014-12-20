<?php


namespace Drupal\entity2\DIC;

use Drupal\entity2\Info\EntityTypes;
use Drupal\entity2\Main;

/**
 * @property EntityTypes $types
 * @property Main $main
 * @property string $langcode
 * @property object $language
 * @property array $fieldInfoInstancesRaw
 * @property \Drupal\entity2\Info\Field\FieldInstancesInterface $fieldInstances
 * @property \Drupal\entity2\Info\Field\Fields $fields
 * @property array $propertyInfo
 * @property array $entityInfo
 * @property \Drupal\entity2\System\FieldLanguagesAlterInterface fieldLanguagesAlter
 * @property \Drupal\entity2\Loader\LoaderManagerInterface $loaderManager
 * @property array $fieldInfoFields
 *
 * @see \Drupal\entity2\DIC\ServiceContainer
 */
interface ServiceContainerInterface {

  /**
   * @param string $key
   *
   * @return mixed
   */
  function __get($key);
}
