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
		$pattern = '/' . preg_quote('<div class="data-type-password">', '/') . '/';
		$this->assertRegExp($pattern, $result);

		$pattern = '/<input ' . preg_quote('name="data[Model][field]" autocomplete="off" class="form-control"', '/') . '.*?' .
								preg_quote('type="password" id="ModelField"', '/') . '.*?>/';
		$this->assertRegExp($pattern, $result);

		$pattern = '/' . preg_quote('<div class="data-type-password data-type-again">', '/') . '/';
		$this->assertRegExp($pattern, $result);

		$pattern = '/<input ' . preg_quote('name="data[Model][field_again]" autocomplete="off" class="form-control"', '/') . '.*?' .
								preg_quote('type="password" id="ModelFieldAgain"', '/') . '.*?>/';
		$this->assertRegExp($pattern, $result);
	}

/**
 * password()のテスト
 *
 * @return void
 */
	public function testPassword() {
		//テスト実行
		$result = $this->DataTypeForm->password('Model.field', 'Password type');

		//チェック
		$this->__assertPassword($result);
	}

/**
 * inputDataType()のテスト(type=password)
 *
 * @return void
 */
	public function testInputDataTypeByPassword() {
		//テスト実行
		$result = $this->DataTypeForm->inputDataType('password', 'Model.field', 'Password type');

		//チェック
		$this->__assertPassword($result);
	}
}