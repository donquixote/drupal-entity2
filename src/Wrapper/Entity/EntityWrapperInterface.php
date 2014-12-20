<?php


namespace Drupal\entity2\Wrapper\Entity;


use Drupal\entity2\Info\Bundle;

interface EntityWrapperInterface {

  /**
   * @return object
   *   The entity being wrapped.
   */
  function getEntity();

  /**
   * @return Bundle
   */
  function getBundle();

  /**
   * @return string
   */
  function getBundleName();

  /**
   * Gets a raw property value.
   *
   * @param string $propertyName
   *
   * @return mixed
   */
  function get($propertyName);

  /**
   * @param string $fieldName
   * @param string|null $langcode
   *
   * @return array[]
   *
   * @see field_get_items()
   */
  function getFieldItems($fieldName, $langcode = NULL);

  /**
   * @param string $fieldName
   * @param int $delta
   * @param string|null $langcode
   *
   * @return array
   */
  function getFieldItem($fieldName, $delta = 0, $langcode = NULL);

  /**
   * @param string $fieldName
   * @param string $valueKey
   * @param int $delta
   * @param string|null $langcode
   *
   * @return mixed
   */
  public function getFieldValue($fieldName, $valueKey = 'value', $delta = 0, $langcode = NULL);

  /**
   * @return int
   */
  public function getEntityId();

  /**
   * @return string
   *   E.g. 'node' or 'taxonomy_term'.
   */
  public function getEntityTypeId();

  /**
   * @return int|null
   */
  public function getRevisionId();
} 
