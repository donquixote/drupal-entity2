<?php

namespace Drupal\entity2\System;

class FieldLanguagesAlter implements FieldLanguagesAlterInterface {

  /**
   * @param string[] $langFieldLanguages
   * @param string $typeName
   * @param object $entity
   * @param string $langcode
   */
  function fieldLanguagesAlter(array &$langFieldLanguages, $typeName, $entity, $langcode) {
    $context = array(
      'entity_type' => $typeName,
      'entity' => $entity,
      'language' => $langcode,
    );
    /**
     * @see hook_field_language_alter()
     * @see locale_field_language_alter()
     * @see entity_translation_field_language_alter()
     */
    drupal_alter('field_language', $langFieldLanguages, $context);
  }

  /**
   * @param string $langcode
   * @param bool $default
   *
   * @return string
   *   A valid language code.
   *
   * @see field_valid_language()
   */
  public function fieldValidLanguage($langcode, $default = TRUE) {
    $enabled_languages = field_content_languages();
    if (in_array($langcode, $enabled_languages)) {
      return $langcode;
    }
    global $language_content;
    return $default ? language_default('language') : $language_content->language;
  }
}
