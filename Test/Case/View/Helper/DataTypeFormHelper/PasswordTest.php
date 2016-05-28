<?php
/**
 * DataTypeFormHelper::password()のテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsHelperTestCase', 'NetCommons.TestSuite');

/**
 * DataTypeFormHelper::password()のテスト
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\DataTypes\Test\Case\View\Helper\DataTypeForm
 */
class DataTypesDataTypeFormHelperPasswordTest extends NetCommonsHelperTestCase {

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
 * image()の評価チェック
 *
 * @param string $result 結果
 * @return void
 */
	private function __assertPassword($result) {
		//チェック
		$pattern = '/<input ' . preg_quote('name="data[Model][field]" class="form-control" autocomplete="off"', '/') . '.*?' .
								preg_quote('type="password" id="ModelField"', '/') . '.*?>/';
		$this->assertRegExp($pattern, $result);

		$pattern = '/<input ' . preg_quote('name="data[Model][field_again]" class="form-control form-input-again" autocomplete="off"', '/') . '.*?' .
								preg_quote('type="password" id="ModelFieldAgain"', '/') . '.*?>/';
		$this->assertRegExp($pattern, $result);
	}

/**
 * inputDataType()のテスト(type=password)
 *
 * @return void
 */
	public function testInputDataTypeByPassword() {
		//テスト実行
		$attributes = array(
			'type' => 'password',
			'label' => 'Password type',
		);
		$result = $this->DataTypeForm->inputDataType('Model.field', $attributes);

		//チェック
		$this->__assertPassword($result);
	}
}
