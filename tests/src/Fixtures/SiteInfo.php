<?php

namespace Drupal\entity2\Tests\Fixtures;

class SiteInfo {

  /**
   * @return array
   *
   * @see field_info_instances()
   */
  static function fieldInfoInstances() {
    return array(
      'node' => array(
        'article' => array(
          'body' => array(
            'label' => 'Body',
            'widget' => array(
              'type' => 'text_textarea_with_summary',
              'settings' => array(
                'rows' => 20,
                'summary_rows' => 5,
              ),
              'weight' => '1',
              'module' => 'text',
            ),
            'settings' => array(
              'display_summary' => true,
              'text_processing' => 1,
              'user_register_form' => false,
              'entity_translation_sync' => false,
            ),
            'display' => array(
              'default' => array(
                'label' => 'hidden',
                'type' => 'text_default',
                'weight' => '0',
                'settings' => array(),
                'module' => 'text',
              ),
              'teaser' => array(
                'label' => 'hidden',
                'type' => 'text_summary_or_trimmed',
                'weight' => '0',
                'settings' => array(
                  'trim_length' => '300',
                ),
                'module' => 'text',
              ),
            ),
            'required' => false,
            'description' => '',
            'id' => '3',
            'field_id' => '3',
            'field_name' => 'body',
            'entity_type' => 'node',
            'bundle' => 'article',
            'deleted' => '0',
            'default_value' => NULL,
          ),
          'field_specialfield' => array(
            'label' => 'Specialfield',
            'widget' => array(
              'weight' => '2',
              'type' => 'text_textfield',
              'module' => 'text',
              'active' => 1,
              'settings' => array(
                'size' => '60',
              ),
            ),
            'settings' => array(
              'text_processing' => '0',
              'user_register_form' => false,
              'entity_translation_sync' => false,
            ),
            'display' => array(
              'default' => array(
                'label' => 'above',
                'type' => 'text_default',
                'weight' => '1',
                'settings' => array(),
                'module' => 'text',
              ),
              'teaser' => array(
                'label' => 'above',
                'type' => 'hidden',
                'weight' => '6',
                'settings' => array(),
              ),
            ),
            'required' => 0,
            'description' => '',
            'default_value' => NULL,
            'id' => '4',
            'field_id' => '4',
            'field_name' => 'field_specialfield',
            'entity_type' => 'node',
            'bundle' => 'article',
            'deleted' => '0',
          ),
          'field_categories' => array(
            'label' => 'Categories',
            'widget' => array(
              'weight' => '3',
              'type' => 'options_buttons',
              'module' => 'options',
              'active' => 1,
              'settings' => array(
                'label_no' => 'Nooo',
                'label_yes' => 'Yesss',
              ),
            ),
            'settings' => array(
              'user_register_form' => false,
              'entity_translation_sync' => false,
            ),
            'display' => array(
              'default' => array(
                'label' => 'above',
                'type' => 'taxonomy_term_reference_link',
                'weight' => '2',
                'settings' => array(),
                'module' => 'taxonomy',
              ),
              'teaser' => array(
                'label' => 'above',
                'type' => 'hidden',
                'weight' => '5',
                'settings' => array(),
              ),
            ),
            'required' => 0,
            'description' => '',
            'default_value' => NULL,
            'id' => '5',
            'field_id' => '5',
            'field_name' => 'field_categories',
            'entity_type' => 'node',
            'bundle' => 'article',
            'deleted' => '0',
          ),
          'field_file' => array(
            'label' => 'File',
            'widget' => array(
              'type' => 'file_generic',
              'weight' => '5',
              'settings' => array(
                'progress_indicator' => 'throbber',
              ),
              'module' => 'file',
            ),
            'settings' => array(
              'file_extensions' => 'txt',
              'file_directory' => '',
              'max_filesize' => '',
              'description_field' => 0,
              'user_register_form' => false,
              'entity_translation_sync' => false,
            ),
            'display' => array(
              'default' => array(
                'label' => 'above',
                'type' => 'file_default',
                'weight' => '3',
                'settings' => array(),
                'module' => 'file',
              ),
              'teaser' => array(
                'label' => 'above',
                'type' => 'hidden',
                'weight' => '4',
                'settings' => array(),
              ),
            ),
            'required' => false,
            'description' => '',
            'id' => '11',
            'field_id' => '9',
            'field_name' => 'field_file',
            'entity_type' => 'node',
            'bundle' => 'article',
            'deleted' => '0',
          ),
          'field_image' => array(
            'label' => 'Image',
            'widget' => array(
              'weight' => '6',
              'type' => 'image_image',
              'module' => 'image',
              'active' => 1,
              'settings' => array(
                'progress_indicator' => 'throbber',
                'preview_image_style' => 'thumbnail',
              ),
            ),
            'settings' => array(
              'file_directory' => '',
              'file_extensions' => 'png gif jpg jpeg',
              'max_filesize' => '',
              'max_resolution' => '',
              'min_resolution' => '',
              'alt_field' => 0,
              'title_field' => 0,
              'default_image' => 0,
              'user_register_form' => false,
              'entity_translation_sync' => false,
            ),
            'display' => array(
              'default' => array(
                'label' => 'above',
                'type' => 'image',
                'weight' => '4',
                'settings' => array(
                  'image_style' => 'medium',
                  'image_link' => '',
                ),
                'module' => 'image',
              ),
              'teaser' => array(
                'label' => 'above',
                'type' => 'hidden',
                'weight' => '3',
                'settings' => array(),
              ),
            ),
            'required' => 0,
            'description' => '',
            'id' => '12',
            'field_id' => '10',
            'field_name' => 'field_image',
            'entity_type' => 'node',
            'bundle' => 'article',
            'deleted' => '0',
          ),
          'field_breadcrumb_title' => array(
            'label' => 'Breadcrumb title',
            'widget' => array(
              'weight' => '8',
              'type' => 'text_textfield',
              'module' => 'text',
              'active' => 1,
              'settings' => array(
                'size' => '60',
              ),
            ),
            'settings' => array(
              'text_processing' => '0',
              'user_register_form' => false,
            ),
            'display' => array(
              'default' => array(
                'label' => 'above',
                'type' => 'text_default',
                'settings' => array(),
                'module' => 'text',
                'weight' => 5,
              ),
              'teaser' => array(
                'label' => 'above',
                'type' => 'hidden',
                'weight' => '2',
                'settings' => array(),
              ),
            ),
            'required' => 0,
            'description' => '',
            'ds_extras_field_template' => '',
            'default_value' => NULL,
            'id' => '17',
            'field_id' => '13',
            'field_name' => 'field_breadcrumb_title',
            'entity_type' => 'node',
            'bundle' => 'article',
            'deleted' => '0',
          ),
          'field_link' => array(
            'label' => 'Link',
            'widget' => array(
              'type' => 'link_field',
              'weight' => '9',
              'settings' => array(),
              'module' => 'link',
            ),
            'settings' => array(
              'attributes' => array(
                'target' => 'default',
                'class' => '',
                'rel' => '',
              ),
              'url' => 0,
              'title' => 'optional',
              'title_value' => '',
              'title_maxlength' => 128,
              'enable_tokens' => 1,
              'display' => array(
                'url_cutoff' => 80,
              ),
              'validate_url' => 1,
              'user_register_form' => false,
            ),
            'display' => array(
              'default' => array(
                'label' => 'above',
                'type' => 'link_default',
                'settings' => array(),
                'module' => 'link',
                'weight' => 6,
              ),
              'teaser' => array(
                'label' => 'above',
                'type' => 'd8plugin_link_domain',
                'weight' => '1',
                'settings' => array(
                  'strip_www' => 0,
                ),
                'module' => 'd8plugin_field',
              ),
            ),
            'required' => false,
            'description' => '',
            'id' => '18',
            'field_id' => '14',
            'field_name' => 'field_link',
            'entity_type' => 'node',
            'bundle' => 'article',
            'deleted' => '0',
            'default_value' => NULL,
          ),
        ),
        'book' => array(
          'body' => array(
            'label' => 'Body',
            'widget' => array(
              'type' => 'text_textarea_with_summary',
              'settings' => array(
                'rows' => 20,
                'summary_rows' => 5,
              ),
              'weight' => -4,
              'module' => 'text',
            ),
            'settings' => array(
              'display_summary' => true,
              'text_processing' => 1,
              'user_register_form' => false,
            ),
            'display' => array(
              'default' => array(
                'label' => 'hidden',
                'type' => 'text_default',
                'settings' => array(),
                'module' => 'text',
                'weight' => 0,
              ),
              'teaser' => array(
                'label' => 'hidden',
                'type' => 'text_summary_or_trimmed',
                'settings' => array(
                  'trim_length' => 600,
                ),
                'module' => 'text',
                'weight' => 0,
              ),
            ),
            'required' => false,
            'description' => '',
            'id' => '14',
            'field_id' => '3',
            'field_name' => 'body',
            'entity_type' => 'node',
            'bundle' => 'book',
            'deleted' => '0',
            'default_value' => NULL,
          ),
        ),
        'gallery' => array(
          'body' => array(
            'label' => 'Body',
            'widget' => array(
              'type' => 'text_textarea_with_summary',
              'settings' => array(
                'rows' => 20,
                'summary_rows' => 5,
              ),
              'weight' => '2',
              'module' => 'text',
            ),
            'settings' => array(
              'display_summary' => true,
              'text_processing' => 1,
              'user_register_form' => false,
            ),
            'display' => array(
              'default' => array(
                'label' => 'hidden',
                'type' => 'text_default',
                'weight' => '1',
                'settings' => array(),
                'module' => 'text',
              ),
              'teaser' => array(
                'label' => 'hidden',
                'type' => 'text_summary_or_trimmed',
                'settings' => array(
                  'trim_length' => 600,
                ),
                'module' => 'text',
                'weight' => 0,
              ),
              'full' => array(
                'label' => 'hidden',
                'type' => 'text_default',
                'weight' => '1',
                'settings' => array(),
                'module' => 'text',
              ),
            ),
            'required' => false,
            'description' => '',
            'id' => '15',
            'field_id' => '3',
            'field_name' => 'body',
            'entity_type' => 'node',
            'bundle' => 'gallery',
            'deleted' => '0',
            'default_value' => NULL,
          ),
          'field_images' => array(
            'label' => 'Images',
            'widget' => array(
              'weight' => '1',
              'type' => 'image_image',
              'module' => 'image',
              'active' => 1,
              'settings' => array(
                'progress_indicator' => 'throbber',
                'preview_image_style' => 'thumbnail',
              ),
            ),
            'settings' => array(
              'file_directory' => '',
              'file_extensions' => 'png gif jpg jpeg',
              'max_filesize' => '',
              'max_resolution' => '',
              'min_resolution' => '',
              'alt_field' => 0,
              'title_field' => 0,
              'default_image' => 0,
              'user_register_form' => false,
            ),
            'display' => array(
              'default' => array(
                'label' => 'above',
                'type' => 'galleryformatter_default',
                'weight' => '0',
                'settings' => array(
                  'slide_style' => 'galleryformatter_slide',
                  'thumb_style' => 'galleryformatter_thumb',
                  'style' => 'Greenarrows',
                  'link_to_full' => 1,
                  'link_to_full_style' => '0',
                  'modal' => 'none',
                  'linking_method' => 'show_full_link',
                ),
                'module' => 'galleryformatter',
              ),
              'full' => array(
                'label' => 'above',
                'type' => 'galleryformatter_default',
                'weight' => '0',
                'settings' => array(
                  'slide_style' => 'galleryformatter_slide',
                  'thumb_style' => 'galleryformatter_thumb',
                  'style' => 'Greenarrows',
                  'link_to_full' => 1,
                  'link_to_full_style' => '0',
                  'modal' => 'none',
                  'linking_method' => 'show_full_link',
                ),
                'module' => 'galleryformatter',
              ),
              'teaser' => array(
                'type' => 'hidden',
                'label' => 'above',
                'settings' => array(),
                'weight' => 0,
              ),
            ),
            'required' => 0,
            'description' => '',
            'ds_extras_field_template' => '',
            'id' => '16',
            'field_id' => '12',
            'field_name' => 'field_images',
            'entity_type' => 'node',
            'bundle' => 'gallery',
            'deleted' => '0',
          ),
          'field_referenced_nodes' => array(
            'label' => 'Referenced nodes',
            'widget' => array(
              'weight' => '4',
              'type' => 'options_select',
              'module' => 'options',
              'active' => 1,
              'settings' => array(),
            ),
            'settings' => array(
              'user_register_form' => false,
            ),
            'display' => array(
              'default' => array(
                'label' => 'above',
                'type' => 'entityreference_label',
                'settings' => array(
                  'link' => false,
                ),
                'module' => 'entityreference',
                'weight' => 2,
              ),
              'full' => array(
                'type' => 'hidden',
                'label' => 'above',
                'settings' => array(),
                'weight' => 0,
              ),
              'teaser' => array(
                'type' => 'hidden',
                'label' => 'above',
                'settings' => array(),
                'weight' => 0,
              ),
            ),
            'required' => 0,
            'description' => '',
            'ds_extras_field_template' => '',
            'default_value' => NULL,
            'id' => '20',
            'field_id' => '16',
            'field_name' => 'field_referenced_nodes',
            'entity_type' => 'node',
            'bundle' => 'gallery',
            'deleted' => '0',
          ),
        ),
      ),
      'taxonomy_term' => array(
        'categories' => array(),
      ),
      'commerce_product' => array(
        'product' => array(
          'commerce_price' => array(
            'label' => 'Price',
            'required' => true,
            'settings' => array(
              'user_register_form' => false,
              'entity_translation_sync' => false,
            ),
            'widget' => array(
              'type' => 'commerce_price_full',
              'weight' => 0,
              'settings' => array(
                'currency_code' => 'default',
              ),
              'module' => 'commerce_price',
            ),
            'display' => array(
              'full' => array(
                'label' => 'hidden',
                'type' => 'commerce_price_formatted_amount',
                'settings' => array(
                  'calculation' => 'calculated_sell_price',
                ),
                'weight' => 0,
                'module' => 'commerce_price',
              ),
              'default' => array(
                'label' => 'hidden',
                'type' => 'commerce_price_formatted_amount',
                'settings' => array(
                  'calculation' => 'calculated_sell_price',
                ),
                'weight' => 0,
                'module' => 'commerce_price',
              ),
              'node_teaser' => array(
                'label' => 'hidden',
                'type' => 'commerce_price_formatted_amount',
                'settings' => array(
                  'calculation' => 'calculated_sell_price',
                ),
                'weight' => 0,
                'module' => 'commerce_price',
              ),
            ),
            'description' => '',
            'id' => '13',
            'field_id' => '11',
            'field_name' => 'commerce_price',
            'entity_type' => 'commerce_product',
            'bundle' => 'product',
            'deleted' => '0',
            'default_value' => NULL,
          ),
        ),
      ),
      'fieldable_panels_pane' => array(
        'fieldable_panels_pane' => array(),
      ),
      'paragraphs_item' => array(
        'text_paragraph' => array(),
      ),
      'search_api_server' => array(
        'search_api_server' => array(),
      ),
      'search_api_index' => array(
        'search_api_index' => array(),
      ),
      'file' => array(
        'file' => array(),
      ),
      'taxonomy_vocabulary' => array(
        'taxonomy_vocabulary' => array(),
      ),
      'user' => array(
        'user' => array(
          'field_test_field' => array(
            'label' => 'Test field',
            'widget' => array(
              'weight' => '7',
              'type' => 'text_textfield',
              'module' => 'text',
              'active' => 1,
              'settings' => array(
                'size' => '60',
              ),
            ),
            'settings' => array(
              'text_processing' => '0',
              'user_register_form' => 0,
            ),
            'display' => array(
              'default' => array(
                'label' => 'above',
                'type' => 'text_default',
                'settings' => array(),
                'module' => 'text',
                'weight' => 0,
              ),
            ),
            'required' => 0,
            'description' => '',
            'default_value' => NULL,
            'id' => '1',
            'field_id' => '1',
            'field_name' => 'field_test_field',
            'entity_type' => 'user',
            'bundle' => 'user',
            'deleted' => '0',
          ),
          'field_fieldset_field' => array(
            'label' => 'fieldset field',
            'widget' => array(
              'weight' => '3',
              'type' => 'text_textfield',
              'module' => 'text',
              'active' => 1,
              'settings' => array(
                'size' => '60',
              ),
            ),
            'settings' => array(
              'text_processing' => '0',
              'user_register_form' => 0,
            ),
            'display' => array(
              'default' => array(
                'label' => 'above',
                'type' => 'text_default',
                'settings' => array(),
                'module' => 'text',
                'weight' => 1,
              ),
            ),
            'required' => 0,
            'description' => '',
            'default_value' => NULL,
            'id' => '2',
            'field_id' => '2',
            'field_name' => 'field_fieldset_field',
            'entity_type' => 'user',
            'bundle' => 'user',
            'deleted' => '0',
          ),
        ),
      ),
      'ds_views' => array(
        'ds_views' => array(),
      ),
      'rules_config' => array(
        'rules_config' => array(),
      ),
    );
  }

