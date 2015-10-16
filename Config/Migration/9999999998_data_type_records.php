<?php
/**
 * Insert records migration
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsMigration', 'NetCommons.Config/Migration');

/**
 * Insert records migration
 *
 * @package NetCommons\DataTypes\Config\Migration
 */
class DataTypeRecords extends NetCommonsMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'data_type_records';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(),
		'down' => array(),
	);

/**
 * Insert records
 *
 * @var array $migration
 */
	public $records = array(
		'DataType' => array(
			//日本語
			array('language_id' => '2', 'key' => 'label', 'name' => 'ラベル', 'weight' => '1', ),
			array('language_id' => '2', 'key' => 'text', 'name' => 'テキストボックス', 'weight' => '2', ),
			array('language_id' => '2', 'key' => 'textarea', 'name' => 'テキストエリア', 'weight' => '3', ),
			array('language_id' => '2', 'key' => 'radio', 'name' => 'ラジオボタン', 'weight' => '4', ),
			array('language_id' => '2', 'key' => 'checkbox', 'name' => 'チェックボックス', 'weight' => '5', ),
			array('language_id' => '2', 'key' => 'select', 'name' => 'セレクトボックス', 'weight' => '6', ),
			array('language_id' => '2', 'key' => 'multiple_select', 'name' => '複数セレクトボックス', 'weight' => '7', ),
			array('language_id' => '2', 'key' => 'password', 'name' => 'パスワード', 'weight' => '8', ),
			array('language_id' => '2', 'key' => 'email', 'name' => 'eメール', 'weight' => '9', ),
			array('language_id' => '2', 'key' => 'img', 'name' => '画像', 'weight' => '10', ),
			array('language_id' => '2', 'key' => 'file', 'name' => 'ファイル', 'weight' => '11', ),
			array('language_id' => '2', 'key' => 'date', 'name' => '日付', 'weight' => '12', ),
			array('language_id' => '2', 'key' => 'time', 'name' => '時間', 'weight' => '13', ),
			array('language_id' => '2', 'key' => 'datetime', 'name' => '日時', 'weight' => '14', ),
			array('language_id' => '2', 'key' => 'wysiwyg', 'name' => 'WYSIWYG', 'weight' => '15', ),
			array('language_id' => '2', 'key' => 'refecture', 'name' => '都道府県', 'weight' => '16', ),
			//英語
			array('language_id' => '1', 'key' => 'label', 'name' => 'Label', 'weight' => '1', ),
			array('language_id' => '1', 'key' => 'text', 'name' => 'Text', 'weight' => '2', ),
			array('language_id' => '1', 'key' => 'textarea', 'name' => 'Textarea', 'weight' => '3', ),
			array('language_id' => '1', 'key' => 'radio', 'name' => 'Radio', 'weight' => '4', ),
			array('language_id' => '1', 'key' => 'checkbox', 'name' => 'Checkbox', 'weight' => '5', ),
			array('language_id' => '1', 'key' => 'select', 'name' => 'Select', 'weight' => '6', ),
			array('language_id' => '1', 'key' => 'multiple_select', 'name' => 'Multiple select', 'weight' => '7', ),
			array('language_id' => '1', 'key' => 'password', 'name' => 'Password', 'weight' => '8', ),
			array('language_id' => '1', 'key' => 'email', 'name' => 'E-mail', 'weight' => '9', ),
			array('language_id' => '1', 'key' => 'img', 'name' => 'Picture', 'weight' => '10', ),
			array('language_id' => '1', 'key' => 'file', 'name' => 'Attachment file', 'weight' => '11', ),
			array('language_id' => '1', 'key' => 'date', 'name' => 'Date', 'weight' => '12', ),
			array('language_id' => '1', 'key' => 'time', 'name' => 'Time', 'weight' => '13', ),
			array('language_id' => '1', 'key' => 'datetime', 'name' => 'Date time', 'weight' => '14', ),
			array('language_id' => '1', 'key' => 'wysiwyg', 'name' => 'WYSIWYG', 'weight' => '15', ),
			array('language_id' => '1', 'key' => 'refecture', 'name' => 'Refecture', 'weight' => '16', ),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function after($direction) {
		if ($direction === 'down') {
			return true;
		}
		foreach ($this->records as $model => $records) {
			if (!$this->updateRecords($model, $records)) {
				return false;
			}
		}
		return true;
	}
}
