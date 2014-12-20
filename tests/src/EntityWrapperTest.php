<?php

namespace Drupal\entity2\Tests;

use Drupal\entity2\DIC\ServiceContainer;
use Drupal\entity2\Info\Field\FieldInfoInstancesStatic;
use Drupal\entity2\Special\EntityReferenceField;
use Drupal\entity2\System\FieldLanguagesAlterEmpty;
use Drupal\entity2\Tests\Fixtures\SiteInfo;
use Drupal\entity2\Tests\Mock\MockLoaderManager;

class EntityWrapperTest extends \PHPUnit_Framework_TestCase {

  function testEntityInfo() {

  }

  function testFieldInfo() {

  }

  function testInstanceInfo() {
    $instances = $this->getContainer()->fieldInstances;
    $this->assertEquals(
      SiteInfo::fieldInfoInstances()['node']['article'],
      $instances->bundleGetFieldInstances('node', 'article'));
  }

  function testNodeEntityType() {

    $type = $this->getContainer()->types->requireEntityType('node');

    $this->assertEquals(
      SiteInfo::entityGetInfo()['node']['entity keys'],
      $type->getEntityKeys());

    $node = $this->getExampleNode();

    $this->assertEquals(
      'article',
      $type->entityGetBundleName($node));
  }

  function testNodeWrapper() {
    $wrapper = $this->getWrappedExampleNode();

    // Test entity keys.
    $this->assertEquals('node', $wrapper->getEntityTypeId());
    $this->assertEquals('article', $wrapper->getBundleName());
    $this->assertEquals(222, $wrapper->getEntityId());
    $this->assertEquals(22, $wrapper->getRevisionId());
  }

  function testNodeWrapperProperties() {
    $wrapper = $this->getWrappedExampleNode();

    // Test getting raw property values.
    $this->assertEquals('1', $wrapper->get('status'));
    $this->assertEquals('en', $wrapper->get('language'));
    $this->assertNull($wrapper->get('unknown_property'));

    // Test getting a field as a raw property.
    $this->assertEquals(
      array(
        'und' => array(
          0 => array(
            'value' => 'ALT BREADCRUMB TITLE',
            'format' => NULL,
            'safe_value' => 'ALT BREADCRUMB TITLE',
          ),
        ),
      ),
      $wrapper->get('field_breadcrumb_title')
    );
  }

  function testNodeWrapperFieldItems() {
    $wrapper = $this->getWrappedExampleNode();

    // Test getting field items.
    $this->assertEquals(
      array(
        0 => array(
          'value' => 'ALT BREADCRUMB TITLE',
          'format' => NULL,
          'safe_value' => 'ALT BREADCRUMB TITLE',
        ),
      ),
      $wrapper->getFieldItems('field_breadcrumb_title'));

    $this->assertEquals(
      array(
        'value' => 'ALT BREADCRUMB TITLE',
        'format' => NULL,
        'safe_value' => 'ALT BREADCRUMB TITLE',
      ),
      $wrapper->getFieldItem('field_breadcrumb_title'));

    $this->assertEquals(
      'ALT BREADCRUMB TITLE',
      $wrapper->getFieldValue('field_breadcrumb_title'));

    $this->assertEquals(
      'ALT BREADCRUMB TITLE',
      $wrapper->getFieldValue('field_breadcrumb_title', 'safe_value'));
  }

  function testNodeWrapperFieldItemsEmpty() {
    $wrapper = $this->getWrappedExampleNode();

    $this->assertEquals(
      array(),
      $wrapper->getFieldItems('field_specialfield'));

    $this->assertNull($wrapper->getFieldItem('field_specialfield'));
    $this->assertNull($wrapper->getFieldItem('field_breadcrumb_title', 1));
  }

  function testNodeWrapperFields() {
    # $wrapper = $this->getWrappedExampleNode();

    # $this->assertFalse($wrapper->hasFieldItems('field_specialfield'));
    # $this->assertTrue($wrapper->hasFieldItems('field_image'));
  }