  /**
   * @return array
   *
   * @see field_info_fields()
   */
  static function fieldInfoFields() {
    return array(
      'field_test_field' => array(
        'translatable' => '0',
        'entity_types' => array(),
        'settings' => array(
          'max_length' => '255',
        ),
        'storage' => array(
          'type' => 'field_sql_storage',
          'settings' => array(),
          'module' => 'field_sql_storage',
          'active' => '1',
          'details' => array(
            'sql' => array(
              'FIELD_LOAD_CURRENT' => array(
                'field_data_field_test_field' => array(
                  'value' => 'field_test_field_value',
                  'format' => 'field_test_field_format',
                ),
              ),
              'FIELD_LOAD_REVISION' => array(
                'field_revision_field_test_field' => array(
                  'value' => 'field_test_field_value',
                  'format' => 'field_test_field_format',
                ),
              ),
            ),
          ),
        ),
        'foreign keys' => array(
          'format' => array(
            'table' => 'filter_format',
            'columns' => array(
              'format' => 'format',
            ),
          ),
        ),
        'indexes' => array(
          'format' => array(
            'format',
          ),
        ),
        'id' => '1',
        'field_name' => 'field_test_field',
        'type' => 'text',
        'module' => 'text',
        'active' => '1',
        'locked' => '0',
        'cardinality' => '1',
        'deleted' => '0',
        'columns' => array(
          'value' => array(
            'type' => 'varchar',
            'length' => '255',
            'not null' => false,
          ),
          'format' => array(
            'type' => 'varchar',
            'length' => 255,
            'not null' => false,
          ),
        ),
        'bundles' => array(
          'user' => array(
            'user',
          ),
        ),
      ),
      'field_fieldset_field' => array(
        'translatable' => '0',
        'entity_types' => array(),
        'settings' => array(
          'max_length' => '255',
        ),
        'storage' => array(
          'type' => 'field_sql_storage',
          'settings' => array(),
          'module' => 'field_sql_storage',
          'active' => '1',
          'details' => array(
            'sql' => array(
              'FIELD_LOAD_CURRENT' => array(
                'field_data_field_fieldset_field' => array(
                  'value' => 'field_fieldset_field_value',
                  'format' => 'field_fieldset_field_format',
                ),
              ),
              'FIELD_LOAD_REVISION' => array(
                'field_revision_field_fieldset_field' => array(
                  'value' => 'field_fieldset_field_value',
                  'format' => 'field_fieldset_field_format',
                ),
              ),
            ),
          ),
        ),
        'foreign keys' => array(
          'format' => array(
            'table' => 'filter_format',
            'columns' => array(
              'format' => 'format',
            ),
          ),
        ),
        'indexes' => array(
          'format' => array(
            'format',
          ),
        ),
        'id' => '2',
        'field_name' => 'field_fieldset_field',
        'type' => 'text',
        'module' => 'text',
        'active' => '1',
        'locked' => '0',
        'cardinality' => '1',
        'deleted' => '0',
        'columns' => array(
          'value' => array(
            'type' => 'varchar',
            'length' => '255',
            'not null' => false,
          ),
          'format' => array(
            'type' => 'varchar',
            'length' => 255,
            'not null' => false,
          ),
        ),
        'bundles' => array(
          'user' => array(
            'user',
          ),
        ),
      ),
      'body' => array(
        'entity_types' => array(
          'node',
        ),
        'translatable' => '0',
        'settings' => array(),
        'storage' => array(
          'type' => 'field_sql_storage',
          'settings' => array(),
          'module' => 'field_sql_storage',
          'active' => '1',
          'details' => array(
            'sql' => array(
              'FIELD_LOAD_CURRENT' => array(
                'field_data_body' => array(
                  'value' => 'body_value',
                  'summary' => 'body_summary',
                  'format' => 'body_format',
                ),
              ),
              'FIELD_LOAD_REVISION' => array(
                'field_revision_body' => array(
                  'value' => 'body_value',
                  'summary' => 'body_summary',
                  'format' => 'body_format',
                ),
              ),
            ),
          ),
        ),
        'foreign keys' => array(
          'format' => array(
            'table' => 'filter_format',
            'columns' => array(
              'format' => 'format',
            ),
          ),
        ),
        'indexes' => array(
          'format' => array(
            'format',
          ),
        ),
        'id' => '3',
        'field_name' => 'body',
        'type' => 'text_with_summary',
        'module' => 'text',
        'active' => '1',
        'locked' => '0',
        'cardinality' => '1',
        'deleted' => '0',
        'columns' => array(
          'value' => array(
            'type' => 'text',
            'size' => 'big',
            'not null' => false,
          ),
          'summary' => array(
            'type' => 'text',
            'size' => 'big',
            'not null' => false,
          ),
          'format' => array(
            'type' => 'varchar',
            'length' => 255,
            'not null' => false,
          ),
        ),
        'bundles' => array(
          'node' => array(
            'article',
            'book',
            'gallery',
          ),
        ),
      ),
      'field_specialfield' => array(
        'translatable' => '0',
        'entity_types' => array(),
        'settings' => array(
          'max_length' => '255',
        ),
        'storage' => array(
          'type' => 'field_sql_storage',
          'settings' => array(),
          'module' => 'field_sql_storage',
          'active' => '1',
          'details' => array(
            'sql' => array(
              'FIELD_LOAD_CURRENT' => array(
                'field_data_field_specialfield' => array(
                  'value' => 'field_specialfield_value',
                  'format' => 'field_specialfield_format',
                ),
              ),
              'FIELD_LOAD_REVISION' => array(
                'field_revision_field_specialfield' => array(
                  'value' => 'field_specialfield_value',
                  'format' => 'field_specialfield_format',
                ),
              ),
            ),
          ),
        ),
        'foreign keys' => array(
          'format' => array(
            'table' => 'filter_format',
            'columns' => array(
              'format' => 'format',
            ),
          ),
        ),
        'indexes' => array(
          'format' => array(
            'format',
          ),
        ),
        'id' => '4',
        'field_name' => 'field_specialfield',
        'type' => 'text',
        'module' => 'text',
        'active' => '1',
        'locked' => '0',
        'cardinality' => '1',
        'deleted' => '0',
        'columns' => array(
          'value' => array(
            'type' => 'varchar',
            'length' => '255',
            'not null' => false,
          ),
          'format' => array(
            'type' => 'varchar',
            'length' => 255,
            'not null' => false,
          ),
        ),
        'bundles' => array(
          'node' => array(
            'article',
          ),
        ),
      ),
      'field_categories' => array(
        'translatable' => '0',
        'entity_types' => array(),
        'settings' => array(
          'allowed_values' => array(
            array(
              'vocabulary' => 'categories',
              'parent' => '0',
            ),
          ),
        ),
        'storage' => array(
          'type' => 'field_sql_storage',
          'settings' => array(),
          'module' => 'field_sql_storage',
          'active' => '1',
          'details' => array(
            'sql' => array(
              'FIELD_LOAD_CURRENT' => array(
                'field_data_field_categories' => array(
                  'tid' => 'field_categories_tid',
                ),
              ),
              'FIELD_LOAD_REVISION' => array(
                'field_revision_field_categories' => array(
                  'tid' => 'field_categories_tid',
                ),
              ),
            ),
          ),
        ),
        'foreign keys' => array(
          'tid' => array(
            'table' => 'taxonomy_term_data',
            'columns' => array(
              'tid' => 'tid',
            ),
          ),
        ),
        'indexes' => array(
          'tid' => array(
            'tid',
          ),
        ),
        'id' => '5',
        'field_name' => 'field_categories',
        'type' => 'taxonomy_term_reference',
        'module' => 'taxonomy',
        'active' => '1',
        'locked' => '0',
        'cardinality' => '-1',
        'deleted' => '0',
        'columns' => array(
          'tid' => array(
            'type' => 'int',
            'unsigned' => true,
            'not null' => false,
          ),
        ),
        'bundles' => array(
          'node' => array(
            'article',
          ),
        ),
      ),
      'field_dsadasfdas' => array(
        'translatable' => '0',
        'entity_types' => array(),
        'settings' => array(
          'max_length' => '255',
        ),
        'storage' => array(
          'type' => 'field_sql_storage',
          'settings' => array(),
          'module' => 'field_sql_storage',
          'active' => '1',
          'details' => array(
            'sql' => array(
              'FIELD_LOAD_CURRENT' => array(
                'field_data_field_dsadasfdas' => array(
                  'value' => 'field_dsadasfdas_value',
                  'format' => 'field_dsadasfdas_format',
                ),
              ),
              'FIELD_LOAD_REVISION' => array(
                'field_revision_field_dsadasfdas' => array(
                  'value' => 'field_dsadasfdas_value',
                  'format' => 'field_dsadasfdas_format',
                ),
              ),
            ),
          ),
        ),
        'foreign keys' => array(
          'format' => array(
            'table' => 'filter_format',
            'columns' => array(
              'format' => 'format',
            ),
          ),
        ),
        'indexes' => array(
          'format' => array(
            'format',
          ),
        ),
        'id' => '6',
        'field_name' => 'field_dsadasfdas',
        'type' => 'text',
        'module' => 'text',
        'active' => '1',
        'locked' => '0',
        'cardinality' => '1',
        'deleted' => '0',
        'columns' => array(
          'value' => array(
            'type' => 'varchar',
            'length' => '255',
            'not null' => false,
          ),
          'format' => array(
            'type' => 'varchar',
            'length' => 255,
            'not null' => false,
          ),
        ),
        'bundles' => array(
          'example_entity' => array(
            'example_entity',
          ),
        ),
      ),
      'contact_name' => array(
        'entity_types' => array(),
        'foreign keys' => array(),
        'indexes' => array(
          'family' => array(
            'family',
          ),
          'given' => array(
            'given',
          ),
        ),
        'settings' => array(
          'allow_family_or_given' => 0,
          'autocomplete_separator' => array(
            'credentials' => ', ',
            'family' => ' -',
            'generational' => ' ',
            'given' => ' -',
            'middle' => ' -',
            'title' => ' ',
          ),
          'autocomplete_source' => array(
            'credentials' => array(),
            'family' => array(),
            'generational' => array(
              'generational' => 0,
            ),
            'given' => array(),
            'middle' => array(),
            'title' => array(
              'title' => 'title',
            ),
          ),
          'components' => array(
            'credentials' => 'credentials',
            'family' => 'family',
            'generational' => 'generational',
            'given' => 'given',
            'middle' => 'middle',
            'title' => 'title',
          ),
          'generational_options' => '-- --
          Jr.
          Sr.
          I
          II
          III
          IV
          V
          VI
          VII
          VIII
          IX
          X',
          'labels' => array(
            'credentials' => 'Credentials',
            'family' => 'Last',
            'generational' => 'Generational',
            'given' => 'First',
            'middle' => 'Middle',
            'title' => 'Title',
          ),
          'max_length' => array(
            'credentials' => 255,
            'family' => 63,
            'generational' => 15,
            'given' => 63,
            'middle' => 127,
            'title' => 31,
          ),
          'minimum_components' => array(
            'credentials' => 0,
            'family' => 'family',
            'generational' => 0,
            'given' => 'given',
            'middle' => 0,
            'title' => 0,
          ),
          'sort_options' => array(
            'generational' => 0,
            'title' => 'title',
          ),
          'title_options' => '-- --
          Mr.
          Mrs.
          Miss
          Ms.
          Dr.
          Prof.',
          'entity_translation_sync' => false,
        ),
        'translatable' => '0',
        'storage' => array(
          'type' => 'field_sql_storage',
          'settings' => array(),
          'module' => 'field_sql_storage',
          'active' => '1',
          'details' => array(
            'sql' => array(
              'FIELD_LOAD_CURRENT' => array(
                'field_data_contact_name' => array(
                  'title' => 'contact_name_title',
                  'given' => 'contact_name_given',
                  'middle' => 'contact_name_middle',
                  'family' => 'contact_name_family',
                  'generational' => 'contact_name_generational',
                  'credentials' => 'contact_name_credentials',
                ),
              ),
              'FIELD_LOAD_REVISION' => array(
                'field_revision_contact_name' => array(
                  'title' => 'contact_name_title',
                  'given' => 'contact_name_given',
                  'middle' => 'contact_name_middle',
                  'family' => 'contact_name_family',
                  'generational' => 'contact_name_generational',
                  'credentials' => 'contact_name_credentials',
                ),
              ),
            ),
          ),
        ),
        'id' => '7',
        'field_name' => 'contact_name',
        'type' => 'name',
        'module' => 'name',
        'active' => '1',
        'locked' => '0',
        'cardinality' => '1',
        'deleted' => '0',
        'columns' => array(
          'title' => array(
            'type' => 'varchar',
            'length' => 255,
            'not null' => false,
          ),
          'given' => array(
            'type' => 'varchar',
            'length' => 255,
            'not null' => false,
          ),
          'middle' => array(
            'type' => 'varchar',
            'length' => 255,
            'not null' => false,
          ),
          'family' => array(
            'type' => 'varchar',
            'length' => 255,
            'not null' => false,
          ),
          'generational' => array(
            'type' => 'varchar',
            'length' => 255,
            'not null' => false,
          ),
          'credentials' => array(
            'type' => 'varchar',
            'length' => 255,
            'not null' => false,
          ),
        ),
        'bundles' => array(
          'crm_core_contact' => array(
            'individual',
            'organization',
            'household',
          ),
        ),
      ),
      'endpoints' => array(
        'entity_types' => array(),
        'translatable' => '0',
        'settings' => array(
          'entity_translation_sync' => false,
        ),
        'storage' => array(
          'type' => 'field_sql_storage',
          'settings' => array(),
          'module' => 'field_sql_storage',
          'active' => '1',
          'details' => array(
            'sql' => array(
              'FIELD_LOAD_CURRENT' => array(
                'field_data_endpoints' => array(
                  'entity_type' => 'endpoints_entity_type',
                  'entity_id' => 'endpoints_entity_id',
                  'r_index' => 'endpoints_r_index',
                ),
              ),
              'FIELD_LOAD_REVISION' => array(
                'field_revision_endpoints' => array(
                  'entity_type' => 'endpoints_entity_type',
                  'entity_id' => 'endpoints_entity_id',
                  'r_index' => 'endpoints_r_index',
                ),
              ),
            ),
          ),
        ),
        'foreign keys' => array(),
        'indexes' => array(
          'relation' => array(
            'entity_type',
            'entity_id',
            'r_index',
          ),
        ),
        'id' => '8',
        'field_name' => 'endpoints',
        'type' => 'relation_endpoint',
        'module' => 'relation_endpoint',
        'active' => '1',
        'locked' => '0',
        'cardinality' => '-1',
        'deleted' => '0',
        'columns' => array(
          'entity_type' => array(
            'type' => 'varchar',
            'length' => 255,
            'not null' => true,
            'default' => '',
            'description' => 'Entity_type of this relation end-point.',
          ),
          'entity_id' => array(
            'type' => 'int',
            'unsigned' => true,
            'not null' => true,
            'default' => 0,
            'description' => 'Entity_id of this relation end-point.',
          ),
          'r_index' => array(
            'type' => 'int',
            'unsigned' => true,
            'not null' => true,
            'default' => 0,
            'description' => 'The index of this row in this relation. The highest index in the relation is stored as "arity" in the relation table.',
          ),
        ),
        'bundles' => array(
          'relation' => array(
            'crm_core_user_sync',
          ),
        ),
      ),
      'field_file' => array(
        'translatable' => '0',
        'entity_types' => array(),
        'settings' => array(
          'display_field' => 0,
          'display_default' => 0,
          'uri_scheme' => 'private',
          'entity_translation_sync' => array(
            'fid',
          ),
        ),
        'storage' => array(
          'type' => 'field_sql_storage',
          'settings' => array(),
          'module' => 'field_sql_storage',
          'active' => '1',
          'details' => array(
            'sql' => array(
              'FIELD_LOAD_CURRENT' => array(
                'field_data_field_file' => array(
                  'fid' => 'field_file_fid',
                  'display' => 'field_file_display',
                  'description' => 'field_file_description',
                ),
              ),
              'FIELD_LOAD_REVISION' => array(
                'field_revision_field_file' => array(
                  'fid' => 'field_file_fid',
                  'display' => 'field_file_display',
                  'description' => 'field_file_description',
                ),
              ),
            ),
          ),
        ),
        'foreign keys' => array(
          'fid' => array(
            'table' => 'file_managed',
            'columns' => array(
              'fid' => 'fid',
            ),
          ),
        ),
        'indexes' => array(
          'fid' => array(
            'fid',
          ),
        ),
        'id' => '9',
        'field_name' => 'field_file',
        'type' => 'file',
        'module' => 'file',
        'active' => '1',
        'locked' => '0',
        'cardinality' => '1',
        'deleted' => '0',
        'columns' => array(
          'fid' => array(
            'description' => 'The {file_managed}.fid being referenced in this field.',
            'type' => 'int',
            'not null' => false,
            'unsigned' => true,
          ),
          'display' => array(
            'description' => 'Flag to control whether this file should be displayed when viewing content.',
            'type' => 'int',
            'size' => 'tiny',
            'unsigned' => true,
            'not null' => true,
            'default' => 1,
          ),
          'description' => array(
            'description' => 'A description of the file.',
            'type' => 'text',
            'not null' => false,
          ),
        ),
        'bundles' => array(
          'node' => array(
            'article',
          ),
        ),
      ),
      'field_image' => array(
        'translatable' => '0',
        'entity_types' => array(),
        'settings' => array(
          'uri_scheme' => 'private',
          'default_image' => 0,
          'entity_translation_sync' => array(
            'fid',
          ),
        ),
        'storage' => array(
          'type' => 'field_sql_storage',
          'settings' => array(),
          'module' => 'field_sql_storage',
          'active' => '1',
          'details' => array(
            'sql' => array(
              'FIELD_LOAD_CURRENT' => array(
                'field_data_field_image' => array(
                  'fid' => 'field_image_fid',
                  'alt' => 'field_image_alt',
                  'title' => 'field_image_title',
                  'width' => 'field_image_width',
                  'height' => 'field_image_height',
                ),
              ),
              'FIELD_LOAD_REVISION' => array(
                'field_revision_field_image' => array(
                  'fid' => 'field_image_fid',
                  'alt' => 'field_image_alt',
                  'title' => 'field_image_title',
                  'width' => 'field_image_width',
                  'height' => 'field_image_height',
                ),
              ),
            ),
          ),
        ),
        'foreign keys' => array(
          'fid' => array(
            'table' => 'file_managed',
            'columns' => array(
              'fid' => 'fid',
            ),
          ),
        ),
        'indexes' => array(
          'fid' => array(
            'fid',
          ),
        ),
        'id' => '10',
        'field_name' => 'field_image',
        'type' => 'image',
        'module' => 'image',
        'active' => '1',
        'locked' => '0',
        'cardinality' => '1',
        'deleted' => '0',
        'columns' => array(
          'fid' => array(
            'description' => 'The {file_managed}.fid being referenced in this field.',
            'type' => 'int',
            'not null' => false,
            'unsigned' => true,
          ),
          'alt' => array(
            'description' => 'Alternative image text, for the image\'s \'alt\' attribute.',
            'type' => 'varchar',
            'length' => 512,
            'not null' => false,
          ),
          'title' => array(
            'description' => 'Image title text, for the image\'s \'title\' attribute.',
            'type' => 'varchar',
            'length' => 1024,
            'not null' => false,
          ),
          'width' => array(
            'description' => 'The width of the image in pixels.',
            'type' => 'int',
            'unsigned' => true,
          ),
          'height' => array(
            'description' => 'The height of the image in pixels.',
            'type' => 'int',
            'unsigned' => true,
          ),
        ),
        'bundles' => array(
          'node' => array(
            'article',
          ),
        ),
      ),
      'commerce_price' => array(
        'entity_types' => array(
          'commerce_product',
        ),
        'translatable' => '0',
        'settings' => array(
          'entity_translation_sync' => false,
        ),
        'storage' => array(
          'type' => 'field_sql_storage',
          'settings' => array(),
          'module' => 'field_sql_storage',
          'active' => '1',
          'details' => array(
            'sql' => array(
              'FIELD_LOAD_CURRENT' => array(
                'field_data_commerce_price' => array(
                  'amount' => 'commerce_price_amount',
                  'currency_code' => 'commerce_price_currency_code',
                  'data' => 'commerce_price_data',
                ),
              ),
              'FIELD_LOAD_REVISION' => array(
                'field_revision_commerce_price' => array(
                  'amount' => 'commerce_price_amount',
                  'currency_code' => 'commerce_price_currency_code',
                  'data' => 'commerce_price_data',
                ),
              ),
            ),
          ),
        ),
        'foreign keys' => array(),
        'indexes' => array(
          'currency_price' => array(
            'amount',
            'currency_code',
          ),
        ),
        'id' => '11',
        'field_name' => 'commerce_price',
        'type' => 'commerce_price',
        'module' => 'commerce_price',
        'active' => '1',
        'locked' => '1',
        'cardinality' => '1',
        'deleted' => '0',
        'columns' => array(
          'amount' => array(
            'description' => 'The price amount.',
            'type' => 'int',
            'not null' => true,
            'default' => 0,
          ),
          'currency_code' => array(
            'description' => 'The currency code for the price.',
            'type' => 'varchar',
            'length' => 32,
            'not null' => true,
          ),
          'data' => array(
            'description' => 'A serialized array of additional price data.',
            'type' => 'text',
            'size' => 'big',
            'not null' => false,
            'serialize' => true,
          ),
        ),
        'bundles' => array(
          'commerce_product' => array(
            'product',
          ),
        ),
      ),
      'field_images' => array(
        'translatable' => '0',
        'entity_types' => array(),
        'settings' => array(
          'uri_scheme' => 'public',
          'default_image' => 0,
        ),
        'storage' => array(
          'type' => 'field_sql_storage',
          'settings' => array(),
          'module' => 'field_sql_storage',
          'active' => '1',
          'details' => array(
            'sql' => array(
              'FIELD_LOAD_CURRENT' => array(
                'field_data_field_images' => array(
                  'fid' => 'field_images_fid',
                  'alt' => 'field_images_alt',
                  'title' => 'field_images_title',
                  'width' => 'field_images_width',
                  'height' => 'field_images_height',
                ),
              ),
              'FIELD_LOAD_REVISION' => array(
                'field_revision_field_images' => array(
                  'fid' => 'field_images_fid',
                  'alt' => 'field_images_alt',
                  'title' => 'field_images_title',
                  'width' => 'field_images_width',
                  'height' => 'field_images_height',
                ),
              ),
            ),
          ),
        ),
        'foreign keys' => array(
          'fid' => array(
            'table' => 'file_managed',
            'columns' => array(
              'fid' => 'fid',
            ),
          ),
        ),
        'indexes' => array(
          'fid' => array(
            'fid',
          ),
        ),
        'id' => '12',
        'field_name' => 'field_images',
        'type' => 'image',
        'module' => 'image',
        'active' => '1',
        'locked' => '0',
        'cardinality' => '-1',
        'deleted' => '0',
        'columns' => array(
          'fid' => array(
            'description' => 'The {file_managed}.fid being referenced in this field.',
            'type' => 'int',
            'not null' => false,
            'unsigned' => true,
          ),
          'alt' => array(
            'description' => 'Alternative image text, for the image\'s \'alt\' attribute.',
            'type' => 'varchar',
            'length' => 512,
            'not null' => false,
          ),
          'title' => array(
            'description' => 'Image title text, for the image\'s \'title\' attribute.',
            'type' => 'varchar',
            'length' => 1024,
            'not null' => false,
          ),
          'width' => array(
            'description' => 'The width of the image in pixels.',
            'type' => 'int',
            'unsigned' => true,
          ),
          'height' => array(
            'description' => 'The height of the image in pixels.',
            'type' => 'int',
            'unsigned' => true,
          ),
        ),
        'bundles' => array(
          'node' => array(
            'gallery',
          ),
        ),
      ),
      'field_breadcrumb_title' => array(
        'translatable' => '0',
        'entity_types' => array(),
        'settings' => array(
          'max_length' => 255,
        ),
        'storage' => array(
          'type' => 'field_sql_storage',
          'settings' => array(),
          'module' => 'field_sql_storage',
          'active' => '1',
          'details' => array(
            'sql' => array(
              'FIELD_LOAD_CURRENT' => array(
                'field_data_field_breadcrumb_title' => array(
                  'value' => 'field_breadcrumb_title_value',
                  'format' => 'field_breadcrumb_title_format',
                ),
              ),
              'FIELD_LOAD_REVISION' => array(
                'field_revision_field_breadcrumb_title' => array(
                  'value' => 'field_breadcrumb_title_value',
                  'format' => 'field_breadcrumb_title_format',
                ),
              ),
            ),
          ),
        ),
        'foreign keys' => array(
          'format' => array(
            'table' => 'filter_format',
            'columns' => array(
              'format' => 'format',
            ),
          ),
        ),
        'indexes' => array(
          'format' => array(
            'format',
          ),
        ),
        'id' => '13',
        'field_name' => 'field_breadcrumb_title',
        'type' => 'text',
        'module' => 'text',
        'active' => '1',
        'locked' => '0',
        'cardinality' => '1',
        'deleted' => '0',
        'columns' => array(
          'value' => array(
            'type' => 'varchar',
            'length' => 255,
            'not null' => false,
          ),
          'format' => array(
            'type' => 'varchar',
            'length' => 255,
            'not null' => false,
          ),
        ),
        'bundles' => array(
          'node' => array(
            'article',
          ),
        ),
      ),
      'field_link' => array(
        'translatable' => '0',
        'entity_types' => array(),
        'settings' => array(
          'attributes' => array(
            'target' => 'default',
            'class' => '',
            'rel' => '',
          ),
          'url' => 0,
          'title' => 'optional',
          'title_value' => '',
          'title_maxlength' => 128,
          'enable_tokens' => 1,
          'display' => array(
            'url_cutoff' => 80,
          ),
        ),
        'storage' => array(
          'type' => 'field_sql_storage',
          'settings' => array(),
          'module' => 'field_sql_storage',
          'active' => '1',
          'details' => array(
            'sql' => array(
              'FIELD_LOAD_CURRENT' => array(
                'field_data_field_link' => array(
                  'url' => 'field_link_url',
                  'title' => 'field_link_title',
                  'attributes' => 'field_link_attributes',
                ),
              ),
              'FIELD_LOAD_REVISION' => array(
                'field_revision_field_link' => array(
                  'url' => 'field_link_url',
                  'title' => 'field_link_title',
                  'attributes' => 'field_link_attributes',
                ),
              ),
            ),
          ),
        ),
        'foreign keys' => array(),
        'indexes' => array(),
        'id' => '14',
        'field_name' => 'field_link',
        'type' => 'link_field',
        'module' => 'link',
        'active' => '1',
        'locked' => '0',
        'cardinality' => '1',
        'deleted' => '0',
        'columns' => array(
          'url' => array(
            'type' => 'varchar',
            'length' => 2048,
            'not null' => false,
            'sortable' => true,
          ),
          'title' => array(
            'type' => 'varchar',
            'length' => 255,
            'not null' => false,
            'sortable' => true,
          ),
          'attributes' => array(
            'type' => 'text',
            'size' => 'medium',
            'not null' => false,
          ),
        ),
        'bundles' => array(
          'node' => array(
            'article',
          ),
        ),
      ),
      'field_referenced_nodes' => array(
        'translatable' => '0',
        'entity_types' => array(),
        'settings' => array(
          'target_type' => 'node',
          'handler' => 'base',
          'handler_settings' => array(
            'target_bundles' => array(),
            'sort' => array(
              'type' => 'none',
            ),
            'behaviors' => array(
              'views-select-list' => array(
                'status' => 0,
              ),
            ),
          ),
        ),
        'storage' => array(
          'type' => 'field_sql_storage',
          'settings' => array(),
          'module' => 'field_sql_storage',
          'active' => '1',
          'details' => array(
            'sql' => array(
              'FIELD_LOAD_CURRENT' => array(
                'field_data_field_referenced_nodes' => array(
                  'target_id' => 'field_referenced_nodes_target_id',
                ),
              ),
              'FIELD_LOAD_REVISION' => array(
                'field_revision_field_referenced_nodes' => array(
                  'target_id' => 'field_referenced_nodes_target_id',
                ),
              ),
            ),
          ),
        ),
        'foreign keys' => array(
          'node' => array(
            'table' => 'node',
            'columns' => array(
              'target_id' => 'nid',
            ),
          ),
        ),
        'indexes' => array(
          'target_id' => array(
            'target_id',
          ),
        ),
        'id' => '16',
        'field_name' => 'field_referenced_nodes',
        'type' => 'entityreference',
        'module' => 'entityreference',
        'active' => '1',
        'locked' => '0',
        'cardinality' => '-1',
        'deleted' => '0',
        'columns' => array(
          'target_id' => array(
            'description' => 'The id of the target entity.',
            'type' => 'int',
            'unsigned' => true,
            'not null' => true,
          ),
        ),
        'bundles' => array(
          'node' => array(
            'gallery',
          ),
        ),
      ),
    );
  }

