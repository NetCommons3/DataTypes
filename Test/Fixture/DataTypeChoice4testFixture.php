<?php
/**
 * DataTypesプラグインのテスト用DataTypeChoice
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('DataTypeChoiceFixture', 'DataTypes.Test/Fixture');

/**
 * DataTypesプラグインのテスト用DataTypeChoice
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\DataTypes\Test\Fixture
 */
class DataTypeChoice4testFixture extends DataTypeChoiceFixture {

/**
 * Model name
 *
 * @var string
 */
	public $name = 'DataTypeChoice';

/**
 * Full Table Name
 *
 * @var string
 */
	public $table = 'data_type_choices';

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array('language_id' => '2', 'key' => 'prefecture_01', 'data_type_key' => 'prefecture', 'name' => 'Hokkaido', 'code' => '01', 'weight' => '1', ),
		array('language_id' => '2', 'key' => 'prefecture_11', 'data_type_key' => 'prefecture', 'name' => 'Saitama', 'code' => '11', 'weight' => '11', ),
		array('language_id' => '2', 'key' => 'prefecture_12', 'data_type_key' => 'prefecture', 'name' => 'Chiba', 'code' => '12', 'weight' => '12', ),
		array('language_id' => '2', 'key' => 'prefecture_13', 'data_type_key' => 'prefecture', 'name' => 'Tokyo', 'code' => '13', 'weight' => '13', ),
		array('language_id' => '2', 'key' => 'prefecture_14', 'data_type_key' => 'prefecture', 'name' => 'Kanagawa', 'code' => '14', 'weight' => '14', ),
		array('language_id' => '2', 'key' => 'prefecture_47', 'data_type_key' => 'prefecture', 'name' => 'Okinawa', 'code' => '47', 'weight' => '47', ),
	);

}
