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
			array('language_id' => '2', 'key' => 'text', 'name' => 'テキストボックス', 'weight' => '1', ),
			array('language_id' => '2', 'key' => 'textarea', 'name' => 'テキストエリア', 'weight' => '2', ),
			array('language_id' => '2', 'key' => 'radio', 'name' => '選択肢（択一）', 'weight' => '3', ),
			array('language_id' => '2', 'key' => 'checkbox', 'name' => '選択肢（複数）', 'weight' => '4', ),
			array('language_id' => '2', 'key' => 'select', 'name' => 'リストボックス', 'weight' => '5', ),
			array('language_id' => '2', 'key' => 'multiple_select', 'name' => '複数リストボックス', 'weight' => '6', ),
			array('language_id' => '2', 'key' => 'password', 'name' => 'パスワード', 'weight' => '7', ),
			array('language_id' => '2', 'key' => 'email', 'name' => 'eメール', 'weight' => '8', ),
			array('language_id' => '2', 'key' => 'img', 'name' => '画像', 'weight' => '9', ),
			array('language_id' => '2', 'key' => 'file', 'name' => 'ファイル', 'weight' => '10', ),
			array('language_id' => '2', 'key' => 'date', 'name' => '日付', 'weight' => '11', ),
			array('language_id' => '2', 'key' => 'time', 'name' => '時刻', 'weight' => '12', ),
			array('language_id' => '2', 'key' => 'datetime', 'name' => '日時', 'weight' => '13', ),
			array('language_id' => '2', 'key' => 'wysiwyg', 'name' => 'WYSIWYG', 'weight' => '14', ),
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
