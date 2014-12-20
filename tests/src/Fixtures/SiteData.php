<?php

namespace Drupal\entity2\Tests\Fixtures;

class SiteData {

  /**
   * @return object[][]
   *   Format: $[$typeName][$etid] = $entity
   */
  static function getEntitiesAll() {
    return array(
      'node' => array(
        1 => (object)array(
          'vid' => '1',
          'uid' => '1',
          'title' => 'dvsdf',
          'log' => '',
          'status' => '1',
          'comment' => '0',
          'promote' => '1',
          'sticky' => '0',
          'ds_switch' => '',
          'nid' => '1',
          'type' => 'article',
          'language' => 'und',
          'created' => '1386107198',
          'changed' => '1386124744',
          'tnid' => '0',
          'translate' => '0',
          'revision_timestamp' => '1386124744',
          'revision_uid' => '1',
          'body' => array(),
          'field_specialfield' => array(),
          'field_categories' => array(
            'und' => array(
              array(
                'tid' => '1',
              ),
              array(
                'tid' => '4',
              ),
            ),
          ),
          'field_file' => array(),
          'field_image' => array(),
          'field_breadcrumb_title' => array(),
          'field_link' => array(),
          'name' => 'admin',
          'picture' => '0',
          'data' => 'b:0;',
        ),
        2 => (object)array(
          'vid' => '2',
          'uid' => '1',
          'title' => 'dfgfdg',
          'log' => '',
          'status' => '1',
          'comment' => '0',
          'promote' => '1',
          'sticky' => '0',
          'ds_switch' => '',
          'nid' => '2',
          'type' => 'article',
          'language' => 'en',
          'created' => '1395615173',
          'changed' => '1418170157',
          'tnid' => '0',
          'translate' => '0',
          'revision_timestamp' => '1418170157',
          'revision_uid' => '1',
          'body' => array(),
          'field_specialfield' => array(),
          'field_categories' => array(
            'und' => array(
              array(
                'tid' => '6',
              ),
              array(
                'tid' => '1',
              ),
            ),
          ),
          'field_file' => array(),
          'field_image' => array(
            'und' => array(
              array(
                'fid' => '1',
                'alt' => '',
                'title' => '',
                'width' => '1140',
                'height' => '758',
                'uid' => '1',
                'filename' => 'Lancia_1.jpg',
                'uri' => 'private://Lancia_1.jpg',
                'filemime' => 'image/jpeg',
                'filesize' => '233698',
                'status' => '1',
                'timestamp' => '1395615173',
              ),
            ),
          ),
          'field_breadcrumb_title' => array(
            'und' => array(
              array(
                'value' => 'ALT BREADCRUMB TITLE',
                'format' => NULL,
                'safe_value' => 'ALT BREADCRUMB TITLE',
              ),
            ),
          ),
          'field_link' => array(),
          'name' => 'admin',
          'picture' => '0',
          'data' => 'b:0;',
        ),
        3 => (object)array(
          'vid' => '3',
          'uid' => '1',
          'title' => 'Categorized » dfsadas',
          'log' => '',
          'status' => '1',
          'comment' => '0',
          'promote' => '1',
          'sticky' => '0',
          'ds_switch' => '',
          'nid' => '3',
          'type' => 'article',
          'language' => 'en',
          'created' => '1408567930',
          'changed' => '1410151545',
          'tnid' => '0',
          'translate' => '0',
          'revision_timestamp' => '1410151545',
          'revision_uid' => '1',
          'body' => array(
            'und' => array(
              array(
                'value' => 'dafdas wuaua',
                'summary' => '',
                'format' => 'literal_html',
                'safe_value' => 'Filter: Testing filter (filter_test_replace)<br />
                Language: und',
                'safe_summary' => 'Filter: Testing filter (filter_test_replace)<br />
                Language: und',
              ),
            ),
          ),
          'field_specialfield' => array(),
          'field_categories' => array(
            'und' => array(
              array(
                'tid' => '5',
              ),
              array(
                'tid' => '1',
              ),
              array(
                'tid' => '3',
              ),
            ),
          ),
          'field_file' => array(),
          'field_image' => array(),
          'field_breadcrumb_title' => array(
            'und' => array(
              array(
                'value' => 'A » B ® &raquo; X',
                'format' => NULL,
                'safe_value' => 'A » B ® &amp;raquo; X',
              ),
            ),
          ),
          'field_link' => array(
            'und' => array(
              array(
                'url' => 'https://www.drupal.org',
                'title' => 'link me somewhere',
                'attributes' => array(),
                'original_url' => 'https://www.drupal.org',
              ),
            ),
          ),
          'name' => 'admin',
          'picture' => '0',
          'data' => 'b:0;',
        ),
        4 => (object)array(
          'vid' => '4',
          'uid' => '1',
          'title' => 'Test gallery',
          'log' => '',
          'status' => '0',
          'comment' => '0',
          'promote' => '1',
          'sticky' => '0',
          'ds_switch' => '',
          'nid' => '4',
          'type' => 'gallery',
          'language' => 'en',
          'created' => '1408824349',
          'changed' => '1418257188',
          'tnid' => '0',
          'translate' => '0',
          'revision_timestamp' => '1418257188',
          'revision_uid' => '1',
          'body' => array(
            'und' => array(
              array(
                'value' => 'lorem ipsum

                lorem ipsum

                lorem ipsum',
                'summary' => '',
                'format' => 'plain_text',
                'safe_value' => '<p>lorem ipsum</p>
                <p>lorem ipsum</p>
                <p>lorem ipsum</p>
                ',
                'safe_summary' => '',
              ),
            ),
          ),
          'field_images' => array(
            'und' => array(
              array(
                'fid' => '2',
                'alt' => '',
                'title' => '',
                'width' => '712',
                'height' => '534',
                'uid' => '1',
                'filename' => 'river.jpg',
                'uri' => 'public://river.jpg',
                'filemime' => 'image/jpeg',
                'filesize' => '123825',
                'status' => '1',
                'timestamp' => '1408824349',
              ),
              array(
                'fid' => '3',
                'alt' => '',
                'title' => '',
                'width' => '712',
                'height' => '534',
                'uid' => '1',
                'filename' => 'canal.jpg',
                'uri' => 'public://canal.jpg',
                'filemime' => 'image/jpeg',
                'filesize' => '251151',
                'status' => '1',
                'timestamp' => '1408824349',
              ),
              array(
                'fid' => '4',
                'alt' => '',
                'title' => '',
                'width' => '607',
                'height' => '516',
                'uid' => '1',
                'filename' => 'frog.png',
                'uri' => 'public://frog.png',
                'filemime' => 'image/png',
                'filesize' => '153487',
                'status' => '1',
                'timestamp' => '1408824349',
              ),
            ),
          ),
          'field_referenced_nodes' => array(
            'und' => array(
              array(
                'target_id' => '1',
              ),
              array(
                'target_id' => '2',
              ),
            ),
          ),
          'name' => 'admin',
          'picture' => '0',
          'data' => 'b:0;',
        ),
      ),
      'taxonomy_term' => array(
        1 => (object)array(
          'tid' => '1',
          'vid' => '1',
          'name' => 'Cat 1',
          'description' => '',
          'format' => 'plain_text',
          'weight' => '4',
          'vocabulary_machine_name' => 'categories',
        ),
        3 => (object)array(
          'tid' => '3',
          'vid' => '1',
          'name' => 'Cat 3',
          'description' => '',
          'format' => 'plain_text',
          'weight' => '0',
          'vocabulary_machine_name' => 'categories',
        ),
        4 => (object)array(
          'tid' => '4',
          'vid' => '1',
          'name' => 'Cat 4',
          'description' => '',
          'format' => 'plain_text',
          'weight' => '1',
          'vocabulary_machine_name' => 'categories',
        ),
        5 => (object)array(
          'tid' => '5',
          'vid' => '1',
          'name' => 'Cat 5',
          'description' => '',
          'format' => 'plain_text',
          'weight' => '2',
          'vocabulary_machine_name' => 'categories',
        ),
        6 => (object)array(
          'tid' => '6',
          'vid' => '1',
          'name' => 'Cat 6',
          'description' => '',
          'format' => 'plain_text',
          'weight' => '3',
          'vocabulary_machine_name' => 'categories',
        ),
      ),
      'file' => array(
        1 => (object)array(
          'fid' => '1',
          'uid' => '1',
          'filename' => 'Lancia_1.jpg',
          'uri' => 'private://Lancia_1.jpg',
          'filemime' => 'image/jpeg',
          'filesize' => '233698',
          'status' => '1',
          'timestamp' => '1395615173',
        ),
        2 => (object)array(
          'fid' => '2',
          'uid' => '1',
          'filename' => 'river.jpg',
          'uri' => 'public://river.jpg',
          'filemime' => 'image/jpeg',
          'filesize' => '123825',
          'status' => '1',
          'timestamp' => '1408824349',
        ),
        3 => (object)array(
          'fid' => '3',
          'uid' => '1',
          'filename' => 'canal.jpg',
          'uri' => 'public://canal.jpg',
          'filemime' => 'image/jpeg',
          'filesize' => '251151',
          'status' => '1',
          'timestamp' => '1408824349',
        ),
        4 => (object)array(
          'fid' => '4',
          'uid' => '1',
          'filename' => 'frog.png',
          'uri' => 'public://frog.png',
          'filemime' => 'image/png',
          'filesize' => '153487',
          'status' => '1',
          'timestamp' => '1408824349',
        ),
      ),
      'commerce_product' => array(
        1 => (object)array(
          'revision_id' => '1',
          'sku' => 'testproduct',
          'title' => 'Test product',
          'revision_uid' => '1',
          'status' => '1',
          'log' => '',
          'revision_timestamp' => '1404764459',
          'data' => false,
          'product_id' => '1',
          'type' => 'product',
          'language' => 'und',
          'uid' => '1',
          'created' => '1404764459',
          'changed' => '1404764459',
          'commerce_price' => array(
            'und' => array(
              array(
                'amount' => '11100',
                'currency_code' => 'USD',
                'data' => array(
                  'components' => array(),
                ),
              ),
            ),
          ),
        ),
        2 => (object)array(
          'revision_id' => '2',
          'sku' => 'adsd',
          'title' => 'adfdfadfa',
          'revision_uid' => '1',
          'status' => '1',
          'log' => '',
          'revision_timestamp' => '1404766750',
          'data' => false,
          'product_id' => '2',
          'type' => 'product',
          'language' => 'und',
          'uid' => '1',
          'created' => '1404766750',
          'changed' => '1404766750',
          'commerce_price' => array(
            'und' => array(
              array(
                'amount' => '34400',
                'currency_code' => 'USD',
                'data' => array(
                  'components' => array(),
                ),
              ),
            ),
          ),
        ),
        3 => (object)array(
          'revision_id' => '3',
          'sku' => 'fdgsdfg',
          'title' => 'dfgdfg',
          'revision_uid' => '1',
          'status' => '1',
          'log' => '',
          'revision_timestamp' => '1404766760',
          'data' => false,
          'product_id' => '3',
          'type' => 'product',
          'language' => 'und',
          'uid' => '1',
          'created' => '1404766760',
          'changed' => '1404766760',
          'commerce_price' => array(
            'und' => array(
              array(
                'amount' => '235600',
                'currency_code' => 'USD',
                'data' => array(
                  'components' => array(),
                ),
              ),
            ),
          ),
        ),
        4 => (object)array(
          'revision_id' => '4',
          'sku' => 'ghkkk',
          'title' => 'khjghjk',
          'revision_uid' => '1',
          'status' => '1',
          'log' => '',
          'revision_timestamp' => '1404766767',
          'data' => false,
          'product_id' => '4',
          'type' => 'product',
          'language' => 'und',
          'uid' => '1',
          'created' => '1404766767',
          'changed' => '1404766767',
          'commerce_price' => array(
            'und' => array(
              array(
                'amount' => '45600',
                'currency_code' => 'USD',
                'data' => array(
                  'components' => array(),
                ),
              ),
            ),
          ),
        ),
        5 => (object)array(
          'revision_id' => '5',
          'sku' => 'pouu',
          'title' => 'zzio',
          'revision_uid' => '1',
          'status' => '1',
          'log' => '',
          'revision_timestamp' => '1404766774',
          'data' => false,
          'product_id' => '5',
          'type' => 'product',
          'language' => 'und',
          'uid' => '1',
          'created' => '1404766774',
          'changed' => '1404766774',
          'commerce_price' => array(
            'und' => array(
              array(
                'amount' => '45700',
                'currency_code' => 'USD',
                'data' => array(
                  'components' => array(),
                ),
              ),
            ),
          ),
        ),
        6 => (object)array(
          'revision_id' => '6',
          'sku' => 'rrewt46u',
          'title' => 'wert',
          'revision_uid' => '1',
          'status' => '1',
          'log' => '',
          'revision_timestamp' => '1404766784',
          'data' => false,
          'product_id' => '6',
          'type' => 'product',
          'language' => 'und',
          'uid' => '1',
          'created' => '1404766784',
          'changed' => '1404766784',
          'commerce_price' => array(
            'und' => array(
              array(
                'amount' => '788600',
                'currency_code' => 'USD',
                'data' => array(
                  'components' => array(),
                ),
              ),
            ),
          ),
        ),
      ),
      'user' => array(
        (object)array(
          'uid' => '0',
          'name' => '',
          'pass' => '5488efa838750',
          'mail' => '',
          'theme' => '',
          'signature' => '',
          'signature_format' => NULL,
          'created' => '0',
          'access' => '0',
          'login' => '0',
          'status' => '0',
          'timezone' => NULL,
          'language' => '',
          'picture' => '0',
          'init' => '',
          'data' => false,
          'roles' => array(
            1 => 'anonymous user',
          ),
          'field_test_field' => array(),
          'field_fieldset_field' => array(),
        ),
        (object)array(
          'uid' => '1',
          'name' => 'admin',
          'pass' => '5488efa838795',
          'mail' => 'andreas@dqxtech.net',
          'theme' => '',
          'signature' => '',
          'signature_format' => 'plain_text',
          'created' => '1385990467',
          'access' => '1418259902',
          'login' => '1418164266',
          'status' => '1',
          'timezone' => 'Europe/Berlin',
          'language' => '',
          'picture' => '0',
          'init' => 'andreas@dqxtech.net',
          'data' => false,
          'roles' => array(
            2 => 'authenticated user',
          ),
          'field_test_field' => array(
            'und' => array(
              array(
                'value' => 'sdfadas',
                'format' => NULL,
                'safe_value' => 'sdfadas',
              ),
            ),
          ),
          'field_fieldset_field' => array(),
        ),
      ),
    );
  }

}
