<?php

namespace Drupal\entity2\System;

class FieldLanguagesAlterEmpty implements FieldLanguagesAlterInterface {

  /**
   * @param string[] $langFieldLanguages
   * @param string $typeName
   * @param object $entity
   * @param string $langcode
   */
  function fieldLanguagesAlter(array &$langFieldLanguages, $typeName, $entity, $langcode) {
    // Do nothing.
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
    return 'en';
  }
}
