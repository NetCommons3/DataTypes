<?php
/**
 * DataTypesプラグインのテスト用DataTypeFixture
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('DataTypeFixture', 'DataTypes.Test/Fixture');

/**
 * DataTypesプラグインのテスト用DataTypeFixture
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\DataTypes\Test\Fixture
 */
class DataType4testFixture extends DataTypeFixture {

/**
 * Model name
 *
 * @var string
 */
	public $name = 'DataType';

/**
 * Full Table Name
 *
 * @var string
 */
	public $table = 'data_types';

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array('language_id' => '2', 'key' => 'label', 'name' => 'Label name', 'weight' => '1', ),
		array('language_id' => '2', 'key' => 'text', 'name' => 'Text name', 'weight' => '2', ),
		array('language_id' => '2', 'key' => 'textarea', 'name' => 'Textarea name', 'weight' => '3', ),
		array('language_id' => '2', 'key' => 'radio', 'name' => 'Radio name', 'weight' => '4', ),
		array('language_id' => '2', 'key' => 'checkbox', 'name' => 'Checkbox name', 'weight' => '5', ),
		array('language_id' => '2', 'key' => 'select', 'name' => 'Select name', 'weight' => '6', ),
		array('language_id' => '2', 'key' => 'multiple_select', 'name' => 'Multiple select name', 'weight' => '7', ),
		array('language_id' => '2', 'key' => 'password', 'name' => 'Password name', 'weight' => '8', ),
		array('language_id' => '2', 'key' => 'email', 'name' => 'E-mail name', 'weight' => '9', ),
		array('language_id' => '2', 'key' => 'img', 'name' => 'Picture name', 'weight' => '10', ),
		array('language_id' => '2', 'key' => 'file', 'name' => 'Attachment file name', 'weight' => '11', ),
		array('language_id' => '2', 'key' => 'date', 'name' => 'Date name', 'weight' => '12', ),
		array('language_id' => '2', 'key' => 'time', 'name' => 'Time name', 'weight' => '13', ),
		array('language_id' => '2', 'key' => 'datetime', 'name' => 'Date time name', 'weight' => '14', ),
		array('language_id' => '2', 'key' => 'wysiwyg', 'name' => 'WYSIWYG name', 'weight' => '15', ),
		array('language_id' => '2', 'key' => 'prefecture', 'name' => 'Prefecture name', 'weight' => '16', ),
		array('language_id' => '2', 'key' => 'timezone', 'name' => 'Time zone name', 'weight' => '17', ),
	);

}
