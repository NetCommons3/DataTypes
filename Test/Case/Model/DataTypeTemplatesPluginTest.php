<?php
/**
 * DataTypeTemplatesPlugin Test Case
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('DataTypeTemplatesPlugin', 'DataTypes.Model');

/**
 * Summary for DataTypeTemplatesPlugin Test Case
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\DataType\Test\Case\Model
 */
class DataTypeTemplatesPluginTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.data_types.data_type_templates_plugin',
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DataTypeTemplatesPlugin = ClassRegistry::init('DataTypes.DataTypeTemplatesPlugin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DataTypeTemplatesPlugin);

		parent::tearDown();
	}

/**
 * Expect get method
 *
 * @return void
 */
	public function testGet() {
	}

}