  /**
   * @expectedException \Drupal\entity2\Exception\MissingEntityException
   * @expectedExceptionMessage No entity of type 'node' and id=22 found.
   */
  function testNonExistingNodeWrapperGetEntity() {
    $lazyWrapper = $this->getContainer()->main->wrapEntityId('node', 22);
    $lazyWrapper->getEntity();
  }

  /**
   * @expectedException \Drupal\entity2\Exception\MissingEntityException
   * @expectedExceptionMessage No entity of type 'node' and id=22 found.
   */
  function testNonExistingNodeWrapperGetBundle() {
    $lazyWrapper = $this->getContainer()->main->wrapEntityId('node', 22);
    $lazyWrapper->getBundle();
  }

  function testNonExistingNodeWrapperGetEntityTypeId() {
    $lazyWrapper = $this->getContainer()->main->wrapEntityId('node', 22);
    $this->assertEquals('node', $lazyWrapper->getEntityTypeId());
  }

  function testLazyNodeWrapper() {
    $lazyWrapper = $this->getContainer()->main->wrapEntityId('node', 2);
    $this->assertEquals('article', $lazyWrapper->getBundleName());
    $this->assertEquals(2, $lazyWrapper->getEntityId());
    $this->assertEquals(2, $lazyWrapper->getEntity()->nid);
  }

  public function testEntityReference() {
    $container = $this->getContainer();

    $eref = EntityReferenceField::create(
      'field_referenced_nodes',
      $container);

    $nodeWrapper = $container->main->wrapEntityId('node', 4);

    $this->assertEquals(
      array(
        array('target_id' => 1),
        array('target_id' => 2),
      ),
      $nodeWrapper->getFieldItems('field_referenced_nodes'));

    $this->assertEquals(
      array(
        1 => $container->main->wrapEntityId('node', 1),
        2 => $container->main->wrapEntityId('node', 2),
      ),
      $referenced = $eref->entityGetReferencedEntities($nodeWrapper));

    $this->assertEquals('dvsdf', $referenced[1]->get('title'));
  }

  /**
   * @return \Drupal\entity2\DIC\ServiceContainer
   */
  private function getContainer() {
    $container = new ServiceContainer();
    $container->entityInfo = SiteInfo::entityGetInfo();
    $container->propertyInfo = SiteInfo::entityGetPropertyInfo();
    $container->language = SiteInfo::getLanguage();
    $container->fieldInfoFields = SiteInfo::fieldInfoFields();
    $container->fieldInstances = new FieldInfoInstancesStatic(SiteInfo::fieldInfoInstances());
    $container->fieldLanguagesAlter = new FieldLanguagesAlterEmpty();
    $container->loaderManager = new MockLoaderManager();
    return $container;
  }

  /**
   * @return \Drupal\entity2\Wrapper\Entity\EntityWrapperInterface
   */
  private function getWrappedExampleNode() {
    $node = $this->getExampleNode();
    return $this->getContainer()->main->wrapEntity('node', $node);
  }

  /**
   * @return object
   */
  private function getExampleNode() {
    return (object)array(
      'vid' => '22',
      'uid' => '1',
      'title' => 'Test article',
      'log' => '',
      'status' => '1',
      'comment' => '0',
      'promote' => '1',
      'sticky' => '0',
      'ds_switch' => '',
      'nid' => '222',
      'type' => 'article',
      'language' => 'en',
      'created' => '1395615173',
      'changed' => '1415966982',
      'tnid' => '0',
      'translate' => '0',
      'revision_timestamp' => '1415966982',
      'revision_uid' => '1',
      'body' => array(),
      'field_specialfield' => array(),
      'field_categories' => array(
        'und' => array(
          0 => array(
            'tid' => '6',
          ),
          1 => array(
            'tid' => '1',
          ),
        ),
      ),
      'field_file' => array(),
      'field_image' => array(
        'und' => array(
          0 => array(
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
          0 => array(
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
    );
  }
}
