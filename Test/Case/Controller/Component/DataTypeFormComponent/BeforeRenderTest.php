<?php
/**
 * DataTypeFormComponent::beforeRender()のテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsControllerTestCase', 'NetCommons.TestSuite');

/**
 * DataTypeFormComponent::beforeRender()のテスト
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\DataTypes\Test\Case\Controller\Component\DataTypeFormComponent
 */
class DataTypeFormComponentBeforeRenderTest extends NetCommonsControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.data_types.data_type4test',
		'plugin.data_types.data_type_choice4test',
	);

/**
 * Plugin name
 *
 * @var array
 */
	public $plugin = 'data_types';

/**
 * Controller name
 *
 * @var string
 */
	//protected $_controller = 'control_panel';

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		NetCommonsCakeTestCase::loadTestPlugin($this, 'DataTypes', 'TestDataTypes');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		//ログアウト
		TestAuthGeneral::logout($this);

		parent::tearDown();
	}

/**
 * beforeRender()のテスト
 *
 * @return void
 */
	public function testBeforeRender() {
		$this->generateNc('TestDataTypes.TestDataTypeFormComponent');
		//ログイン
		TestAuthGeneral::login($this);

		//テスト実行
		$this->_testNcAction('/test_data_types/test_data_type_form_component/index', array(
			'method' => 'get'
		));

		//チェック
		// * DataTypeFormComponentのチェック
		$this->assertContains('DataTypes.DataTypeForm', $this->controller->helpers);

		$expected = array('text', 'textarea', 'radio', 'checkbox', 'select');
		$this->assertEquals($expected, array_keys($this->vars['dataTypes']));
	}

/**
 * beforeRenderのテスト(取得するtypeを変更)
 *
 * @return void
 */
	public function testSettingsDataType() {
		$this->generateNc('TestDataTypes.TestDataTypeFormComponentSettings');
		//ログイン
		TestAuthGeneral::login($this);

		//テスト実行
		$this->_testNcAction('/test_data_types/test_data_type_form_component_setting/index', array(
			'method' => 'get'
		));

		//チェック
		// * DataTypeFormComponentのチェック
		$this->assertContains('DataTypes.DataTypeForm', $this->controller->helpers);

		$expected = array('textarea', 'email', 'wysiwyg', 'prefecture');
		$this->assertEquals($expected, array_keys($this->vars['dataTypes']));
	}
}
