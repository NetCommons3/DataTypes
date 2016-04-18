<?php
/**
 * DataTypeFormHelper::image()のテスト
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsHelperTestCase', 'NetCommons.TestSuite');

/**
 * DataTypeFormHelper::image()のテスト
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\DataTypes\Test\Case\View\Helper\DataTypeForm
 */
class DataTypesDataTypeFormHelperImageTest extends NetCommonsHelperTestCase {

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
	private function __assertImage($result) {
		//チェック
		$pattern = '/' . preg_quote('<div class="thumbnail data-type-thumbnail data-type-edit-thumbnail">', '/') . '/';
		$this->assertRegExp($pattern, $result);

		$pattern = '/<img ' . preg_quote('src="http://example.com" class="img-responsive img-rounded" alt="" id="ModelFieldImage"', '/') . '.*?>/';
		$this->assertRegExp($pattern, $result);

		$pattern = '/<input ' . preg_quote('type="file" name="data[Model][field]" class="" remove="1" filename="1" ' .
								'data-type-key="image" url="http://example.com" id="ModelField"', '/') . '.*?>/';
		$this->assertRegExp($pattern, $result);
	}

/**
 * image()のテスト
 *
 * @return void
 */
	public function testImage() {
		//テスト実行
		$result = $this->DataTypeForm->image('Model.field', 'Image type', array('url' => 'http://example.com'));

		//チェック
		$this->__assertImage($result);
	}

/**
 * image()のテスト(url属性なし)
 *
 * @return void
 */
	public function testImageNoUrl() {
		//テスト実行
		$result = $this->DataTypeForm->image('Model.field', 'Image type');

		//チェック
		$this->assertEquals('', $result);
	}

/**
 * inputDataType()のテスト(type=img)
 *
 * @return void
 */
	public function testInputDataTypeByImg() {
		//テスト実行
		$result = $this->DataTypeForm->inputDataType('img', 'Model.field', 'Image type', array('url' => 'http://example.com'));

		//チェック
		$this->__assertImage($result);
	}
}
