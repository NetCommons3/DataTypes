<?php
/**
 * ユーザ項目に言語追加 migration
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('NetCommonsMigration', 'NetCommons.Config/Migration');

/**
 * ユーザ項目に言語追加 migration
 *
 * @package NetCommons\DataTypes\Config\Migration
 */
class AddLanguageRecords extends NetCommonsMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'add_language_records';

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
			array('language_id' => '2', 'key' => 'language', 'name' => '言語', 'weight' => '18', ),
			//英語
			array('language_id' => '1', 'key' => 'language', 'name' => 'Language', 'weight' => '18', ),
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
