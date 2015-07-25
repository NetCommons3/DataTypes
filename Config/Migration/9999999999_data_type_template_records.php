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
class DataTypeTemplateRecords extends NetCommonsMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'data_type_template_records';

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
		'DataTypeTemplate' => array(
			array('language_id' => '2', 'key' => 'label', 'data_type_key' => 'text', 'plugin_key' => '', 'name' => 'ラベル', 'weight' => '1', 'is_systemized' => '0', 'is_input' => '0', 'is_user_defined' => '0', ),
			array('language_id' => '2', 'key' => 'text', 'data_type_key' => 'text', 'plugin_key' => '', 'name' => 'テキストボックス', 'weight' => '2', 'is_systemized' => '0', 'is_input' => '1', 'is_user_defined' => '0', ),
			array('language_id' => '2', 'key' => 'textarea', 'data_type_key' => 'textarea', 'plugin_key' => '', 'name' => 'テキストエリア', 'weight' => '3', 'is_systemized' => '0', 'is_input' => '1', 'is_user_defined' => '0', ),
			array('language_id' => '2', 'key' => 'radio', 'data_type_key' => 'radio', 'plugin_key' => '', 'name' => '選択肢（択一）', 'weight' => '4', 'is_systemized' => '0', 'is_input' => '1', 'is_user_defined' => '0', ),
			array('language_id' => '2', 'key' => 'checkbox', 'data_type_key' => 'checkbox', 'plugin_key' => '', 'name' => '選択肢（複数）', 'weight' => '5', 'is_systemized' => '0', 'is_input' => '1', 'is_user_defined' => '0', ),
			array('language_id' => '2', 'key' => 'select', 'data_type_key' => 'select', 'plugin_key' => '', 'name' => 'リストボックス', 'weight' => '6', 'is_systemized' => '0', 'is_input' => '1', 'is_user_defined' => '0', ),
			array('language_id' => '2', 'key' => 'multiple_select', 'data_type_key' => 'multiple_select', 'plugin_key' => '', 'name' => '複数リストボックス', 'weight' => '7', 'is_systemized' => '0', 'is_input' => '1', 'is_user_defined' => '0', ),
			array('language_id' => '2', 'key' => 'input_key', 'data_type_key' => 'password', 'plugin_key' => '', 'name' => '入力キー', 'weight' => '8', 'is_systemized' => '0', 'is_input' => '1', 'is_user_defined' => '0', ),
			array('language_id' => '2', 'key' => 'email', 'data_type_key' => 'email', 'plugin_key' => '', 'name' => 'eメール', 'weight' => '9', 'is_systemized' => '0', 'is_input' => '1', 'is_user_defined' => '0', ),
			array('language_id' => '2', 'key' => 'img', 'data_type_key' => 'img', 'plugin_key' => '', 'name' => '画像', 'weight' => '10', 'is_systemized' => '0', 'is_input' => '1', 'is_user_defined' => '0', ),
			array('language_id' => '2', 'key' => 'file', 'data_type_key' => 'file', 'plugin_key' => '', 'name' => 'ファイル', 'weight' => '11', 'is_systemized' => '0', 'is_input' => '1', 'is_user_defined' => '0', ),
			array('language_id' => '2', 'key' => 'date', 'data_type_key' => 'date', 'plugin_key' => '', 'name' => '日付', 'weight' => '12', 'is_systemized' => '0', 'is_input' => '1', 'is_user_defined' => '0', ),
			array('language_id' => '2', 'key' => 'time', 'data_type_key' => 'time', 'plugin_key' => '', 'name' => '時刻', 'weight' => '13', 'is_systemized' => '0', 'is_input' => '1', 'is_user_defined' => '0', ),
			array('language_id' => '2', 'key' => 'datetime', 'data_type_key' => 'datetime', 'plugin_key' => '', 'name' => '日時', 'weight' => '14', 'is_systemized' => '0', 'is_input' => '1', 'is_user_defined' => '0', ),
			array('language_id' => '2', 'key' => 'wysiwyg', 'data_type_key' => 'wysiwyg', 'plugin_key' => '', 'name' => 'WYSIWYG', 'weight' => '15', 'is_systemized' => '0', 'is_input' => '1', 'is_user_defined' => '0', ),
			array('language_id' => '2', 'key' => 'timezone', 'data_type_key' => 'select', 'plugin_key' => '', 'name' => 'タイムゾーン', 'weight' => '16', 'is_systemized' => '0', 'is_input' => '1', 'is_user_defined' => '0', ),
			array('language_id' => '2', 'key' => 'refecture_radio', 'data_type_key' => 'radio', 'plugin_key' => '', 'name' => '都道府県（単一）', 'weight' => '17', 'is_systemized' => '0', 'is_input' => '1', 'is_user_defined' => '0', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox', 'data_type_key' => 'checkbox', 'plugin_key' => '', 'name' => '都道府県（複数）', 'weight' => '18', 'is_systemized' => '0', 'is_input' => '1', 'is_user_defined' => '0', ),
			array('language_id' => '2', 'key' => 'refecture_select', 'data_type_key' => 'select', 'plugin_key' => '', 'name' => '都道府県（リスト）', 'weight' => '19', 'is_systemized' => '0', 'is_input' => '1', 'is_user_defined' => '0', ),
			array('language_id' => '2', 'key' => 'created', 'data_type_key' => 'datetime', 'plugin_key' => '', 'name' => '作成日時', 'weight' => '1', 'is_systemized' => '1', 'is_input' => '0', 'is_user_defined' => '0', ),
			array('language_id' => '2', 'key' => 'created_user', 'data_type_key' => 'text', 'plugin_key' => '', 'name' => '作成者', 'weight' => '2', 'is_systemized' => '1', 'is_input' => '0', 'is_user_defined' => '0', ),
			array('language_id' => '2', 'key' => 'modified', 'data_type_key' => 'datetime', 'plugin_key' => '', 'name' => '更新日時', 'weight' => '3', 'is_systemized' => '1', 'is_input' => '0', 'is_user_defined' => '0', ),
			array('language_id' => '2', 'key' => 'modified_user', 'data_type_key' => 'text', 'plugin_key' => '', 'name' => '更新者', 'weight' => '4', 'is_systemized' => '1', 'is_input' => '0', 'is_user_defined' => '0', ),
			array('language_id' => '2', 'key' => 'username', 'data_type_key' => 'text', 'plugin_key' => 'users', 'name' => 'ログインID', 'weight' => '5', 'is_systemized' => '1', 'is_input' => '1', 'is_user_defined' => '1', ),
			array('language_id' => '2', 'key' => 'password', 'data_type_key' => 'password', 'plugin_key' => 'users', 'name' => 'パスワード', 'weight' => '6', 'is_systemized' => '1', 'is_input' => '1', 'is_user_defined' => '1', ),
			array('language_id' => '2', 'key' => 'handle', 'data_type_key' => 'text', 'plugin_key' => 'users', 'name' => 'ハンドル', 'weight' => '7', 'is_systemized' => '1', 'is_input' => '1', 'is_user_defined' => '1', ),
			array('language_id' => '2', 'key' => 'name', 'data_type_key' => 'text', 'plugin_key' => 'users', 'name' => '氏名', 'weight' => '8', 'is_systemized' => '1', 'is_input' => '1', 'is_user_defined' => '1', ),
			array('language_id' => '2', 'key' => 'identifier', 'data_type_key' => 'text', 'plugin_key' => 'users', 'name' => 'リンク識別子', 'weight' => '9', 'is_systemized' => '1', 'is_input' => '1', 'is_user_defined' => '1', ),
			array('language_id' => '2', 'key' => 'role_key', 'data_type_key' => 'select', 'plugin_key' => 'users', 'name' => '権限', 'weight' => '10', 'is_systemized' => '1', 'is_input' => '1', 'is_user_defined' => '1', ),
			array('language_id' => '2', 'key' => 'status', 'data_type_key' => 'select', 'plugin_key' => 'users', 'name' => '状態', 'weight' => '11', 'is_systemized' => '1', 'is_input' => '1', 'is_user_defined' => '1', ),
			array('language_id' => '2', 'key' => 'password_modified', 'data_type_key' => 'datetime', 'plugin_key' => 'users', 'name' => 'パスワード変更日時', 'weight' => '12', 'is_systemized' => '1', 'is_input' => '0', 'is_user_defined' => '1', ),
			array('language_id' => '2', 'key' => 'last_login', 'data_type_key' => 'datetime', 'plugin_key' => 'users', 'name' => '最終ログイン日時', 'weight' => '13', 'is_systemized' => '1', 'is_input' => '0', 'is_user_defined' => '1', ),
			array('language_id' => '2', 'key' => 'previous_login', 'data_type_key' => 'datetime', 'plugin_key' => 'users', 'name' => '前回ログイン日時', 'weight' => '14', 'is_systemized' => '1', 'is_input' => '0', 'is_user_defined' => '1', ),
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
