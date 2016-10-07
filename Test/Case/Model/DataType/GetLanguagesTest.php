<?php
/**
 * DataType::getLanguages()のテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsGetTest', 'NetCommons.TestSuite');

/**
 * DataType::getLanguages()のテスト
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\DataTypes\Test\Case\Model\DataType
 */
class DataTypeGetLanguagesTest extends NetCommonsGetTest {

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
 * @var string
 */
	public $plugin = 'data_types';

/**
 * Model name
 *
 * @var string
 */
	protected $_modelName = 'DataType';

/**
 * Method name
 *
 * @var string
 */
	protected $_methodName = 'getLanguages';

/**
 * getLanguages()のテスト
 *
 * @return void
 */
	public function testGetLanguages() {
		$model = $this->_modelName;
		$methodName = $this->_methodName;

		//テスト実施
		$result = $this->$model->$methodName();

		//チェック
		$expected = array(
			0 => array(
				'key' => 'en',
				'name' => '英語',
				'code' => 'en',
				'language_id' => '1',
			),
			1 => array(
				'key' => 'ja',
				'name' => '日本語',
				'code' => 'ja',
				'language_id' => '2',
			),
		);
		$this->assertEquals($result, $expected);
	}

}
