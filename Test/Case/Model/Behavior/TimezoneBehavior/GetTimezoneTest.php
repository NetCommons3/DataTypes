<?php
/**
 * TimezoneBehavior::getTimezone()のテスト
 *
 * @property DataType $DataType
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsCakeTestCase', 'NetCommons.TestSuite');

/**
 * TimezoneBehavior::getTimezone()のテスト
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\DataTypes\Test\Case\Model\DataType\Behavior\TimezoneBehavior
 */
class DataTypesTimezoneBehaviorGetTimezoneTest extends NetCommonsCakeTestCase {

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
		NetCommonsCakeTestCase::loadTestPlugin($this, 'DataTypes', 'TestDataTypes');
		$this->TestTimezoneBehaviorModel = ClassRegistry::init('TestDataTypes.TestDataTypesTimezoneBehaviorModel');
	}

/**
 * getTimezone()のテスト用のDataProvider
 *
 * #### 戻り値
 *  - what DateTimeZoneの定数。nullの場合、DateTimeZone::ALL。falseの場合、省略
 *  - country 2文字のISO 3166-1互換の国コード。nullの場合、DateTimeZone::ALL。falseの場合、省略
 *  - expectedCount 期待する件数
 *
 * @return array
 */
	public function dataProvider() {
		return array(
			array('what' => false, 'country' => false, 'expectedCount' => count(DateTimeZone::listIdentifiers(DateTimeZone::ALL))),
			array('what' => DateTimeZone::ASIA, 'country' => false, 'expectedCount' => count(DateTimeZone::listIdentifiers(DateTimeZone::ASIA))),
			array('what' => DateTimeZone::ALL, 'country' => 'JP', 'expectedCount' => 1),
			array('what' => null, 'country' => 'JP', 'expectedCount' => 1),
		);
	}

/**
 * getTimezone()のテスト
 *
 * @param int|null|bool $what DateTimeZoneの定数(タイムゾーン(地域))。nullの場合、DateTimeZone::ALL。falseの場合、省略
 * @param string|null|bool $country 2文字のISO 3166-1互換の国コード。nullの場合、DateTimeZone::ALL。falseの場合、省略
 * @param int $expectedCount 期待する件数
 * @dataProvider dataProvider
 * @return void
 * @link https://secure.php.net/manual/ja/class.datetimezone.php
 */
	public function testGetTimezone($what, $country, $expectedCount) {
		//テスト実施
		if ($what === false && $country === false) {
			$result = $this->TestTimezoneBehaviorModel->getTimezone();
		} elseif ($country === false) {
			$result = $this->TestTimezoneBehaviorModel->getTimezone($what);
		} else {
			$result = $this->TestTimezoneBehaviorModel->getTimezone($what, $country);
		}

		//チェック
		$this->assertEquals($expectedCount, count($result));

		$expected = array('key', 'name', 'code', 'language_id', 'sort');
		$actual = array_keys(Hash::get(Hash::extract($result, '{n}[key=Asia/Tokyo]'), '0', array()));
		$this->assertEquals($expected, $actual);
	}
}