  /**
   * @return array
   *
   * @see entity_get_info()
   */
  static function entityGetInfo() {
    return array(
      'node' => array(
        'field replacement' => array(
          'title' => array(
            'field' => array(
              'type' => 'text',
              'cardinality' => 1,
              'translatable' => true,
              'field_name' => 'title_field',
            ),
            'instance' => array(
              'label' => 'Title',
              'description' => '',
              'required' => true,
              'settings' => array(
                'text_processing' => 0,
              ),
              'widget' => array(
                'weight' => -5,
              ),
              'display' => array(
                'default' => array(
                  'type' => 'hidden',
                ),
              ),
              'field_name' => 'title_field',
            ),
            'callbacks' => array(
              'sync_get' => 'title_field_text_sync_get',
              'sync_set' => 'title_field_text_sync_set',
            ),
            'preprocess_key' => 'title',
          ),
        ),
        'efq bundle conditions' => true,
        'label' => 'Node',
        'controller class' => '\\Drupal\\sps\\EntityController\\EntityControllerWrapper',
        'base table' => 'node',
        'revision table' => 'node_revision',
        'uri callback' => 'node_uri',
        'fieldable' => true,
        'entity keys' => array(
          'id' => 'nid',
          'revision' => 'vid',
          'bundle' => 'type',
          'label' => 'title',
          'language' => 'language',
        ),
        'bundle keys' => array(
          'bundle' => 'type',
        ),
        'bundles' => array(
          'article' => array(
            'label' => 'Article',
            'admin' => array(
              'path' => 'admin/structure/types/manage/%node_type',
              'real path' => 'admin/structure/types/manage/article',
              'bundle argument' => 4,
              'access arguments' => array(
                'administer content types',
              ),
            ),
            'layouts' => array(
              'default' => array(
                'label' => 'Multi-field layout with background image',
                'path' => 'sites/all/modules/git/mflayout/layouts/mflayout_with_background',
                'regions' => array(
                  'ds_content' => 'Content',
                  'ds_hidden' => 'Hidden',
                ),
                'css' => true,
                'form' => true,
                'mflayout_slots' => array(
                  'background_image' => array(
                    'image',
                  ),
                ),
                'mflayout_preprocess' => array(
                  '_mflayout_preprocess_mflayout_with_background',
                ),
                'layout' => 'mflayout_with_background',
                'settings' => array(
                  'regions' => array(
                    'ds_content' => array(
                      'body',
                      'field_specialfield',
                      'field_categories',
                      'field_file',
                      'field_image',
                    ),
                  ),
                  'fields' => array(
                    'body' => 'ds_content',
                    'field_specialfield' => 'ds_content',
                    'field_categories' => 'ds_content',
                    'field_file' => 'ds_content',
                    'field_image' => 'ds_content',
                  ),
                  'classes' => array(),
                  'wrappers' => array(
                    'ds_content' => 'div',
                    'ds_hidden' => 'div',
                  ),
                  'layout_wrapper' => 'div',
                  'layout_attributes' => '',
                  'layout_attributes_merge' => 1,
                  'layout_link_attribute' => '',
                  'layout_link_custom' => '',
                  'mflayout' => array(
                    'slot_fields' => array(
                      'background_image' => 'field_image',
                    ),
                  ),
                  'hide_page_title' => '0',
                  'page_option_title' => '',
                  'hide_sidebars' => 0,
                ),
              ),
            ),
          ),
          'book' => array(
            'label' => 'Book page',
            'admin' => array(
              'path' => 'admin/structure/types/manage/%node_type',
              'real path' => 'admin/structure/types/manage/book',
              'bundle argument' => 4,
              'access arguments' => array(
                'administer content types',
              ),
            ),
          ),
          'gallery' => array(
            'label' => 'Gallery',
            'admin' => array(
              'path' => 'admin/structure/types/manage/%node_type',
              'real path' => 'admin/structure/types/manage/gallery',
              'bundle argument' => 4,
              'access arguments' => array(
                'administer content types',
              ),
            ),
            'layouts' => array(
              'full' => array(
                'label' => 'Reset',
                'path' => 'sites/all/modules/git/ds/layouts/ds_reset',
                'regions' => array(
                  'ds_content' => 'Content',
                  'ds_hidden' => 'Hidden',
                ),
                'image' => true,
                'layout' => 'ds_reset',
                'settings' => array(
                  'regions' => array(
                    'ds_content' => array(
                      'field_images',
                      'body',
                    ),
                  ),
                  'fields' => array(
                    'field_images' => 'ds_content',
                    'body' => 'ds_content',
                  ),
                  'classes' => array(),
                  'wrappers' => array(
                    'ds_content' => 'div',
                    'ds_hidden' => 'div',
                  ),
                  'layout_wrapper' => 'div',
                  'layout_attributes' => '',
                  'layout_attributes_merge' => true,
                  'layout_link_attribute' => false,
                  'layout_link_custom' => '',
                  'hide_page_title' => '0',
                  'page_option_title' => '',
                  'hide_sidebars' => 0,
                ),
              ),
            ),
          ),
        ),
        'view modes' => array(
          'full' => array(
            'label' => 'Full content',
            'custom settings' => false,
          ),
          'teaser' => array(
            'label' => 'Teaser',
            'custom settings' => true,
          ),
          'rss' => array(
            'label' => 'RSS',
            'custom settings' => false,
          ),
          'search_index' => array(
            'label' => 'Search index',
            'custom settings' => false,
          ),
          'search_result' => array(
            'label' => 'Search result',
            'custom settings' => false,
          ),
          'print' => array(
            'label' => 'Print',
            'custom settings' => false,
          ),
          'revision' => array(
            'label' => 'Revision',
            'custom settings' => false,
          ),
        ),
        'static cache' => true,
        'field cache' => true,
        'load hook' => 'node_load',
        'translation' => array(
          'locale' => true,
        ),
        'schema_fields_sql' => array(
          'base table' => array(
            'nid',
            'vid',
            'type',
            'language',
            'title',
            'uid',
            'status',
            'created',
            'changed',
            'comment',
            'promote',
            'sticky',
            'tnid',
            'translate',
          ),
          'revision table' => array(
            'nid',
            'vid',
            'uid',
            'title',
            'log',
            'timestamp',
            'status',
            'comment',
            'promote',
            'sticky',
            'ds_switch',
          ),
        ),
        'default path' => 'node/%node',
        'controller class base' => 'NodeController',
        'plural label' => 'Nodes',
        'description' => 'Nodes represent the main site content items.',
        'access callback' => 'entity_metadata_no_hook_node_access',
        'creation callback' => 'entity_metadata_create_node',
        'save callback' => 'node_save',
        'deletion callback' => 'node_delete',
        'revision deletion callback' => 'node_revision_delete',
        'form callback' => 'entity_metadata_form_node',
        'view callback' => 'entity_metadata_view_node',
        'configuration' => false,
        'label callback' => 'title_entity_label',
      ),
      'taxonomy_term' => array(
        'field replacement' => array(
          'name' => array(
            'field' => array(
              'type' => 'text',
              'cardinality' => 1,
              'translatable' => true,
              'field_name' => 'name_field',
            ),
            'instance' => array(
              'label' => 'Name',
              'description' => '',
              'required' => true,
              'settings' => array(
                'text_processing' => 0,
              ),
              'widget' => array(
                'weight' => -5,
              ),
              'display' => array(
                'default' => array(
                  'type' => 'hidden',
                ),
              ),
              'field_name' => 'name_field',
            ),
            'preprocess_key' => 'term_name',
            'callbacks' => array(
              'sync_get' => 'title_field_text_sync_get',
              'sync_set' => 'title_field_text_sync_set',
            ),
          ),
          'description' => array(
            'field' => array(
              'type' => 'text_with_summary',
              'cardinality' => 1,
              'translatable' => true,
              'field_name' => 'description_field',
            ),
            'instance' => array(
              'required' => false,
              'label' => 'Description',
              'description' => '',
              'settings' => array(
                'text_processing' => 1,
              ),
              'widget' => array(
                'weight' => -5,
              ),
              'display' => array(
                'default' => array(
                  'type' => 'hidden',
                ),
              ),
              'field_name' => 'description_field',
            ),
            'callbacks' => array(
              'submit' => 'title_field_term_description_submit',
              'sync_get' => 'title_field_text_with_summary_sync_get',
              'sync_set' => 'title_field_text_with_summary_sync_set',
            ),
            'additional keys' => array(
              'format' => 'format',
            ),
          ),
        ),
        'label' => 'Taxonomy term',
        'controller class' => 'TaxonomyTermController',
        'base table' => 'taxonomy_term_data',
        'uri callback' => 'taxonomy_term_uri',
        'fieldable' => true,
        'entity keys' => array(
          'id' => 'tid',
          'bundle' => 'vocabulary_machine_name',
          'label' => 'name',
          'revision' => '',
        ),
        'bundle keys' => array(
          'bundle' => 'machine_name',
        ),
        'bundles' => array(
          'categories' => array(
            'label' => 'Categories',
            'admin' => array(
              'path' => 'admin/structure/taxonomy/%taxonomy_vocabulary_machine_name',
              'real path' => 'admin/structure/taxonomy/categories',
              'bundle argument' => 3,
              'access arguments' => array(
                'administer taxonomy',
              ),
            ),
            'layouts' => array(
              'default' => array(
                'label' => 'Reset',
                'path' => 'sites/all/modules/git/ds/layouts/ds_reset',
                'regions' => array(
                  'ds_content' => 'Content',
                  'ds_hidden' => 'Hidden',
                ),
                'image' => true,
                'layout' => 'ds_reset',
                'settings' => array(
                  'regions' => array(
                    'ds_content' => array(
                      'views_content_ds__articles__panel_pane_1',
                      'title',
                      'views_content_ds__articles',
                    ),
                  ),
                  'fields' => array(
                    'title' => 'ds_content',
                    'description' => 'ds_content',
                    'views_content_ds__articles__panel_pane_1' => 'ds_content',
                  ),
                  'classes' => array(),
                  'wrappers' => array(
                    'ds_content' => 'div',
                  ),
                  'layout_wrapper' => 'div',
                  'layout_attributes' => '',
                  'layout_attributes_merge' => true,
                  'layout_link_attribute' => false,
                  'layout_link_custom' => false,
                ),
              ),
              'full' => array(
                'label' => 'Reset',
                'path' => 'sites/all/modules/git/ds/layouts/ds_reset',
                'regions' => array(
                  'ds_content' => 'Content',
                  'ds_hidden' => 'Hidden',
                ),
                'image' => true,
                'layout' => 'ds_reset',
                'settings' => array(
                  'regions' => array(
                    'ds_content' => array(
                      'description',
                      'views_content_ds__articles__panel_pane_1',
                      'views_content_ds__articles',
                    ),
                  ),
                  'fields' => array(
                    'description' => 'ds_content',
                    'more_link' => 'ds_content',
                    'views_content_ds__articles__panel_pane_1' => 'ds_content',
                  ),
                  'classes' => array(),
                  'wrappers' => array(
                    'ds_content' => 'div',
                  ),
                  'layout_wrapper' => 'div',
                  'layout_attributes' => '',
                  'layout_attributes_merge' => true,
                  'layout_link_attribute' => false,
                  'layout_link_custom' => '',
                ),
              ),
            ),
          ),
        ),
        'view modes' => array(
          'full' => array(
            'label' => 'Taxonomy term page',
            'custom settings' => false,
          ),
        ),
        'static cache' => true,
        'field cache' => true,
        'load hook' => 'taxonomy_term_load',
        'translation' => array(),
        'schema_fields_sql' => array(
          'base table' => array(
            'tid',
            'vid',
            'name',
            'description',
            'format',
            'weight',
          ),
        ),
        'default path' => 'taxonomy/term/%taxonomy_term',
        'plural label' => 'Taxonomy terms',
        'description' => 'Taxonomy terms are used for classifying content.',
        'access callback' => 'entity_metadata_taxonomy_access',
        'creation callback' => 'entity_metadata_create_object',
        'save callback' => 'taxonomy_term_save',
        'deletion callback' => 'taxonomy_term_delete',
        'view callback' => 'entity_metadata_view_single',
        'form callback' => 'entity_metadata_form_taxonomy_term',
        'token type' => 'term',
        'configuration' => false,
        'label callback' => 'title_entity_label',
      ),
      'commerce_line_item' => array(
        'label' => 'Commerce Line item',
        'controller class' => 'CommerceLineItemEntityController',
        'base table' => 'commerce_line_item',
        'fieldable' => true,
        'entity keys' => array(
          'id' => 'line_item_id',
          'bundle' => 'type',
          'label' => 'line_item_id',
          'revision' => '',
        ),
        'bundle keys' => array(
          'bundle' => 'type',
        ),
        'bundles' => array(),
        'load hook' => 'commerce_line_item_load',
        'view modes' => array(
          'display' => array(
            'label' => 'Display',
            'custom settings' => false,
          ),
        ),
        'access callback' => 'commerce_line_item_access',
        'access arguments' => array(
          'access tag' => 'commerce_line_item_access',
        ),
        'metadata controller class' => '',
        'token type' => 'commerce-line-item',
        'permission labels' => array(
          'singular' => 'line item',
          'plural' => 'line items',
        ),
        'redirect' => false,
        'static cache' => true,
        'field cache' => true,
        'translation' => array(),
        'schema_fields_sql' => array(
          'base table' => array(
            'line_item_id',
            'order_id',
            'type',
            'line_item_label',
            'quantity',
            'created',
            'changed',
            'data',
          ),
        ),
        'configuration' => false,
      ),
      'commerce_product' => array(
        'label' => 'Commerce Product',
        'controller class' => '\\Drupal\\sps\\EntityController\\EntityControllerWrapper',
        'base table' => 'commerce_product',
        'revision table' => 'commerce_product_revision',
        'fieldable' => true,
        'entity keys' => array(
          'id' => 'product_id',
          'bundle' => 'type',
          'label' => 'title',
          'revision' => 'revision_id',
          'language' => 'language',
        ),
        'bundle keys' => array(
          'bundle' => 'type',
        ),
        'bundles' => array(
          'product' => array(
            'label' => 'Product',
            'admin' => array(
              'path' => 'admin/commerce/products/types/product',
              'access arguments' => array(
                'administer product types',
              ),
            ),
          ),
        ),
        'load hook' => 'commerce_product_load',
        'view modes' => array(
          'full' => array(
            'label' => 'Admin display',
            'custom settings' => false,
          ),
        ),
        'uri callback' => 'commerce_product_ui_product_uri',
        'metadata controller class' => '',
        'token type' => 'commerce-product',
        'access callback' => 'commerce_entity_access',
        'access arguments' => array(
          'user key' => 'uid',
          'access tag' => 'commerce_product_access',
        ),
        'permission labels' => array(
          'singular' => 'product',
          'plural' => 'products',
        ),
        'redirect' => false,
        'translation' => array(
          'locale' => true,
          'entity_translation' => array(
            'class' => 'EntityTranslationCommerceProductHandler',
            'bundle callback' => 'commerce_product_entity_translation_supported_type',
            'default settings' => array(
              'default_language' => 'und',
              'hide_language_selector' => false,
            ),
            'base path' => 'admin/commerce/products/%commerce_product',
          ),
        ),
        'field replacement' => array(
          'title' => array(
            'field' => array(
              'type' => 'text',
              'cardinality' => 1,
              'translatable' => true,
              'field_name' => 'title_field',
            ),
            'instance' => array(
              'label' => 'Title',
              'required' => true,
              'settings' => array(
                'text_processing' => 0,
              ),
              'widget' => array(
                'weight' => -5,
              ),
              'field_name' => 'title_field',
            ),
            'callbacks' => array(
              'sync_get' => 'title_field_text_sync_get',
              'sync_set' => 'title_field_text_sync_set',
            ),
            'preprocess_key' => 'title',
          ),
        ),
        'static cache' => true,
        'field cache' => true,
        'schema_fields_sql' => array(
          'base table' => array(
            'product_id',
            'revision_id',
            'sku',
            'title',
            'type',
            'language',
            'uid',
            'status',
            'created',
            'changed',
            'data',
          ),
          'revision table' => array(
            'product_id',
            'revision_id',
            'sku',
            'title',
            'revision_uid',
            'status',
            'log',
            'revision_timestamp',
            'data',
          ),
        ),
        'controller class base' => 'CommerceProductEntityController',
        'configuration' => false,
        'label callback' => 'title_entity_label',
      ),
      'fieldable_panels_pane' => array(
        'label' => 'Fieldable panel pane',
        'controller class' => '\\Drupal\\sps\\EntityController\\EntityControllerWrapper',
        'base table' => 'fieldable_panels_panes',
        'revision table' => 'fieldable_panels_panes_revision',
        'fieldable' => true,
        'uuid' => true,
        'entity keys' => array(
          'id' => 'fpid',
          'revision' => 'vid',
          'bundle' => 'bundle',
          'label' => 'admin_title',
          'language' => 'language',
          'uuid' => 'uuid',
          'revision uuid' => 'vuuid',
        ),
        'bundles' => array(
          'fieldable_panels_pane' => array(
            'label' => 'Panels pane',
            'admin' => array(
              'path' => 'admin/structure/fieldable-panels-panes/manage/%fieldable_panels_panes_type',
              'bundle argument' => 4,
              'real path' => 'admin/structure/fieldable-panels-panes/manage/fieldable-panels-pane',
              'access arguments' => array(
                'administer fieldable panels panes',
              ),
            ),
          ),
        ),
        'view modes' => array(
          'full' => array(
            'label' => 'Full',
            'custom settings' => false,
          ),
        ),
        'view callback' => 'entity_metadata_view_single',
        'creation callback' => 'fieldable_panels_panes_create',
        'access callback' => 'fieldable_panels_panes_access',
        'save callback' => 'fieldable_panels_panes_save',
        'translation' => array(
          'entity_translation' => array(
            'class' => 'EntityTranslationFieldablePanelsPaneHandler',
            'base path' => 'admin/structure/fieldable-panels-panes/view/%fieldable_panels_panes',
            'edit path' => 'admin/structure/fieldable-panels-panes/view/%fieldable_panels_panes/edit',
            'path wildcard' => '%fieldable_panels_panes',
          ),
        ),
        'field replacement' => array(
          'title' => array(
            'field' => array(
              'type' => 'text',
              'cardinality' => 1,
              'translatable' => true,
              'field_name' => 'title_field',
            ),
            'instance' => array(
              'label' => 'Title',
              'description' => 'A field replacing fieldable panel pane title.',
              'required' => false,
              'settings' => array(
                'text_processing' => 0,
              ),
              'widget' => array(
                'weight' => -10,
              ),
              'field_name' => 'title_field',
            ),
            'callbacks' => array(
              'sync_get' => 'title_field_text_sync_get',
              'sync_set' => 'title_field_text_sync_set',
            ),
          ),
        ),
        'static cache' => true,
        'field cache' => true,
        'load hook' => 'fieldable_panels_pane_load',
        'schema_fields_sql' => array(
          'base table' => array(
            'fpid',
            'vid',
            'bundle',
            'title',
            'link',
            'path',
            'reusable',
            'admin_title',
            'admin_description',
            'category',
            'view_access',
            'edit_access',
            'created',
            'changed',
            'uuid',
            'language',
          ),
          'revision table' => array(
            'fpid',
            'vid',
            'timestamp',
            'uid',
            'title',
            'log',
            'vuuid',
          ),
        ),
        'controller class base' => 'PanelsPaneController',
        'configuration' => false,
      ),
      'field_collection_item' => array(
        'label' => 'Field collection item',
        'label callback' => 'entity_class_label',
        'uri callback' => 'entity_class_uri',
        'entity class' => 'FieldCollectionItemEntity',
        'controller class' => '\\Drupal\\sps\\EntityController\\EntityControllerWrapper',
        'base table' => 'field_collection_item',
        'revision table' => 'field_collection_item_revision',
        'fieldable' => true,
        'redirect' => false,
        'entity keys' => array(
          'id' => 'item_id',
          'revision' => 'revision_id',
          'bundle' => 'field_name',
        ),
        'module' => 'field_collection',
        'view modes' => array(
          'full' => array(
            'label' => 'Full content',
            'custom settings' => false,
          ),
        ),
        'access callback' => 'field_collection_item_access',
        'metadata controller class' => 'FieldCollectionItemMetadataController',
        'static cache' => true,
        'field cache' => true,
        'load hook' => 'field_collection_item_load',
        'bundles' => array(),
        'translation' => array(),
        'schema_fields_sql' => array(
          'base table' => array(
            'item_id',
            'revision_id',
            'field_name',
            'archived',
          ),
          'revision table' => array(
            'revision_id',
            'item_id',
          ),
        ),
        'controller class base' => 'EntityAPIController',
        'configuration' => false,
      ),
      'paragraphs_item' => array(
        'label' => 'Paragraphs item',
        'label callback' => 'entity_class_label',
        'uri callback' => 'entity_class_uri',
        'entity class' => 'ParagraphsItemEntity',
        'controller class' => '\\Drupal\\sps\\EntityController\\EntityControllerWrapper',
        'base table' => 'paragraphs_item',
        'revision table' => 'paragraphs_item_revision',
        'fieldable' => true,
        'redirect' => false,
        'entity keys' => array(
          'id' => 'item_id',
          'revision' => 'revision_id',
          'bundle' => 'bundle',
        ),
        'module' => 'paragraphs',
        'view modes' => array(
          'full' => array(
            'label' => 'Full content',
            'custom settings' => false,
          ),
        ),
        'bundle keys' => array(
          'bundle' => 'bundle',
        ),
        'access callback' => 'paragraphs_item_access',
        'metadata controller class' => 'ParagraphsItemMetadataController',
        'bundles' => array(
          'text_paragraph' => array(
            'label' => 'Paragraphs bundle text_paragraph',
            'admin' => array(
              'path' => 'admin/structure/paragraphs/%paragraphs_bundle',
              'real path' => 'admin/structure/paragraphs/text-paragraph',
              'bundle argument' => 3,
              'access arguments' => array(
                'administer paragraphs bundles',
              ),
            ),
          ),
        ),
        'static cache' => true,
        'field cache' => true,
        'load hook' => 'paragraphs_item_load',
        'translation' => array(),
        'schema_fields_sql' => array(
          'base table' => array(
            'item_id',
            'revision_id',
            'bundle',
            'field_name',
            'archived',
          ),
          'revision table' => array(
            'revision_id',
            'item_id',
          ),
        ),
        'controller class base' => 'EntityAPIController',
        'configuration' => false,
      ),
      'redirect' => array(
        'label' => 'Redirect',
        'base table' => 'redirect',
        'controller class' => 'RedirectController',
        'entity keys' => array(
          'id' => 'rid',
          'bundle' => 'type',
          'revision' => '',
        ),
        'fieldable' => false,
        'uuid' => false,
        'redirect' => false,
        'static cache' => true,
        'field cache' => true,
        'load hook' => 'redirect_load',
        'bundles' => array(),
        'view modes' => array(),
        'translation' => array(),
        'schema_fields_sql' => array(
          'base table' => array(
            'rid',
            'hash',
            'type',
            'uid',
            'source',
            'source_options',
            'redirect',
            'redirect_options',
            'language',
            'status_code',
            'count',
            'access',
          ),
        ),
        'configuration' => false,
      ),
      'search_api_server' => array(
        'label' => 'Search server',
        'controller class' => 'EntityAPIControllerExportable',
        'metadata controller class' => false,
        'entity class' => 'SearchApiServer',
        'base table' => 'search_api_server',
        'uri callback' => 'search_api_server_url',
        'access callback' => 'search_api_entity_access',
        'module' => 'search_api',
        'exportable' => true,
        'entity keys' => array(
          'id' => 'id',
          'label' => 'name',
          'name' => 'machine_name',
          'revision' => '',
          'bundle' => '',
        ),
        'fieldable' => false,
        'static cache' => true,
        'field cache' => true,
        'load hook' => 'search_api_server_load',
        'bundles' => array(
          'search_api_server' => array(
            'label' => 'Search server',
          ),
        ),
        'view modes' => array(),
        'translation' => array(),
        'schema_fields_sql' => array(
          'base table' => array(
            'id',
            'name',
            'machine_name',
            'description',
            'class',
            'options',
            'enabled',
            'status',
            'module',
          ),
        ),
        'configuration' => true,
      ),
      'search_api_index' => array(
        'label' => 'Search index',
        'controller class' => 'EntityAPIControllerExportable',
        'metadata controller class' => false,
        'entity class' => 'SearchApiIndex',
        'base table' => 'search_api_index',
        'uri callback' => 'search_api_index_url',
        'access callback' => 'search_api_entity_access',
        'module' => 'search_api',
        'exportable' => true,
        'entity keys' => array(
          'id' => 'id',
          'label' => 'name',
          'name' => 'machine_name',
          'revision' => '',
          'bundle' => '',
        ),
        'fieldable' => false,
        'static cache' => true,
        'field cache' => true,
        'load hook' => 'search_api_index_load',
        'bundles' => array(
          'search_api_index' => array(
            'label' => 'Search index',
          ),
        ),
        'view modes' => array(),
        'translation' => array(),
        'schema_fields_sql' => array(
          'base table' => array(
            'id',
            'name',
            'machine_name',
            'description',
            'server',
            'item_type',
            'options',
            'enabled',
            'read_only',
            'status',
            'module',
          ),
        ),
        'configuration' => true,
      ),
      'file' => array(
        'label' => 'File',
        'base table' => 'file_managed',
        'entity keys' => array(
          'id' => 'fid',
          'label' => 'filename',
          'revision' => '',
          'bundle' => '',
        ),
        'static cache' => false,
        'fieldable' => false,
        'controller class' => 'DrupalDefaultEntityController',
        'field cache' => true,
        'load hook' => 'file_load',
        'bundles' => array(
          'file' => array(
            'label' => 'File',
          ),
        ),
        'view modes' => array(),
        'translation' => array(),
        'schema_fields_sql' => array(
          'base table' => array(
            'fid',
            'uid',
            'filename',
            'uri',
            'filemime',
            'filesize',
            'status',
            'timestamp',
          ),
        ),
        'plural label' => 'Files',
        'description' => 'Uploaded file.',
        'access callback' => 'entity_metadata_file_access',
        'save callback' => 'file_save',
        'deletion callback' => 'entity_metadata_delete_file',
        'uri callback' => 'entity_metadata_uri_file',
        'configuration' => false,
      ),
      'taxonomy_vocabulary' => array(
        'label' => 'Taxonomy vocabulary',
        'controller class' => 'TaxonomyVocabularyController',
        'base table' => 'taxonomy_vocabulary',
        'entity keys' => array(
          'id' => 'vid',
          'label' => 'name',
          'revision' => '',
          'bundle' => '',
        ),
        'fieldable' => false,
        'static cache' => true,
        'field cache' => true,
        'load hook' => 'taxonomy_vocabulary_load',
        'bundles' => array(
          'taxonomy_vocabulary' => array(
            'label' => 'Taxonomy vocabulary',
          ),
        ),
        'view modes' => array(),
        'translation' => array(),
        'schema_fields_sql' => array(
          'base table' => array(
            'vid',
            'name',
            'machine_name',
            'description',
            'hierarchy',
            'module',
            'weight',
          ),
        ),
        'plural label' => 'Taxonomy vocabularies',
        'description' => 'Vocabularies contain related taxonomy terms, which are used for classifying content.',
        'access callback' => 'entity_metadata_taxonomy_access',
        'creation callback' => 'entity_metadata_create_object',
        'save callback' => 'taxonomy_vocabulary_save',
        'deletion callback' => 'taxonomy_vocabulary_delete',
        'form callback' => 'entity_metadata_form_taxonomy_vocabulary',
        'token type' => 'vocabulary',
        'configuration' => false,
      ),
      'user' => array(
        'label' => 'User',
        'controller class' => 'UserController',
        'base table' => 'users',
        'uri callback' => 'user_uri',
        'label callback' => 'format_username',
        'fieldable' => true,
        'entity keys' => array(
          'id' => 'uid',
          'revision' => '',
          'bundle' => '',
        ),
        'bundles' => array(
          'user' => array(
            'label' => 'User',
            'admin' => array(
              'path' => 'admin/config/people/accounts',
              'access arguments' => array(
                'administer users',
              ),
            ),
          ),
        ),
        'view modes' => array(
          'full' => array(
            'label' => 'User account',
            'custom settings' => false,
          ),
        ),
        'static cache' => true,
        'field cache' => true,
        'load hook' => 'user_load',
        'translation' => array(),
        'schema_fields_sql' => array(
          'base table' => array(
            'uid',
            'name',
            'pass',
            'mail',
            'theme',
            'signature',
            'signature_format',
            'created',
            'access',
            'login',
            'status',
            'timezone',
            'language',
            'picture',
            'init',
            'data',
          ),
        ),
        'default path' => 'user/%user',
        'plural label' => 'Users',
        'description' => 'Users who have created accounts on your site.',
        'access callback' => 'entity_metadata_user_access',
        'creation callback' => 'entity_metadata_create_object',
        'save callback' => 'entity_metadata_user_save',
        'deletion callback' => 'user_delete',
        'form callback' => 'entity_metadata_form_user',
        'view callback' => 'entity_metadata_view_single',
        'configuration' => false,
      ),
      'ds_views' => array(
        'label' => 'Display Suite Views',
        'bundles' => array(
          'ds_views' => array(
            'label' => 'Display Suite Views',
          ),
        ),
        'ds_display' => true,
        'base table' => 'views_view',
        'entity keys' => array(
          'id' => 'vid',
          'label' => 'name',
          'revision' => '',
          'bundle' => '',
        ),
        'fieldable' => false,
        'controller class' => 'DrupalDefaultEntityController',
        'static cache' => true,
        'field cache' => true,
        'load hook' => 'ds_views_load',
        'view modes' => array(),
        'translation' => array(),
        'schema_fields_sql' => array(
          'base table' => array(
            'vid',
            'name',
            'description',
            'tag',
            'base_table',
            'human_name',
            'core',
          ),
        ),
        'configuration' => false,
      ),
      'rules_config' => array(
        'label' => 'Rules configuration',
        'controller class' => 'RulesEntityController',
        'base table' => 'rules_config',
        'fieldable' => true,
        'entity keys' => array(
          'id' => 'id',
          'name' => 'name',
          'label' => 'label',
          'revision' => '',
          'bundle' => '',
        ),
        'module' => 'rules',
        'static cache' => true,
        'bundles' => array(
          'rules_config' => array(
            'label' => 'Rules configuration',
          ),
        ),
        'configuration' => true,
        'exportable' => true,
        'export' => array(
          'default hook' => 'default_rules_configuration',
        ),
        'access callback' => 'rules_config_access',
        'features controller class' => 'RulesFeaturesController',
        'field cache' => true,
        'load hook' => 'rules_config_load',
        'view modes' => array(),
        'translation' => array(),
        'schema_fields_sql' => array(
          'base table' => array(
            'id',
            'name',
            'label',
            'plugin',
            'active',
            'weight',
            'status',
            'dirty',
            'module',
            'owner',
            'access_exposed',
            'data',
          ),
        ),
      ),
    );
  }

