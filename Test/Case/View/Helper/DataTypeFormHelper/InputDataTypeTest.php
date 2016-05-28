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
	}

/**
 * inputDataType()のテスト(type=text)
 *
 * @return void
 */
	public function testInputDataType() {
		//Helperロード
		$requestData = array(
			'Model' => array('field' => 'Text value')
		);
		$this->loadHelper('DataTypes.DataTypeForm', array(), $requestData);

		//テスト実行
		$attributes = array(
			'type' => 'text',
			'label' => 'Text type',
		);
		$result = $this->DataTypeForm->inputDataType('Model.field', $attributes);

		//チェック
		$pattern = '/<input ' . preg_quote('name="data[Model][field]"', '/') . '.*?' .
								preg_quote('type="text" value="Text value" id="ModelField"', '/') . '.*?>/';
		$this->assertRegExp($pattern, $result);
	}

/**
 * inputDataType()のテスト(type=radio)
 *
 * @return void
 */
	public function testInputDataTypeByRadio() {
		//Helperロード
		$requestData = array(
			'Model' => array('field' => '2')
		);
		$this->loadHelper('DataTypes.DataTypeForm', array(), $requestData);

		//テスト実行
		$attributes = array(
			'type' => 'radio',
			'label' => 'Radio type',
			'options' => array('1' => 'value 1', '2' => 'value 2', '3' => 'value 3'),
		);
		$result = $this->DataTypeForm->inputDataType('Model.field', $attributes);

		//チェック
		$pattern = '/<input ' . preg_quote('type="radio" name="data[Model][field]" id="ModelField1" value="1"', '/') . '.*?>/';
		$this->assertRegExp($pattern, $result);

		$pattern = '/<input ' . preg_quote('type="radio" name="data[Model][field]" id="ModelField2" value="2" checked="checked"', '/') . '.*?>/';
		$this->assertRegExp($pattern, $result);

		$pattern = '/<input ' . preg_quote('type="radio" name="data[Model][field]" id="ModelField3" value="3"', '/') . '.*?>/';
		$this->assertRegExp($pattern, $result);
	}

/**
 * inputDataType()のテスト(type=password)
 * PasswordTestで実施しているため、ここでは行わない
 */

/**
 * inputDataType()のテスト(type=img)
 * ImageTestで実施しているため、ここでは行わない
 */

/**
 * inputDataType()のテスト(type=label)
 *
 * @return void
 */
	public function testInputDataTypeByLabel() {
		//Helperロード
		$requestData = array(
			'Model' => array('field' => 'Label value')
		);
		$this->loadHelper('DataTypes.DataTypeForm', array(), $requestData);

		//テスト実行
		$attributes = array(
			'type' => 'label',
			'label' => 'Label type',
		);
		$result = $this->DataTypeForm->inputDataType('Model.field', $attributes);

		//チェック
		$pattern = '/' . preg_quote('<div class="form-input-outer form-control">Label value</div>', '/') . '/';
		$this->assertRegExp($pattern, $result);
	}
}
