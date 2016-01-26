<?php
/**
 * DataTypeFormHelper::index()のテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsHelperTestCase', 'NetCommons.TestSuite');

/**
 * DataTypeFormHelper::index()のテスト
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\DataTypes\Test\Case\View\Helper\DataTypeForm
 */
class DataTypesDataTypeFormHelperSelectDataTypesTest extends NetCommonsHelperTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.data_types.data_type',
		'plugin.data_types.data_type_choice',
	);

/**
 * Plugin name
 *
 * @var array
 */
	public $plugin = 'data_types';

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
	}

/**
 * indexのテスト
 *
 * @return void
 */
	public function testSelectDataTypes() {
		$this->loadHelper('DataTypes.DataTypeForm', array('dataTypes' => array('aaaa')), array('dataTypes' => array('bbbb')));
		$result = $this->DataTypeForm->selectDataTypes('Field.name');
	}
}
