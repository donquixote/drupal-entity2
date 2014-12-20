<?php


namespace Drupal\entity2\DIC;

use Drupal\entity2\Exception\UnkownLanguageException;
use Drupal\entity2\Info\EntityTypes;
use Drupal\entity2\Info\Field\FieldInfoInstancesCached;
use Drupal\entity2\Info\Field\Fields;
use Drupal\entity2\Loader\LoaderManager;
use Drupal\entity2\Main;
use Drupal\entity2\System\FieldLanguagesAlter;

class ServiceContainer extends AbstractServiceContainer implements ServiceContainerInterface {

  /**
   * @return Main
   *
   * @see \Drupal\entity2\DIC\ServiceContainerInterface::$main
   */
  protected function get_main() {
    return new Main($this->types, $this->loaderManager);
  }

  /**
   * @throws UnkownLanguageException
   * @return EntityTypes
   *
   * @see \Drupal\entity2\DIC\ServiceContainerInterface::$types
   */
  protected function get_types() {
    return new EntityTypes(
      $this->entityInfo,
      $this->propertyInfo,
      $this->language,
      $this->fieldInstances,
      $this->fieldLanguagesAlter);
  }

  /**
   * @return string
   *
   * @see \Drupal\entity2\DIC\ServiceContainerInterface::$langcode
   */
  protected function get_langcode() {
    return $GLOBALS['language']->language;
  }

  /**
   * @return object
   * @throws \Drupal\entity2\Exception\UnkownLanguageException
   *
   * @see \Drupal\entity2\DIC\ServiceContainerInterface::$language
   */
  protected function get_language() {
    // hook_entity_property_info() includes translated strings, so each language
    // is cached separately.
    $langcode = $GLOBALS['language']->language;
    $list = language_list();
    if (!isset($list[$langcode])) {
      throw new UnkownLanguageException($langcode);
    }
    return $list[$langcode];
  }

  /**
   * @return \Drupal\entity2\Info\Field\FieldInfoInstancesCached
   *
   * @see \Drupal\entity2\DIC\fieldInfoInstancesRaw::$fieldInfoInstances
   */
  protected function get_fieldInfoInstances() {
    return new FieldInfoInstancesCached(_field_info_field_cache());
  }

  /**
   * @return array
   *
   * @see \Drupal\entity2\DIC\propertyInfoRaw::$propertyInfo
   */
  protected function get_propertyInfo() {
    $langcode = $this->langcode;
    if ($cache = cache_get("entity_property_info:$langcode")) {
      return $cache->data;
    }
    /** @see hook_entity_property_info() */
    $propertyInfo = module_invoke_all('entity_property_info');
    // Let other modules alter the entity info.
    drupal_alter('entity_property_info', $propertyInfo);
    cache_set("entity_property_info:$langcode", $propertyInfo);

    return $propertyInfo;
  }

  /**
   * @return array
   *
   * @see \Drupal\entity2\DIC\ServiceContainerInterface::$entityInfo
   */
  protected function get_entityInfo() {
    return entity_get_info();
  }

  /**
   * @return \Drupal\entity2\System\FieldLanguagesAlterInterface
   *
   * @see \Drupal\entity2\DIC\ServiceContainerInterface::$fieldLanguagesAlter
   */
  protected function get_fieldLanguagesAlter() {
    return new FieldLanguagesAlter();
  }

  /**
   * @return \Drupal\entity2\Loader\LoaderManagerInterface
   *
   * @see \Drupal\entity2\DIC\ServiceContainerInterface::$loaderManager
   */
  protected function get_loaderManager() {
    return new LoaderManager();
  }

  /**
   * @return array
   *
   * @see \Drupal\entity2\DIC\ServiceContainerInterface::$fieldInfoFields
   */
  protected function get_fieldInfoFields() {
    return field_info_fields();
  }

  /**
   * @return \Drupal\entity2\Info\Field\Fields
   *
   * @see \Drupal\entity2\DIC\ServiceContainerInterface::$fields
   */
  protected function get_fields() {
    return new Fields($this->fieldInfoFields);
  }
} 
