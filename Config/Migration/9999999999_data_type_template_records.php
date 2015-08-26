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
			//日本語
			array('language_id' => '2', 'key' => 'label', 'data_type_key' => 'label', 'name' => 'ラベル', 'weight' => '1', 'is_systemized' => '0', 'is_inputtable' => '0', ),
			array('language_id' => '2', 'key' => 'text', 'data_type_key' => 'text', 'name' => 'テキストボックス', 'weight' => '2', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '2', 'key' => 'textarea', 'data_type_key' => 'textarea', 'name' => 'テキストエリア', 'weight' => '3', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '2', 'key' => 'radio', 'data_type_key' => 'radio', 'name' => 'ラジオボタン', 'weight' => '4', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '2', 'key' => 'checkbox', 'data_type_key' => 'checkbox', 'name' => 'チェックボックス', 'weight' => '5', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '2', 'key' => 'select', 'data_type_key' => 'select', 'name' => 'セレクトボックス', 'weight' => '6', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '2', 'key' => 'multiple_select', 'data_type_key' => 'multiple_select', 'name' => '複数セレクトボックス', 'weight' => '7', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '2', 'key' => 'password', 'data_type_key' => 'password', 'name' => 'パスワード', 'weight' => '8', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '2', 'key' => 'input_key', 'data_type_key' => 'password', 'name' => '入力キー', 'weight' => '9', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '2', 'key' => 'email', 'data_type_key' => 'email', 'name' => 'eメール', 'weight' => '10', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '2', 'key' => 'img', 'data_type_key' => 'img', 'name' => '画像', 'weight' => '11', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '2', 'key' => 'file', 'data_type_key' => 'file', 'name' => 'ファイル', 'weight' => '12', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '2', 'key' => 'date', 'data_type_key' => 'date', 'name' => '日付', 'weight' => '13', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '2', 'key' => 'time', 'data_type_key' => 'time', 'name' => '時間', 'weight' => '14', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '2', 'key' => 'datetime', 'data_type_key' => 'datetime', 'name' => '日時', 'weight' => '15', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '2', 'key' => 'wysiwyg', 'data_type_key' => 'wysiwyg', 'name' => 'WYSIWYG', 'weight' => '16', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '2', 'key' => 'timezone', 'data_type_key' => 'select', 'name' => 'タイムゾーン', 'weight' => '17', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '2', 'key' => 'created', 'data_type_key' => 'datetime', 'name' => '作成日時', 'weight' => '18', 'is_systemized' => '1', 'is_inputtable' => '0', ),
			array('language_id' => '2', 'key' => 'created_user', 'data_type_key' => 'label', 'name' => '作成者', 'weight' => '19', 'is_systemized' => '1', 'is_inputtable' => '0', ),
			array('language_id' => '2', 'key' => 'modified', 'data_type_key' => 'datetime', 'name' => '更新日時', 'weight' => '20', 'is_systemized' => '1', 'is_inputtable' => '0', ),
			array('language_id' => '2', 'key' => 'modified_user', 'data_type_key' => 'label', 'name' => '更新者', 'weight' => '21', 'is_systemized' => '1', 'is_inputtable' => '0', ),
			array('language_id' => '2', 'key' => 'refecture_radio', 'data_type_key' => 'radio', 'name' => '都道府県（ラジオ）', 'weight' => '22', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox', 'data_type_key' => 'checkbox', 'name' => '都道府県（チェックボックス）', 'weight' => '23', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '2', 'key' => 'refecture_select', 'data_type_key' => 'select', 'name' => '都道府県（セレクトボックス）', 'weight' => '24', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			//英語
			array('language_id' => '1', 'key' => 'label', 'data_type_key' => 'label', 'name' => 'Label', 'weight' => '1', 'is_systemized' => '0', 'is_inputtable' => '0', ),
			array('language_id' => '1', 'key' => 'text', 'data_type_key' => 'text', 'name' => 'Text', 'weight' => '2', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '1', 'key' => 'textarea', 'data_type_key' => 'textarea', 'name' => 'Textarea', 'weight' => '3', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '1', 'key' => 'radio', 'data_type_key' => 'radio', 'name' => 'Radio', 'weight' => '4', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '1', 'key' => 'checkbox', 'data_type_key' => 'checkbox', 'name' => 'Checkbox', 'weight' => '5', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '1', 'key' => 'select', 'data_type_key' => 'select', 'name' => 'Select', 'weight' => '6', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '1', 'key' => 'multiple_select', 'data_type_key' => 'multiple_select', 'name' => 'Multiple select', 'weight' => '7', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '1', 'key' => 'password', 'data_type_key' => 'password', 'name' => 'Password', 'weight' => '8', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '1', 'key' => 'input_key', 'data_type_key' => 'password', 'name' => 'Input key', 'weight' => '9', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '1', 'key' => 'email', 'data_type_key' => 'email', 'name' => 'E-mail', 'weight' => '10', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '1', 'key' => 'img', 'data_type_key' => 'img', 'name' => 'Picture', 'weight' => '11', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '1', 'key' => 'file', 'data_type_key' => 'file', 'name' => 'Attachment file', 'weight' => '12', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '1', 'key' => 'date', 'data_type_key' => 'date', 'name' => 'Date', 'weight' => '13', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '1', 'key' => 'time', 'data_type_key' => 'time', 'name' => 'Time', 'weight' => '14', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '1', 'key' => 'datetime', 'data_type_key' => 'datetime', 'name' => 'Date time', 'weight' => '15', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '1', 'key' => 'wysiwyg', 'data_type_key' => 'wysiwyg', 'name' => 'WYSIWYG', 'weight' => '16', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '1', 'key' => 'timezone', 'data_type_key' => 'select', 'name' => 'Timezone', 'weight' => '17', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '1', 'key' => 'created', 'data_type_key' => 'datetime', 'name' => 'Created', 'weight' => '18', 'is_systemized' => '1', 'is_inputtable' => '0', ),
			array('language_id' => '1', 'key' => 'created_user', 'data_type_key' => 'label', 'name' => 'Creator', 'weight' => '19', 'is_systemized' => '1', 'is_inputtable' => '0', ),
			array('language_id' => '1', 'key' => 'modified', 'data_type_key' => 'datetime', 'name' => 'Last modified', 'weight' => '20', 'is_systemized' => '1', 'is_inputtable' => '0', ),
			array('language_id' => '1', 'key' => 'modified_user', 'data_type_key' => 'label', 'name' => 'Updater', 'weight' => '21', 'is_systemized' => '1', 'is_inputtable' => '0', ),
			array('language_id' => '1', 'key' => 'refecture_radio', 'data_type_key' => 'radio', 'name' => 'Refecture(radio)', 'weight' => '22', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '1', 'key' => 'refecture_checkbox', 'data_type_key' => 'checkbox', 'name' => 'Refecture(checkbox)', 'weight' => '23', 'is_systemized' => '0', 'is_inputtable' => '1', ),
			array('language_id' => '1', 'key' => 'refecture_select', 'data_type_key' => 'select', 'name' => 'Refecture(select)', 'weight' => '24', 'is_systemized' => '0', 'is_inputtable' => '1', ),
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
