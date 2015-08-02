<?php
/**
 * DataTypeTemplatesPluginFixture
 *
* @author Jun Nishikawa <topaz2@m0n0m0n0.com>
* @link http://www.netcommons.org NetCommons Project
* @license http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for DataTypeTemplatesPluginFixture
 */
class DataTypeTemplatesPluginFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'data_type_template_key' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'plugin_key' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'data_type_template_key' => 'Lorem ipsum dolor sit amet',
			'plugin_key' => 'Lorem ipsum dolor sit amet',
			'created_user' => 1,
			'created' => '2015-08-02 11:05:52',
			'modified_user' => 1,
			'modified' => '2015-08-02 11:05:52'
		),
	);

}
