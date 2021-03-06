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
class DataTypesRecords extends NetCommonsMigration {

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
			array('language_id' => '2', 'key' => 'prefecture', 'name' => '都道府県', 'weight' => '16', ),
			array('language_id' => '2', 'key' => 'timezone', 'name' => 'タイムゾーン', 'weight' => '17', ),
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
			array('language_id' => '1', 'key' => 'prefecture', 'name' => 'Prefecture', 'weight' => '16', ),
			array('language_id' => '1', 'key' => 'timezone', 'name' => 'Time zone', 'weight' => '17', ),
		),
		'DataTypeChoice' => array(
			//日本語--都道府県
			array('language_id' => '2', 'key' => 'prefecture_01', 'data_type_key' => 'prefecture', 'name' => '北海道', 'code' => '01', 'weight' => '1', ),
			array('language_id' => '2', 'key' => 'prefecture_02', 'data_type_key' => 'prefecture', 'name' => '青森県', 'code' => '02', 'weight' => '2', ),
			array('language_id' => '2', 'key' => 'prefecture_03', 'data_type_key' => 'prefecture', 'name' => '岩手県', 'code' => '03', 'weight' => '3', ),
			array('language_id' => '2', 'key' => 'prefecture_04', 'data_type_key' => 'prefecture', 'name' => '宮城県', 'code' => '04', 'weight' => '4', ),
			array('language_id' => '2', 'key' => 'prefecture_05', 'data_type_key' => 'prefecture', 'name' => '秋田県', 'code' => '05', 'weight' => '5', ),
			array('language_id' => '2', 'key' => 'prefecture_06', 'data_type_key' => 'prefecture', 'name' => '山形県', 'code' => '06', 'weight' => '6', ),
			array('language_id' => '2', 'key' => 'prefecture_07', 'data_type_key' => 'prefecture', 'name' => '福島県', 'code' => '07', 'weight' => '7', ),
			array('language_id' => '2', 'key' => 'prefecture_08', 'data_type_key' => 'prefecture', 'name' => '茨城県', 'code' => '08', 'weight' => '8', ),
			array('language_id' => '2', 'key' => 'prefecture_09', 'data_type_key' => 'prefecture', 'name' => '栃木県', 'code' => '09', 'weight' => '9', ),
			array('language_id' => '2', 'key' => 'prefecture_10', 'data_type_key' => 'prefecture', 'name' => '群馬県', 'code' => '10', 'weight' => '10', ),
			array('language_id' => '2', 'key' => 'prefecture_11', 'data_type_key' => 'prefecture', 'name' => '埼玉県', 'code' => '11', 'weight' => '11', ),
			array('language_id' => '2', 'key' => 'prefecture_12', 'data_type_key' => 'prefecture', 'name' => '千葉県', 'code' => '12', 'weight' => '12', ),
			array('language_id' => '2', 'key' => 'prefecture_13', 'data_type_key' => 'prefecture', 'name' => '東京都', 'code' => '13', 'weight' => '13', ),
			array('language_id' => '2', 'key' => 'prefecture_14', 'data_type_key' => 'prefecture', 'name' => '神奈川県', 'code' => '14', 'weight' => '14', ),
			array('language_id' => '2', 'key' => 'prefecture_15', 'data_type_key' => 'prefecture', 'name' => '新潟県', 'code' => '15', 'weight' => '15', ),
			array('language_id' => '2', 'key' => 'prefecture_16', 'data_type_key' => 'prefecture', 'name' => '富山県', 'code' => '16', 'weight' => '16', ),
			array('language_id' => '2', 'key' => 'prefecture_17', 'data_type_key' => 'prefecture', 'name' => '石川県', 'code' => '17', 'weight' => '17', ),
			array('language_id' => '2', 'key' => 'prefecture_18', 'data_type_key' => 'prefecture', 'name' => '福井県', 'code' => '18', 'weight' => '18', ),
			array('language_id' => '2', 'key' => 'prefecture_19', 'data_type_key' => 'prefecture', 'name' => '山梨県', 'code' => '19', 'weight' => '19', ),
			array('language_id' => '2', 'key' => 'prefecture_20', 'data_type_key' => 'prefecture', 'name' => '長野県', 'code' => '20', 'weight' => '20', ),
			array('language_id' => '2', 'key' => 'prefecture_21', 'data_type_key' => 'prefecture', 'name' => '岐阜県', 'code' => '21', 'weight' => '21', ),
			array('language_id' => '2', 'key' => 'prefecture_22', 'data_type_key' => 'prefecture', 'name' => '静岡県', 'code' => '22', 'weight' => '22', ),
			array('language_id' => '2', 'key' => 'prefecture_23', 'data_type_key' => 'prefecture', 'name' => '愛知県', 'code' => '23', 'weight' => '23', ),
			array('language_id' => '2', 'key' => 'prefecture_24', 'data_type_key' => 'prefecture', 'name' => '三重県', 'code' => '24', 'weight' => '24', ),
			array('language_id' => '2', 'key' => 'prefecture_25', 'data_type_key' => 'prefecture', 'name' => '滋賀県', 'code' => '25', 'weight' => '25', ),
			array('language_id' => '2', 'key' => 'prefecture_26', 'data_type_key' => 'prefecture', 'name' => '京都府', 'code' => '26', 'weight' => '26', ),
			array('language_id' => '2', 'key' => 'prefecture_27', 'data_type_key' => 'prefecture', 'name' => '大阪府', 'code' => '27', 'weight' => '27', ),
			array('language_id' => '2', 'key' => 'prefecture_28', 'data_type_key' => 'prefecture', 'name' => '兵庫県', 'code' => '28', 'weight' => '28', ),
			array('language_id' => '2', 'key' => 'prefecture_29', 'data_type_key' => 'prefecture', 'name' => '奈良県', 'code' => '29', 'weight' => '29', ),
			array('language_id' => '2', 'key' => 'prefecture_30', 'data_type_key' => 'prefecture', 'name' => '和歌山県', 'code' => '30', 'weight' => '30', ),
			array('language_id' => '2', 'key' => 'prefecture_31', 'data_type_key' => 'prefecture', 'name' => '鳥取県', 'code' => '31', 'weight' => '31', ),
			array('language_id' => '2', 'key' => 'prefecture_32', 'data_type_key' => 'prefecture', 'name' => '島根県', 'code' => '32', 'weight' => '32', ),
			array('language_id' => '2', 'key' => 'prefecture_33', 'data_type_key' => 'prefecture', 'name' => '岡山県', 'code' => '33', 'weight' => '33', ),
			array('language_id' => '2', 'key' => 'prefecture_34', 'data_type_key' => 'prefecture', 'name' => '広島県', 'code' => '34', 'weight' => '34', ),
			array('language_id' => '2', 'key' => 'prefecture_35', 'data_type_key' => 'prefecture', 'name' => '山口県', 'code' => '35', 'weight' => '35', ),
			array('language_id' => '2', 'key' => 'prefecture_36', 'data_type_key' => 'prefecture', 'name' => '徳島県', 'code' => '36', 'weight' => '36', ),
			array('language_id' => '2', 'key' => 'prefecture_37', 'data_type_key' => 'prefecture', 'name' => '香川県', 'code' => '37', 'weight' => '37', ),
			array('language_id' => '2', 'key' => 'prefecture_38', 'data_type_key' => 'prefecture', 'name' => '愛媛県', 'code' => '38', 'weight' => '38', ),
			array('language_id' => '2', 'key' => 'prefecture_39', 'data_type_key' => 'prefecture', 'name' => '高知県', 'code' => '39', 'weight' => '39', ),
			array('language_id' => '2', 'key' => 'prefecture_40', 'data_type_key' => 'prefecture', 'name' => '福岡県', 'code' => '40', 'weight' => '40', ),
			array('language_id' => '2', 'key' => 'prefecture_41', 'data_type_key' => 'prefecture', 'name' => '佐賀県', 'code' => '41', 'weight' => '41', ),
			array('language_id' => '2', 'key' => 'prefecture_42', 'data_type_key' => 'prefecture', 'name' => '長崎県', 'code' => '42', 'weight' => '42', ),
			array('language_id' => '2', 'key' => 'prefecture_43', 'data_type_key' => 'prefecture', 'name' => '熊本県', 'code' => '43', 'weight' => '43', ),
			array('language_id' => '2', 'key' => 'prefecture_44', 'data_type_key' => 'prefecture', 'name' => '大分県', 'code' => '44', 'weight' => '44', ),
			array('language_id' => '2', 'key' => 'prefecture_45', 'data_type_key' => 'prefecture', 'name' => '宮崎県', 'code' => '45', 'weight' => '45', ),
			array('language_id' => '2', 'key' => 'prefecture_46', 'data_type_key' => 'prefecture', 'name' => '鹿児島県', 'code' => '46', 'weight' => '46', ),
			array('language_id' => '2', 'key' => 'prefecture_47', 'data_type_key' => 'prefecture', 'name' => '沖縄県', 'code' => '47', 'weight' => '47', ),
			//英語--都道府県
			array('language_id' => '1', 'key' => 'prefecture_01', 'data_type_key' => 'prefecture', 'name' => 'Hokkaido', 'code' => '01', 'weight' => '1', ),
			array('language_id' => '1', 'key' => 'prefecture_02', 'data_type_key' => 'prefecture', 'name' => 'Aomori', 'code' => '02', 'weight' => '2', ),
			array('language_id' => '1', 'key' => 'prefecture_03', 'data_type_key' => 'prefecture', 'name' => 'Iwate', 'code' => '03', 'weight' => '3', ),
			array('language_id' => '1', 'key' => 'prefecture_04', 'data_type_key' => 'prefecture', 'name' => 'Miyagi', 'code' => '04', 'weight' => '4', ),
			array('language_id' => '1', 'key' => 'prefecture_05', 'data_type_key' => 'prefecture', 'name' => 'Akita', 'code' => '05', 'weight' => '5', ),
			array('language_id' => '1', 'key' => 'prefecture_06', 'data_type_key' => 'prefecture', 'name' => 'Yamagata', 'code' => '06', 'weight' => '6', ),
			array('language_id' => '1', 'key' => 'prefecture_07', 'data_type_key' => 'prefecture', 'name' => 'Fukushima', 'code' => '07', 'weight' => '7', ),
			array('language_id' => '1', 'key' => 'prefecture_08', 'data_type_key' => 'prefecture', 'name' => 'Ibaraki', 'code' => '08', 'weight' => '8', ),
			array('language_id' => '1', 'key' => 'prefecture_09', 'data_type_key' => 'prefecture', 'name' => 'Tochigi', 'code' => '09', 'weight' => '9', ),
			array('language_id' => '1', 'key' => 'prefecture_10', 'data_type_key' => 'prefecture', 'name' => 'Gunma', 'code' => '10', 'weight' => '10', ),
			array('language_id' => '1', 'key' => 'prefecture_11', 'data_type_key' => 'prefecture', 'name' => 'Saitama', 'code' => '11', 'weight' => '11', ),
			array('language_id' => '1', 'key' => 'prefecture_12', 'data_type_key' => 'prefecture', 'name' => 'Chiba', 'code' => '12', 'weight' => '12', ),
			array('language_id' => '1', 'key' => 'prefecture_13', 'data_type_key' => 'prefecture', 'name' => 'Tokyo', 'code' => '13', 'weight' => '13', ),
			array('language_id' => '1', 'key' => 'prefecture_14', 'data_type_key' => 'prefecture', 'name' => 'Kanagawa', 'code' => '14', 'weight' => '14', ),
			array('language_id' => '1', 'key' => 'prefecture_15', 'data_type_key' => 'prefecture', 'name' => 'Niigata', 'code' => '15', 'weight' => '15', ),
			array('language_id' => '1', 'key' => 'prefecture_16', 'data_type_key' => 'prefecture', 'name' => 'Toyama', 'code' => '16', 'weight' => '16', ),
			array('language_id' => '1', 'key' => 'prefecture_17', 'data_type_key' => 'prefecture', 'name' => 'Ishikawa', 'code' => '17', 'weight' => '17', ),
			array('language_id' => '1', 'key' => 'prefecture_18', 'data_type_key' => 'prefecture', 'name' => 'Fukui', 'code' => '18', 'weight' => '18', ),
			array('language_id' => '1', 'key' => 'prefecture_19', 'data_type_key' => 'prefecture', 'name' => 'Yamanashi', 'code' => '19', 'weight' => '19', ),
			array('language_id' => '1', 'key' => 'prefecture_20', 'data_type_key' => 'prefecture', 'name' => 'Nagano', 'code' => '20', 'weight' => '20', ),
			array('language_id' => '1', 'key' => 'prefecture_21', 'data_type_key' => 'prefecture', 'name' => 'Gifu', 'code' => '21', 'weight' => '21', ),
			array('language_id' => '1', 'key' => 'prefecture_22', 'data_type_key' => 'prefecture', 'name' => 'Shizuoka', 'code' => '22', 'weight' => '22', ),
			array('language_id' => '1', 'key' => 'prefecture_23', 'data_type_key' => 'prefecture', 'name' => 'Aichi', 'code' => '23', 'weight' => '23', ),
			array('language_id' => '1', 'key' => 'prefecture_24', 'data_type_key' => 'prefecture', 'name' => 'Mie', 'code' => '24', 'weight' => '24', ),
			array('language_id' => '1', 'key' => 'prefecture_25', 'data_type_key' => 'prefecture', 'name' => 'Shiga', 'code' => '25', 'weight' => '25', ),
			array('language_id' => '1', 'key' => 'prefecture_26', 'data_type_key' => 'prefecture', 'name' => 'Kyoto', 'code' => '26', 'weight' => '26', ),
			array('language_id' => '1', 'key' => 'prefecture_27', 'data_type_key' => 'prefecture', 'name' => 'Osaka', 'code' => '27', 'weight' => '27', ),
			array('language_id' => '1', 'key' => 'prefecture_28', 'data_type_key' => 'prefecture', 'name' => 'Hyogo', 'code' => '28', 'weight' => '28', ),
			array('language_id' => '1', 'key' => 'prefecture_29', 'data_type_key' => 'prefecture', 'name' => 'Nara', 'code' => '29', 'weight' => '29', ),
			array('language_id' => '1', 'key' => 'prefecture_30', 'data_type_key' => 'prefecture', 'name' => 'Wakayama', 'code' => '30', 'weight' => '30', ),
			array('language_id' => '1', 'key' => 'prefecture_31', 'data_type_key' => 'prefecture', 'name' => 'Tottori', 'code' => '31', 'weight' => '31', ),
			array('language_id' => '1', 'key' => 'prefecture_32', 'data_type_key' => 'prefecture', 'name' => 'Shimane', 'code' => '32', 'weight' => '32', ),
			array('language_id' => '1', 'key' => 'prefecture_33', 'data_type_key' => 'prefecture', 'name' => 'Okayama', 'code' => '33', 'weight' => '33', ),
			array('language_id' => '1', 'key' => 'prefecture_34', 'data_type_key' => 'prefecture', 'name' => 'Hiroshima', 'code' => '34', 'weight' => '34', ),
			array('language_id' => '1', 'key' => 'prefecture_35', 'data_type_key' => 'prefecture', 'name' => 'Yamaguchi', 'code' => '35', 'weight' => '35', ),
			array('language_id' => '1', 'key' => 'prefecture_36', 'data_type_key' => 'prefecture', 'name' => 'Tokushima', 'code' => '36', 'weight' => '36', ),
			array('language_id' => '1', 'key' => 'prefecture_37', 'data_type_key' => 'prefecture', 'name' => 'Kagawa', 'code' => '37', 'weight' => '37', ),
			array('language_id' => '1', 'key' => 'prefecture_38', 'data_type_key' => 'prefecture', 'name' => 'Ehime', 'code' => '38', 'weight' => '38', ),
			array('language_id' => '1', 'key' => 'prefecture_39', 'data_type_key' => 'prefecture', 'name' => 'Kochi', 'code' => '39', 'weight' => '39', ),
			array('language_id' => '1', 'key' => 'prefecture_40', 'data_type_key' => 'prefecture', 'name' => 'Fukuoka', 'code' => '40', 'weight' => '40', ),
			array('language_id' => '1', 'key' => 'prefecture_41', 'data_type_key' => 'prefecture', 'name' => 'Saga', 'code' => '41', 'weight' => '41', ),
			array('language_id' => '1', 'key' => 'prefecture_42', 'data_type_key' => 'prefecture', 'name' => 'Nagasaki', 'code' => '42', 'weight' => '42', ),
			array('language_id' => '1', 'key' => 'prefecture_43', 'data_type_key' => 'prefecture', 'name' => 'Kumamoto', 'code' => '43', 'weight' => '43', ),
			array('language_id' => '1', 'key' => 'prefecture_44', 'data_type_key' => 'prefecture', 'name' => 'Oita', 'code' => '44', 'weight' => '44', ),
			array('language_id' => '1', 'key' => 'prefecture_45', 'data_type_key' => 'prefecture', 'name' => 'Miyazaki', 'code' => '45', 'weight' => '45', ),
			array('language_id' => '1', 'key' => 'prefecture_46', 'data_type_key' => 'prefecture', 'name' => 'Kagoshima', 'code' => '46', 'weight' => '46', ),
			array('language_id' => '1', 'key' => 'prefecture_47', 'data_type_key' => 'prefecture', 'name' => 'Okinawa', 'code' => '47', 'weight' => '47', ),
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
		$DataType = $this->generateModel('DataType');
		if ($DataType->find('count') > 0) {
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
