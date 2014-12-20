Entity2
==============

Alternative to the EntityMetatadaWrapper API of the well-known [entity module](https://drupal.org/project/entity) for Drupal 7.

Unlike entity module, entity2 has very explicit interfaces and method signatures. This is generally more robust, and makes it look nice in an IDE such as PhpStorm.

E.g. the original entity module had methods like ->get() and ->value(), where the return value was very hard to predict. E.g. the value() method could return an id, an entity, a string value, etc, depending on the object or the field type.

With entity2, you need to explicitly call getFieldItems(), getFieldItem(), getFieldValue() etc, which all have clearly defined return types.

## Usage
For usage examples, you should look into the tests/src directory.

## PHPUnit
To run PHPUnit tests, simply run `composer install` and then `phpunit`, in the module directory. The Drupal environment is totally mocked out.

## Status / To do
The module is not finished.
* We want more useful methods like `->getReferencedEntities($fieldName)`. On the other hand, the implementations of stuff like this should ideally live in separate classes.
* We want to make better use of the info in `hook_property_info()` from entity module.
* Support for properties that work like entity references. E.g. `$nodeWrapper->getReferencedEntity('author')`.
