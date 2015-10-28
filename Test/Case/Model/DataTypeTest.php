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

App::uses('DataType', 'DataTypes.Model');

/**
 * Summary for DataTypeTemplatesPlugin Test Case
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\DataType\Test\Case\Model
 */
class DataTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.data_types.data_type',
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DataType = ClassRegistry::init('DataTypes.DataType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DataType);

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
