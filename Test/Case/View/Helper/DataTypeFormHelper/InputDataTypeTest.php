<?php
/**
 * DataTypeFormHelper::inputDataType()のテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsHelperTestCase', 'NetCommons.TestSuite');

/**
 * DataTypeFormHelper::inputDataType()のテスト
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\DataTypes\Test\Case\View\Helper\DataTypeForm
 */
class DataTypesDataTypeFormHelperInputDataTypeTest extends NetCommonsHelperTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array();

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
		//Helperロード
		$this->loadHelper('DataTypes.DataTypeForm');
	}

/**
 * inputDataType()のテスト
 *
 * @return void
 */
	public function testInputDataType() {
		//テスト実行

		//チェック
	}
}
