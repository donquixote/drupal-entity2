<?php


namespace Drupal\entity2\DIC;

use Drupal\entity2\Exception\UnkownLanguageException;
use Drupal\entity2\Info\EntityTypes;
use Drupal\entity2\Main;

class ServiceContainer extends AbstractServiceContainer implements ServiceContainerInterface {

  /**
   * @return Main
   */
  protected function get_main() {
    return new Main($this->types);
  }

  /**
   * @throws UnkownLanguageException
   * @return EntityTypes
   */
  protected function get_types() {

    // hook_entity_property_info() includes translated strings, so each language
    // is cached separately.
    $langcode = $GLOBALS['language']->language;
    $list = language_list();
    if (!isset($list[$langcode])) {
      throw new UnkownLanguageException($langcode);
    }
    $language = $list[$langcode];

    if ($cache = cache_get("entity_property_info:$langcode")) {
      $propertyInfo = $cache->data;
    }
    else {
      $propertyInfo = module_invoke_all('entity_property_info');
      // Let other modules alter the entity info.
      drupal_alter('entity_property_info', $propertyInfo);
      cache_set("entity_property_info:$langcode", $propertyInfo);
    }

    return new EntityTypes(entity_get_info(), $propertyInfo, $language);
  }
} 