  /**
   * @return array
   *
   * @see entity_get_property_info()
   */
  static function entityGetPropertyInfo() {
    return array(
      'commerce_line_item' => array(
        'properties' => array(
          'line_item_id' => array(
            'label' => 'Line item ID',
            'description' => 'The internal numeric ID of the line item.',
            'type' => 'integer',
            'schema field' => 'line_item_id',
          ),
          'order_id' => array(
            'label' => 'Order ID',
            'type' => 'integer',
            'description' => 'The unique ID of the order the line item belongs to.',
            'setter callback' => 'entity_property_verbatim_set',
            'setter permission' => 'administer line items',
            'clear' => array(
              'order',
            ),
            'schema field' => 'order_id',
          ),
          'order' => array(
            'label' => 'Order',
            'type' => 'commerce_order',
            'description' => 'The order the line item belongs to.',
            'getter callback' => 'commerce_line_item_get_properties',
            'setter callback' => 'commerce_line_item_set_properties',
            'setter permission' => 'administer line items',
            'required' => true,
            'computed' => true,
            'clear' => array(
              'order_id',
            ),
          ),
          'type' => array(
            'label' => 'Type',
            'description' => 'The human readable name of the line item type.',
            'type' => 'token',
            'setter callback' => 'entity_property_verbatim_set',
            'options list' => 'commerce_line_item_type_options_list',
            'required' => true,
            'schema field' => 'type',
          ),
          'line_item_label' => array(
            'label' => 'Line item label',
            'description' => 'The label displayed with the line item.',
            'type' => 'text',
            'setter callback' => 'entity_property_verbatim_set',
            'required' => true,
            'schema field' => 'line_item_label',
          ),
          'quantity' => array(
            'label' => 'Quantity',
            'description' => 'Quantity associated with this line item',
            'type' => 'decimal',
            'getter callback' => 'entity_property_verbatim_get',
            'setter callback' => 'entity_property_verbatim_set',
            'required' => true,
            'schema field' => 'quantity',
          ),
          'created' => array(
            'label' => 'Date created',
            'description' => 'The date the line item was created.',
            'type' => 'date',
            'setter callback' => 'entity_metadata_verbatim_set',
            'setter permission' => 'administer line items',
            'schema field' => 'created',
          ),
          'changed' => array(
            'label' => 'Date changed',
            'description' => 'The date the line item was most recently updated.',
            'type' => 'date',
            'schema field' => 'changed',
          ),
        ),
      ),
      'commerce_product' => array(
        'properties' => array(
          'product_id' => array(
            'label' => 'Product ID',
            'description' => 'The internal numeric ID of the product.',
            'type' => 'integer',
            'schema field' => 'product_id',
          ),
          'sku' => array(
            'label' => 'SKU',
            'description' => 'The human readable product SKU.',
            'type' => 'text',
            'setter callback' => 'entity_property_verbatim_set',
            'required' => true,
            'schema field' => 'sku',
          ),
          'type' => array(
            'label' => 'Type',
            'description' => 'The type of the product.',
            'type' => 'token',
            'setter callback' => 'entity_property_verbatim_set',
            'setter permission' => 'administer commerce_product entities',
            'options list' => 'commerce_product_type_options_list',
            'required' => true,
            'schema field' => 'type',
          ),
          'title' => array(
            'label' => 'Title',
            'description' => 'The title of the product.',
            'type' => 'text',
            'setter callback' => 'entity_property_verbatim_set',
            'required' => true,
            'schema field' => 'title',
          ),
          'language' => array(
            'label' => 'Language',
            'type' => 'token',
            'description' => 'The language the product was created in.',
            'setter callback' => 'entity_property_verbatim_set',
            'options list' => 'entity_metadata_language_list',
            'schema field' => 'language',
            'setter permission' => 'administer commerce_product entities',
          ),
          'status' => array(
            'label' => 'Status',
            'description' => 'Boolean indicating whether the product is active or disabled.',
            'type' => 'boolean',
            'options list' => 'commerce_product_status_options_list',
            'setter callback' => 'entity_property_verbatim_set',
            'setter permission' => 'administer commerce_product entities',
            'schema field' => 'status',
          ),
          'created' => array(
            'label' => 'Date created',
            'description' => 'The date the product was created.',
            'type' => 'date',
            'setter callback' => 'entity_property_verbatim_set',
            'setter permission' => 'administer commerce_product entities',
            'schema field' => 'created',
          ),
          'changed' => array(
            'label' => 'Date updated',
            'description' => 'The date the product was most recently updated.',
            'type' => 'date',
            'setter callback' => 'entity_property_verbatim_set',
            'query callback' => 'entity_metadata_table_query',
            'setter permission' => 'administer commerce_product entities',
            'schema field' => 'changed',
          ),
          'uid' => array(
            'label' => 'Creator ID',
            'type' => 'integer',
            'description' => 'The unique ID of the product creator.',
            'setter callback' => 'entity_property_verbatim_set',
            'setter permission' => 'administer commerce_product entities',
            'clear' => array(
              'creator',
            ),
            'schema field' => 'uid',
          ),
          'creator' => array(
            'label' => 'Creator',
            'type' => 'user',
            'description' => 'The creator of the product.',
            'getter callback' => 'commerce_product_get_properties',
            'setter callback' => 'commerce_product_set_properties',
            'setter permission' => 'administer commerce_product entities',
            'required' => true,
            'computed' => true,
            'clear' => array(
              'uid',
            ),
          ),
          'commerce_price' => array(
            'label' => 'Price',
            'type' => 'commerce_price',
            'description' => 'Field "commerce_price".',
            'getter callback' => 'entity_metadata_field_verbatim_get',
            'setter callback' => 'entity_metadata_field_verbatim_set',
            'access callback' => 'entity_metadata_field_access_callback',
            'translatable' => false,
            'field' => true,
            'required' => true,
            'auto creation' => 'commerce_price_field_data_auto_creation',
            'property info' => array(
              'amount' => array(
                'label' => 'Amount',
                'description' => '',
                'type' => 'decimal',
                'getter callback' => 'entity_property_verbatim_get',
                'setter callback' => 'entity_property_verbatim_set',
              ),
              'amount_decimal' => array(
                'label' => 'Amount (decimal)',
                'description' => '',
                'type' => 'decimal',
                'getter callback' => 'commerce_price_amount_decimal_get',
                'computed' => true,
              ),
              'currency_code' => array(
                'label' => 'Currency',
                'description' => '',
                'type' => 'text',
                'getter callback' => 'entity_property_verbatim_get',
                'setter callback' => 'entity_property_verbatim_set',
                'options list' => 'commerce_currency_code_options_list',
              ),
              'data' => array(
                'label' => 'Data',
                'description' => '',
                'type' => 'struct',
                'getter callback' => 'entity_property_verbatim_get',
                'setter callback' => 'entity_property_verbatim_set',
              ),
            ),
          ),
          'edit_url' => array(
            'label' => 'Edit URL',
            'description' => 'The URL of the product\'s edit page.',
            'getter callback' => 'commerce_product_get_properties',
            'type' => 'uri',
          ),
        ),
        'bundles' => array(
          'product' => array(
            'properties' => array(
              'commerce_price' => array(
                'label' => 'Price',
                'type' => 'commerce_price',
                'description' => 'Field "commerce_price".',
                'getter callback' => 'entity_metadata_field_verbatim_get',
                'setter callback' => 'entity_metadata_field_verbatim_set',
                'access callback' => 'entity_metadata_field_access_callback',
                'translatable' => false,
                'field' => true,
                'required' => true,
                'auto creation' => 'commerce_price_field_data_auto_creation',
                'property info' => array(
                  'amount' => array(
                    'label' => 'Amount',
                    'description' => '',
                    'type' => 'decimal',
                    'getter callback' => 'entity_property_verbatim_get',
                    'setter callback' => 'entity_property_verbatim_set',
                  ),
                  'amount_decimal' => array(
                    'label' => 'Amount (decimal)',
                    'description' => '',
                    'type' => 'decimal',
                    'getter callback' => 'commerce_price_amount_decimal_get',
                    'computed' => true,
                  ),
                  'currency_code' => array(
                    'label' => 'Currency',
                    'description' => '',
                    'type' => 'text',
                    'getter callback' => 'entity_property_verbatim_get',
                    'setter callback' => 'entity_property_verbatim_set',
                    'options list' => 'commerce_currency_code_options_list',
                  ),
                  'data' => array(
                    'label' => 'Data',
                    'description' => '',
                    'type' => 'struct',
                    'getter callback' => 'entity_property_verbatim_get',
                    'setter callback' => 'entity_property_verbatim_set',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'rules_config' => array(
        'properties' => array(
          'id' => array(
            'type' => 'integer',
            'label' => 'Internal, numeric rules configuration ID',
            'schema field' => 'id',
            'validation callback' => 'entity_metadata_validate_integer_positive',
            'description' => 'The ID used to identify this rules configuration internally.',
          ),
          'name' => array(
            'type' => 'token',
            'label' => 'Machine-readable name',
            'schema field' => 'name',
            'description' => 'The machine-readable name identifying this rules configuration.',
          ),
          'label' => array(
            'type' => 'text',
            'label' => 'Label',
            'schema field' => 'label',
            'description' => 'The human readable label.',
          ),
          'plugin' => array(
            'type' => 'text',
            'label' => 'Plugin',
            'schema field' => 'plugin',
            'description' => 'Rules configuration "plugin" property.',
          ),
          'active' => array(
            'type' => 'integer',
            'label' => 'Active',
            'schema field' => 'active',
            'description' => 'Rules configuration "active" property.',
          ),
          'weight' => array(
            'type' => 'integer',
            'label' => 'Weight',
            'schema field' => 'weight',
            'description' => 'Rules configuration "weight" property.',
          ),
          'status' => array(
            'type' => 'integer',
            'label' => 'Status',
            'schema field' => 'status',
            'description' => 'Rules configuration "status" property.',
          ),
          'dirty' => array(
            'type' => 'integer',
            'label' => 'Dirty',
            'schema field' => 'dirty',
            'description' => 'Rules configuration "dirty" property.',
          ),
          'module' => array(
            'type' => 'text',
            'label' => 'Module',
            'schema field' => 'module',
            'description' => 'Rules configuration "module" property.',
          ),
          'owner' => array(
            'type' => 'text',
            'label' => 'Owner',
            'schema field' => 'owner',
            'description' => 'Rules configuration "owner" property.',
          ),
          'access_exposed' => array(
            'type' => 'integer',
            'label' => 'Access_exposed',
            'schema field' => 'access_exposed',
            'description' => 'Rules configuration "access_exposed" property.',
          ),
        ),
      ),
      'user' => array(
        'bundles' => array(
          'user' => array(
            'properties' => array(
              'field_test_field' => array(
                'label' => 'Test field',
                'type' => 'text',
                'description' => 'Field "field_test_field".',
                'getter callback' => 'entity_metadata_field_property_get',
                'setter callback' => 'entity_metadata_field_property_set',
                'access callback' => 'entity_metadata_field_access_callback',
                'query callback' => 'entity_metadata_field_query',
                'translatable' => false,
                'field' => true,
                'required' => false,
              ),
              'field_fieldset_field' => array(
                'label' => 'fieldset field',
                'type' => 'text',
                'description' => 'Field "field_fieldset_field".',
                'getter callback' => 'entity_metadata_field_property_get',
                'setter callback' => 'entity_metadata_field_property_set',
                'access callback' => 'entity_metadata_field_access_callback',
                'query callback' => 'entity_metadata_field_query',
                'translatable' => false,
                'field' => true,
                'required' => false,
              ),
            ),
          ),
        ),
        'properties' => array(
          'uid' => array(
            'label' => 'User ID',
            'type' => 'integer',
            'description' => 'The unique ID of the user account.',
            'schema field' => 'uid',
          ),
          'name' => array(
            'label' => 'Name',
            'description' => 'The login name of the user account.',
            'getter callback' => 'entity_metadata_user_get_properties',
            'setter callback' => 'entity_property_verbatim_set',
            'sanitize' => 'filter_xss',
            'required' => true,
            'access callback' => 'entity_metadata_user_properties_access',
            'schema field' => 'name',
          ),
          'mail' => array(
            'label' => 'Email',
            'description' => 'The email address of the user account.',
            'setter callback' => 'entity_property_verbatim_set',
            'validation callback' => 'valid_email_address',
            'required' => true,
            'access callback' => 'entity_metadata_user_properties_access',
            'schema field' => 'mail',
          ),
          'url' => array(
            'label' => 'URL',
            'description' => 'The URL of the account profile page.',
            'getter callback' => 'entity_metadata_user_get_properties',
            'type' => 'uri',
            'computed' => true,
          ),
          'edit_url' => array(
            'label' => 'Edit URL',
            'description' => 'The url of the account edit page.',
            'getter callback' => 'entity_metadata_user_get_properties',
            'type' => 'uri',
            'computed' => true,
          ),
          'last_access' => array(
            'label' => 'Last access',
            'description' => 'The date the user last accessed the site.',
            'getter callback' => 'entity_metadata_user_get_properties',
            'type' => 'date',
            'access callback' => 'entity_metadata_user_properties_access',
            'schema field' => 'access',
          ),
          'last_login' => array(
            'label' => 'Last login',
            'description' => 'The date the user last logged in to the site.',
            'getter callback' => 'entity_metadata_user_get_properties',
            'type' => 'date',
            'access callback' => 'entity_metadata_user_properties_access',
            'schema field' => 'login',
          ),
          'created' => array(
            'label' => 'Created',
            'description' => 'The date the user account was created.',
            'type' => 'date',
            'schema field' => 'created',
            'setter permission' => 'administer users',
          ),
          'roles' => array(
            'label' => 'User roles',
            'description' => 'The roles of the user.',
            'type' => 'list<integer>',
            'getter callback' => 'entity_metadata_user_get_properties',
            'setter callback' => 'entity_metadata_user_set_properties',
            'options list' => 'entity_metadata_user_roles',
            'access callback' => 'entity_metadata_user_properties_access',
          ),
          'status' => array(
            'label' => 'Status',
            'description' => 'Whether the user is active or blocked.',
            'setter callback' => 'entity_property_verbatim_set',
            'type' => 'integer',
            'options list' => 'entity_metadata_user_status_options_list',
            'access callback' => 'entity_metadata_user_properties_access',
            'schema field' => 'status',
          ),
          'theme' => array(
            'label' => 'Default theme',
            'description' => 'The user\'s default theme.',
            'getter callback' => 'entity_metadata_user_get_properties',
            'setter callback' => 'entity_property_verbatim_set',
            'access callback' => 'entity_metadata_user_properties_access',
            'schema field' => 'theme',
          ),
          'language' => array(
            'label' => 'Language',
            'description' => 'This account\'s default language for e-mails, and preferred language for site presentation.',
            'type' => 'token',
            'getter callback' => 'entity_metadata_locale_get_user_language',
            'setter callback' => 'entity_property_verbatim_set',
            'options list' => 'entity_metadata_language_list',
            'schema field' => 'language',
            'setter permission' => 'administer users',
          ),
        ),
      ),
      'node' => array(
        'bundles' => array(
          'article' => array(
            'properties' => array(
              'body' => array(
                'label' => 'Body',
                'type' => 'text_formatted',
                'description' => 'Field "body".',
                'getter callback' => 'entity_metadata_field_verbatim_get',
                'setter callback' => 'entity_metadata_field_verbatim_set',
                'access callback' => 'entity_metadata_field_access_callback',
                'translatable' => false,
                'field' => true,
                'required' => false,
                'property info' => array(
                  'value' => array(
                    'type' => 'text',
                    'label' => 'Text',
                    'sanitized' => true,
                    'getter callback' => 'entity_metadata_field_text_get',
                    'setter callback' => 'entity_property_verbatim_set',
                    'setter permission' => 'administer nodes',
                    'raw getter callback' => 'entity_property_verbatim_get',
                  ),
                  'summary' => array(
                    'type' => 'text',
                    'label' => 'Summary',
                    'sanitized' => true,
                    'getter callback' => 'entity_metadata_field_text_get',
                    'setter callback' => 'entity_property_verbatim_set',
                    'setter permission' => 'administer nodes',
                    'raw getter callback' => 'entity_property_verbatim_get',
                  ),
                  'format' => array(
                    'type' => 'token',
                    'label' => 'Text format',
                    'options list' => 'entity_metadata_field_text_formats',
                    'getter callback' => 'entity_property_verbatim_get',
                    'setter callback' => 'entity_property_verbatim_set',
                    'setter permissions' => 'administer filters',
                  ),
                ),
                'auto creation' => 'entity_property_create_array',
              ),
              'field_specialfield' => array(
                'label' => 'Specialfield',
                'type' => 'text',
                'description' => 'Field "field_specialfield".',
                'getter callback' => 'entity_metadata_field_property_get',
                'setter callback' => 'entity_metadata_field_property_set',
                'access callback' => 'entity_metadata_field_access_callback',
                'query callback' => 'entity_metadata_field_query',
                'translatable' => false,
                'field' => true,
                'required' => false,
              ),
              'field_categories' => array(
                'label' => 'Categories',
                'type' => 'list<taxonomy_term>',
                'description' => 'Field "field_categories".',
                'getter callback' => 'entity_metadata_field_property_get',
                'setter callback' => 'entity_metadata_field_property_set',
                'access callback' => 'entity_metadata_field_access_callback',
                'query callback' => 'entity_metadata_field_query',
                'translatable' => false,
                'field' => true,
                'required' => false,
                'bundle' => 'categories',
                'options list' => 'entity_metadata_field_options_list',
              ),
              'field_file' => array(
                'label' => 'File',
                'type' => 'field_item_file',
                'description' => 'Field "field_file".',
                'getter callback' => 'entity_metadata_field_verbatim_get',
                'setter callback' => 'entity_metadata_field_verbatim_set',
                'access callback' => 'entity_metadata_field_access_callback',
                'translatable' => false,
                'field' => true,
                'required' => false,
                'auto creation' => 'entity_metadata_field_file_create_item',
                'validation callback' => 'entity_metadata_field_file_validate_item',
                'property info' => array(
                  'file' => array(
                    'type' => 'file',
                    'label' => 'The file.',
                    'getter callback' => 'entity_metadata_field_file_get',
                    'setter callback' => 'entity_metadata_field_file_set',
                    'required' => true,
                  ),
                ),
              ),
              'field_image' => array(
                'label' => 'Image',
                'type' => 'field_item_image',
                'description' => 'Field "field_image".',
                'getter callback' => 'entity_metadata_field_verbatim_get',
                'setter callback' => 'entity_metadata_field_verbatim_set',
                'access callback' => 'entity_metadata_field_access_callback',
                'translatable' => false,
                'field' => true,
                'required' => false,
                'auto creation' => 'entity_metadata_field_file_create_item',
                'validation callback' => 'entity_metadata_field_file_validate_item',
                'property info' => array(
                  'file' => array(
                    'type' => 'file',
                    'label' => 'The image file.',
                    'getter callback' => 'entity_metadata_field_file_get',
                    'setter callback' => 'entity_metadata_field_file_set',
                    'required' => true,
                  ),
                ),
              ),
              'field_breadcrumb_title' => array(
                'label' => 'Breadcrumb title',
                'type' => 'text',
                'description' => 'Field "field_breadcrumb_title".',
                'getter callback' => 'entity_metadata_field_property_get',
                'setter callback' => 'entity_metadata_field_property_set',
                'access callback' => 'entity_metadata_field_access_callback',
                'query callback' => 'entity_metadata_field_query',
                'translatable' => false,
                'field' => true,
                'required' => false,
              ),
              'field_link' => array(
                'label' => 'Link',
                'type' => 'field_item_link',
                'description' => 'Field "field_link".',
                'getter callback' => 'entity_metadata_field_verbatim_get',
                'setter callback' => 'entity_metadata_field_verbatim_set',
                'access callback' => 'entity_metadata_field_access_callback',
                'translatable' => false,
                'field' => true,
                'required' => false,
                'auto creation' => 'link_field_item_create',
                'property info' => array(
                  'title' => array(
                    'type' => 'text',
                    'label' => 'The title of the link.',
                    'setter callback' => 'entity_property_verbatim_set',
                    'required' => false,
                  ),
                  'url' => array(
                    'type' => 'uri',
                    'label' => 'The URL of the link.',
                    'setter callback' => 'entity_property_verbatim_set',
                    'required' => true,
                  ),
                ),
              ),
            ),
          ),
          'book' => array(
            'properties' => array(
              'body' => array(
                'label' => 'Body',
                'type' => 'text_formatted',
                'description' => 'Field "body".',
                'getter callback' => 'entity_metadata_field_verbatim_get',
                'setter callback' => 'entity_metadata_field_verbatim_set',
                'access callback' => 'entity_metadata_field_access_callback',
                'translatable' => false,
                'field' => true,
                'required' => false,
                'property info' => array(
                  'value' => array(
                    'type' => 'text',
                    'label' => 'Text',
                    'sanitized' => true,
                    'getter callback' => 'entity_metadata_field_text_get',
                    'setter callback' => 'entity_property_verbatim_set',
                    'setter permission' => 'administer nodes',
                    'raw getter callback' => 'entity_property_verbatim_get',
                  ),
                  'summary' => array(
                    'type' => 'text',
                    'label' => 'Summary',
                    'sanitized' => true,
                    'getter callback' => 'entity_metadata_field_text_get',
                    'setter callback' => 'entity_property_verbatim_set',
                    'setter permission' => 'administer nodes',
                    'raw getter callback' => 'entity_property_verbatim_get',
                  ),
                  'format' => array(
                    'type' => 'token',
                    'label' => 'Text format',
                    'options list' => 'entity_metadata_field_text_formats',
                    'getter callback' => 'entity_property_verbatim_get',
                    'setter callback' => 'entity_property_verbatim_set',
                    'setter permissions' => 'administer filters',
                  ),
                ),
                'auto creation' => 'entity_property_create_array',
              ),
            ),
          ),
          'gallery' => array(
            'properties' => array(
              'body' => array(
                'label' => 'Body',
                'type' => 'text_formatted',
                'description' => 'Field "body".',
                'getter callback' => 'entity_metadata_field_verbatim_get',
                'setter callback' => 'entity_metadata_field_verbatim_set',
                'access callback' => 'entity_metadata_field_access_callback',
                'translatable' => false,
                'field' => true,
                'required' => false,
                'property info' => array(
                  'value' => array(
                    'type' => 'text',
                    'label' => 'Text',
                    'sanitized' => true,
                    'getter callback' => 'entity_metadata_field_text_get',
                    'setter callback' => 'entity_property_verbatim_set',
                    'setter permission' => 'administer nodes',
                    'raw getter callback' => 'entity_property_verbatim_get',
                  ),
                  'summary' => array(
                    'type' => 'text',
                    'label' => 'Summary',
                    'sanitized' => true,
                    'getter callback' => 'entity_metadata_field_text_get',
                    'setter callback' => 'entity_property_verbatim_set',
                    'setter permission' => 'administer nodes',
                    'raw getter callback' => 'entity_property_verbatim_get',
                  ),
                  'format' => array(
                    'type' => 'token',
                    'label' => 'Text format',
                    'options list' => 'entity_metadata_field_text_formats',
                    'getter callback' => 'entity_property_verbatim_get',
                    'setter callback' => 'entity_property_verbatim_set',
                    'setter permissions' => 'administer filters',
                  ),
                ),
                'auto creation' => 'entity_property_create_array',
              ),
              'field_images' => array(
                'label' => 'Images',
                'type' => 'list<field_item_image>',
                'description' => 'Field "field_images".',
                'getter callback' => 'entity_metadata_field_verbatim_get',
                'setter callback' => 'entity_metadata_field_verbatim_set',
                'access callback' => 'entity_metadata_field_access_callback',
                'translatable' => false,
                'field' => true,
                'required' => false,
                'auto creation' => 'entity_metadata_field_file_create_item',
                'validation callback' => 'entity_metadata_field_file_validate_item',
                'property info' => array(
                  'file' => array(
                    'type' => 'file',
                    'label' => 'The image file.',
                    'getter callback' => 'entity_metadata_field_file_get',
                    'setter callback' => 'entity_metadata_field_file_set',
                    'required' => true,
                  ),
                ),
              ),
              'field_referenced_nodes' => array(
                'label' => 'Referenced nodes',
                'type' => 'list<node>',
                'description' => 'Field "field_referenced_nodes".',
                'getter callback' => 'entity_metadata_field_property_get',
                'setter callback' => 'entity_metadata_field_property_set',
                'access callback' => 'entity_metadata_field_access_callback',
                'query callback' => 'entity_metadata_field_query',
                'translatable' => false,
                'field' => true,
                'required' => false,
              ),
            ),
          ),
        ),
        'properties' => array(
          'nid' => array(
            'label' => 'Node ID',
            'type' => 'integer',
            'description' => 'The unique ID of the node.',
            'schema field' => 'nid',
          ),
          'vid' => array(
            'label' => 'Revision ID',
            'type' => 'integer',
            'description' => 'The unique ID of the node\'s revision.',
            'schema field' => 'vid',
          ),
          'is_new' => array(
            'label' => 'Is new',
            'type' => 'boolean',
            'description' => 'Whether the node is new and not saved to the database yet.',
            'getter callback' => 'entity_metadata_node_get_properties',
          ),
          'type' => array(
            'label' => 'Content type',
            'type' => 'token',
            'description' => 'The type of the node.',
            'setter callback' => 'entity_property_verbatim_set',
            'setter permission' => 'administer nodes',
            'options list' => 'node_type_get_names',
            'required' => true,
            'schema field' => 'type',
          ),
          'title' => array(
            'label' => 'Title',
            'description' => 'The title of the node.',
            'setter callback' => 'entity_property_verbatim_set',
            'schema field' => 'title',
            'required' => true,
          ),
          'language' => array(
            'label' => 'Language',
            'type' => 'token',
            'description' => 'The language the node is written in.',
            'setter callback' => 'entity_property_verbatim_set',
            'options list' => 'entity_metadata_language_list',
            'schema field' => 'language',
            'setter permission' => 'administer nodes',
          ),
          'url' => array(
            'label' => 'URL',
            'description' => 'The URL of the node.',
            'getter callback' => 'entity_metadata_entity_get_properties',
            'type' => 'uri',
            'computed' => true,
          ),
          'edit_url' => array(
            'label' => 'Edit URL',
            'description' => 'The URL of the node\'s edit page.',
            'getter callback' => 'entity_metadata_node_get_properties',
            'type' => 'uri',
            'computed' => true,
          ),
          'status' => array(
            'label' => 'Status',
            'description' => 'Whether the node is published or unpublished.',
            'type' => 'integer',
            'options list' => 'entity_metadata_status_options_list',
            'setter callback' => 'entity_property_verbatim_set',
            'setter permission' => 'administer nodes',
            'schema field' => 'status',
          ),
          'promote' => array(
            'label' => 'Promoted to frontpage',
            'description' => 'Whether the node is promoted to the frontpage.',
            'setter callback' => 'entity_property_verbatim_set',
            'setter permission' => 'administer nodes',
            'schema field' => 'promote',
            'type' => 'boolean',
          ),
          'sticky' => array(
            'label' => 'Sticky in lists',
            'description' => 'Whether the node is displayed at the top of lists in which it appears.',
            'setter callback' => 'entity_property_verbatim_set',
            'setter permission' => 'administer nodes',
            'schema field' => 'sticky',
            'type' => 'boolean',
          ),
          'created' => array(
            'label' => 'Date created',
            'type' => 'date',
            'description' => 'The date the node was posted.',
            'setter callback' => 'entity_property_verbatim_set',
            'setter permission' => 'administer nodes',
            'schema field' => 'created',
          ),
          'changed' => array(
            'label' => 'Date changed',
            'type' => 'date',
            'schema field' => 'changed',
            'description' => 'The date the node was most recently updated.',
          ),
          'author' => array(
            'label' => 'Author',
            'type' => 'user',
            'description' => 'The author of the node.',
            'getter callback' => 'entity_metadata_node_get_properties',
            'setter callback' => 'entity_property_verbatim_set',
            'setter permission' => 'administer nodes',
            'required' => true,
            'schema field' => 'uid',
          ),
          'source' => array(
            'label' => 'Translation source node',
            'type' => 'node',
            'description' => 'The original-language version of this node, if one exists.',
            'getter callback' => 'entity_metadata_node_get_properties',
          ),
          'log' => array(
            'label' => 'Revision log message',
            'type' => 'text',
            'description' => 'In case a new revision is to be saved, the log entry explaining the changes for this version.',
            'setter callback' => 'entity_property_verbatim_set',
            'access callback' => 'entity_metadata_node_revision_access',
          ),
          'revision' => array(
            'label' => 'Creates revision',
            'type' => 'boolean',
            'description' => 'Whether saving this node creates a new revision.',
            'setter callback' => 'entity_property_verbatim_set',
            'access callback' => 'entity_metadata_node_revision_access',
          ),
          'book' => array(
            'label' => 'Book',
            'type' => 'node',
            'description' => 'If part of a book, the book to which this book page belongs.',
            'getter callback' => 'entity_metadata_book_get_properties',
          ),
          'book_ancestors' => array(
            'label' => 'Book ancestors',
            'type' => 'list<node>',
            'computed' => true,
            'description' => 'If part of a book, a list of all book pages upwards in the book hierarchy.',
            'getter callback' => 'entity_metadata_book_get_properties',
          ),
          'body' => array(
            'type' => 'text_formatted',
            'label' => 'The main body text',
            'getter callback' => 'entity_metadata_field_verbatim_get',
            'setter callback' => 'entity_metadata_field_verbatim_set',
            'property info' => array(
              'value' => array(
                'type' => 'text',
                'label' => 'Text',
                'sanitized' => true,
                'getter callback' => 'entity_metadata_field_text_get',
                'setter callback' => 'entity_property_verbatim_set',
                'setter permission' => 'administer nodes',
                'raw getter callback' => 'entity_property_verbatim_get',
              ),
              'summary' => array(
                'type' => 'text',
                'label' => 'Summary',
                'sanitized' => true,
                'getter callback' => 'entity_metadata_field_text_get',
                'setter callback' => 'entity_property_verbatim_set',
                'setter permission' => 'administer nodes',
                'raw getter callback' => 'entity_property_verbatim_get',
              ),
              'format' => array(
                'type' => 'token',
                'label' => 'Text format',
                'options list' => 'entity_metadata_field_text_formats',
                'getter callback' => 'entity_property_verbatim_get',
                'setter callback' => 'entity_property_verbatim_set',
                'setter permissions' => 'administer filters',
              ),
            ),
            'auto creation' => 'entity_property_create_array',
            'field' => true,
          ),
          'views' => array(
            'label' => 'Number of views',
            'description' => 'The number of visitors who have read the node.',
            'type' => 'integer',
            'getter callback' => 'entity_metadata_statistics_node_get_properties',
            'computed' => true,
            'access callback' => 'entity_metadata_statistics_properties_access',
          ),
          'day_views' => array(
            'label' => 'Views today',
            'description' => 'The number of visitors who have read the node today.',
            'type' => 'integer',
            'getter callback' => 'entity_metadata_statistics_node_get_properties',
            'computed' => true,
            'access callback' => 'entity_metadata_statistics_properties_access',
          ),
          'last_view' => array(
            'label' => 'Last view',
            'description' => 'The date on which a visitor last read the node.',
            'type' => 'date',
            'getter callback' => 'entity_metadata_statistics_node_get_properties',
            'computed' => true,
            'access callback' => 'entity_metadata_statistics_properties_access',
          ),
        ),
      ),
      'taxonomy_term' => array(
        'properties' => array(
          'tid' => array(
            'label' => 'Term ID',
            'description' => 'The unique ID of the taxonomy term.',
            'type' => 'integer',
            'schema field' => 'tid',
          ),
          'name' => array(
            'label' => 'Name',
            'description' => 'The name of the taxonomy term.',
            'setter callback' => 'entity_property_verbatim_set',
            'required' => true,
            'schema field' => 'name',
          ),
          'description' => array(
            'label' => 'Description',
            'description' => 'The optional description of the taxonomy term.',
            'sanitized' => true,
            'raw getter callback' => 'entity_property_verbatim_get',
            'getter callback' => 'entity_metadata_taxonomy_term_get_properties',
            'setter callback' => 'entity_property_verbatim_set',
            'schema field' => 'description',
          ),
          'weight' => array(
            'label' => 'Weight',
            'type' => 'integer',
            'description' => 'The weight of the term, which is used for ordering terms during display.',
            'setter callback' => 'entity_property_verbatim_set',
            'schema field' => 'weight',
          ),
          'node_count' => array(
            'label' => 'Node count',
            'type' => 'integer',
            'description' => 'The number of nodes tagged with the taxonomy term.',
            'getter callback' => 'entity_metadata_taxonomy_term_get_properties',
            'computed' => true,
          ),
          'url' => array(
            'label' => 'URL',
            'description' => 'The URL of the taxonomy term.',
            'getter callback' => 'entity_metadata_entity_get_properties',
            'type' => 'uri',
            'computed' => true,
          ),
          'vocabulary' => array(
            'label' => 'Vocabulary',
            'description' => 'The vocabulary the taxonomy term belongs to.',
            'setter callback' => 'entity_metadata_taxonomy_term_setter',
            'type' => 'taxonomy_vocabulary',
            'required' => true,
            'schema field' => 'vid',
          ),
          'parent' => array(
            'label' => 'Parent terms',
            'description' => 'The parent terms of the taxonomy term.',
            'getter callback' => 'entity_metadata_taxonomy_term_get_properties',
            'setter callback' => 'entity_metadata_taxonomy_term_setter',
            'type' => 'list<taxonomy_term>',
          ),
          'parents_all' => array(
            'label' => 'All parent terms',
            'description' => 'Ancestors of the term, i.e. parent of all above hierarchy levels.',
            'getter callback' => 'entity_metadata_taxonomy_term_get_properties',
            'type' => 'list<taxonomy_term>',
            'computed' => true,
          ),
        ),
      ),
      'taxonomy_vocabulary' => array(
        'properties' => array(
          'vid' => array(
            'label' => 'Vocabulary ID',
            'description' => 'The unique ID of the taxonomy vocabulary.',
            'type' => 'integer',
            'schema field' => 'vid',
          ),
          'name' => array(
            'label' => 'Name',
            'description' => 'The name of the taxonomy vocabulary.',
            'setter callback' => 'entity_property_verbatim_set',
            'required' => true,
            'schema field' => 'name',
          ),
          'machine_name' => array(
            'label' => 'Machine name',
            'type' => 'token',
            'description' => 'The machine name of the taxonomy vocabulary.',
            'setter callback' => 'entity_property_verbatim_set',
            'required' => true,
            'schema field' => 'machine_name',
          ),
          'description' => array(
            'label' => 'Description',
            'description' => 'The optional description of the taxonomy vocabulary.',
            'setter callback' => 'entity_property_verbatim_set',
            'sanitize' => 'filter_xss',
            'schema field' => 'description',
          ),
          'term_count' => array(
            'label' => 'Term count',
            'type' => 'integer',
            'description' => 'The number of terms belonging to the taxonomy vocabulary.',
            'getter callback' => 'entity_metadata_taxonomy_vocabulary_get_properties',
            'computed' => true,
          ),
        ),
      ),
      'site' => array(
        'properties' => array(
          'name' => array(
            'label' => 'Name',
            'description' => 'The name of the site.',
            'getter callback' => 'entity_metadata_system_get_properties',
            'sanitize' => 'check_plain',
          ),
          'slogan' => array(
            'label' => 'Slogan',
            'description' => 'The slogan of the site.',
            'getter callback' => 'entity_metadata_system_get_properties',
            'sanitize' => 'check_plain',
          ),
          'mail' => array(
            'label' => 'Email',
            'description' => 'The administrative email address for the site.',
            'getter callback' => 'entity_metadata_system_get_properties',
          ),
          'url' => array(
            'label' => 'URL',
            'description' => 'The URL of the site\'s front page.',
            'getter callback' => 'entity_metadata_system_get_properties',
            'type' => 'uri',
          ),
          'login_url' => array(
            'label' => 'Login page',
            'description' => 'The URL of the site\'s login page.',
            'getter callback' => 'entity_metadata_system_get_properties',
            'type' => 'uri',
          ),
          'current_user' => array(
            'label' => 'Logged in user',
            'description' => 'The currently logged in user.',
            'getter callback' => 'entity_metadata_system_get_properties',
            'type' => 'user',
          ),
          'current_date' => array(
            'label' => 'Current date',
            'description' => 'The current date and time.',
            'getter callback' => 'entity_metadata_system_get_properties',
            'type' => 'date',
          ),
          'current_page' => array(
            'label' => 'Current page',
            'description' => 'Information related to the current page request.',
            'getter callback' => 'entity_metadata_system_get_properties',
            'type' => 'struct',
            'property info' => array(
              'path' => array(
                'label' => 'Path',
                'description' => 'The internal Drupal path of the current page request.',
                'getter callback' => 'current_path',
                'type' => 'text',
              ),
              'url' => array(
                'label' => 'URL',
                'description' => 'The full URL of the current page request.',
                'getter callback' => 'entity_metadata_system_get_page_properties',
                'type' => 'uri',
              ),
              'language' => array(
                'label' => 'Interface language',
                'description' => 'The language code of the current user interface language.',
                'type' => 'token',
                'getter callback' => 'entity_metadata_locale_get_languages',
                'options list' => 'entity_metadata_language_list',
              ),
              'language_content' => array(
                'label' => 'Content language',
                'description' => 'The language code of the current content language.',
                'type' => 'token',
                'getter callback' => 'entity_metadata_locale_get_languages',
                'options list' => 'entity_metadata_language_list',
              ),
            ),
          ),
        ),
      ),
      'file' => array(
        'properties' => array(
          'fid' => array(
            'label' => 'File ID',
            'description' => 'The unique ID of the uploaded file.',
            'type' => 'integer',
            'validation callback' => 'entity_metadata_validate_integer_positive',
            'schema field' => 'fid',
          ),
          'name' => array(
            'label' => 'File name',
            'description' => 'The name of the file on disk.',
            'getter callback' => 'entity_metadata_system_get_file_properties',
            'schema field' => 'filename',
          ),
          'mime' => array(
            'label' => 'MIME type',
            'description' => 'The MIME type of the file.',
            'getter callback' => 'entity_metadata_system_get_file_properties',
            'sanitize' => 'filter_xss',
            'schema field' => 'filemime',
          ),
          'size' => array(
            'label' => 'File size',
            'description' => 'The size of the file, in kilobytes.',
            'getter callback' => 'entity_metadata_system_get_file_properties',
            'type' => 'integer',
            'schema field' => 'filesize',
          ),
          'url' => array(
            'label' => 'URL',
            'description' => 'The web-accessible URL for the file.',
            'getter callback' => 'entity_metadata_system_get_file_properties',
          ),
          'timestamp' => array(
            'label' => 'Timestamp',
            'description' => 'The date the file was most recently changed.',
            'type' => 'date',
            'schema field' => 'timestamp',
          ),
          'owner' => array(
            'label' => 'Owner',
            'description' => 'The user who originally uploaded the file.',
            'type' => 'user',
            'getter callback' => 'entity_metadata_system_get_file_properties',
            'schema field' => 'uid',
          ),
        ),
      ),
      'search_api_server' => array(
        'properties' => array(
          'id' => array(
            'label' => 'ID',
            'type' => 'integer',
            'description' => 'The primary identifier for a server.',
            'schema field' => 'id',
            'validation callback' => 'entity_metadata_validate_integer_positive',
          ),
          'name' => array(
            'label' => 'Name',
            'type' => 'text',
            'description' => 'The displayed name for a server.',
            'schema field' => 'name',
            'required' => true,
          ),
          'machine_name' => array(
            'label' => 'Machine name',
            'type' => 'token',
            'description' => 'The internally used machine name for a server.',
            'schema field' => 'machine_name',
            'required' => true,
          ),
          'description' => array(
            'label' => 'Description',
            'type' => 'text',
            'description' => 'The displayed description for a server.',
            'schema field' => 'description',
            'sanitize' => 'filter_xss',
          ),
          'class' => array(
            'label' => 'Service class',
            'type' => 'text',
            'description' => 'The ID of the service class to use for this server.',
            'schema field' => 'class',
            'required' => true,
          ),
          'enabled' => array(
            'label' => 'Enabled',
            'type' => 'boolean',
            'description' => 'A flag indicating whether the server is enabled.',
            'schema field' => 'enabled',
          ),
          'status' => array(
            'label' => 'Status',
            'type' => 'integer',
            'description' => 'Search API server status property',
            'schema field' => 'status',
            'options list' => 'search_api_status_options_list',
          ),
          'module' => array(
            'label' => 'Module',
            'type' => 'text',
            'description' => 'The name of the module from which this server originates.',
            'schema field' => 'module',
          ),
        ),
      ),
      'search_api_index' => array(
        'properties' => array(
          'id' => array(
            'label' => 'ID',
            'type' => 'integer',
            'description' => 'An integer identifying the index.',
            'schema field' => 'id',
            'validation callback' => 'entity_metadata_validate_integer_positive',
          ),
          'name' => array(
            'label' => 'Name',
            'type' => 'text',
            'description' => 'A name to be displayed for the index.',
            'schema field' => 'name',
            'required' => true,
          ),
          'machine_name' => array(
            'label' => 'Machine name',
            'type' => 'token',
            'description' => 'The internally used machine name for an index.',
            'schema field' => 'machine_name',
            'required' => true,
          ),
          'description' => array(
            'label' => 'Description',
            'type' => 'text',
            'description' => 'A string describing the index\' use to users.',
            'schema field' => 'description',
            'sanitize' => 'filter_xss',
          ),
          'server' => array(
            'label' => 'Server ID',
            'type' => 'token',
            'description' => 'The machine name of the search_api_server with which data should be indexed.',
            'schema field' => 'server',
          ),
          'server_entity' => array(
            'label' => 'Server',
            'type' => 'search_api_server',
            'description' => 'The search_api_server with which data should be indexed.',
            'getter callback' => 'search_api_index_get_server',
          ),
          'item_type' => array(
            'label' => 'Item type',
            'type' => 'token',
            'description' => 'The type of items stored in this index.',
            'schema field' => 'item_type',
            'required' => true,
          ),
          'enabled' => array(
            'label' => 'Enabled',
            'type' => 'boolean',
            'description' => 'A flag indicating whether the index is enabled.',
            'schema field' => 'enabled',
          ),
          'read_only' => array(
            'label' => 'Read only',
            'type' => 'boolean',
            'description' => 'A flag indicating whether the index is read-only.',
            'schema field' => 'read_only',
          ),
          'status' => array(
            'label' => 'Status',
            'type' => 'integer',
            'description' => 'Search API index status property',
            'schema field' => 'status',
            'options list' => 'search_api_status_options_list',
          ),
          'module' => array(
            'label' => 'Module',
            'type' => 'text',
            'description' => 'The name of the module from which this index originates.',
            'schema field' => 'module',
          ),
        ),
      ),
    );
  }

  /**
   * @return object
   */
  static function getLanguage() {
    return (object)array(
      'language' => 'en',
      'name' => 'English',
      'native' => 'English',
      'direction' => 0,
      'enabled' => 1,
      'plurals' => 0,
      'formula' => '',
      'domain' => '',
      'prefix' => '',
      'weight' => 0,
      'javascript' => '',
    );
  }

}
