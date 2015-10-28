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
class DataTypeChoiceRecords extends NetCommonsMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'data_type_choice_records';

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
		'DataTypeChoice' => array(
			//日本語--都道府県
			array('language_id' => '2', 'key' => 'refecture_01', 'data_type_key' => 'refecture', 'name' => '北海道', 'code' => '01', 'weight' => '1', ),
			array('language_id' => '2', 'key' => 'refecture_02', 'data_type_key' => 'refecture', 'name' => '青森県', 'code' => '02', 'weight' => '2', ),
			array('language_id' => '2', 'key' => 'refecture_03', 'data_type_key' => 'refecture', 'name' => '岩手県', 'code' => '03', 'weight' => '3', ),
			array('language_id' => '2', 'key' => 'refecture_04', 'data_type_key' => 'refecture', 'name' => '宮城県', 'code' => '04', 'weight' => '4', ),
			array('language_id' => '2', 'key' => 'refecture_05', 'data_type_key' => 'refecture', 'name' => '秋田県', 'code' => '05', 'weight' => '5', ),
			array('language_id' => '2', 'key' => 'refecture_06', 'data_type_key' => 'refecture', 'name' => '山形県', 'code' => '06', 'weight' => '6', ),
			array('language_id' => '2', 'key' => 'refecture_07', 'data_type_key' => 'refecture', 'name' => '福島県', 'code' => '07', 'weight' => '7', ),
			array('language_id' => '2', 'key' => 'refecture_08', 'data_type_key' => 'refecture', 'name' => '茨城県', 'code' => '08', 'weight' => '8', ),
			array('language_id' => '2', 'key' => 'refecture_09', 'data_type_key' => 'refecture', 'name' => '栃木県', 'code' => '09', 'weight' => '9', ),
			array('language_id' => '2', 'key' => 'refecture_10', 'data_type_key' => 'refecture', 'name' => '群馬県', 'code' => '10', 'weight' => '10', ),
			array('language_id' => '2', 'key' => 'refecture_11', 'data_type_key' => 'refecture', 'name' => '埼玉県', 'code' => '11', 'weight' => '11', ),
			array('language_id' => '2', 'key' => 'refecture_12', 'data_type_key' => 'refecture', 'name' => '千葉県', 'code' => '12', 'weight' => '12', ),
			array('language_id' => '2', 'key' => 'refecture_13', 'data_type_key' => 'refecture', 'name' => '東京都', 'code' => '13', 'weight' => '13', ),
			array('language_id' => '2', 'key' => 'refecture_14', 'data_type_key' => 'refecture', 'name' => '神奈川県', 'code' => '14', 'weight' => '14', ),
			array('language_id' => '2', 'key' => 'refecture_15', 'data_type_key' => 'refecture', 'name' => '新潟県', 'code' => '15', 'weight' => '15', ),
			array('language_id' => '2', 'key' => 'refecture_16', 'data_type_key' => 'refecture', 'name' => '富山県', 'code' => '16', 'weight' => '16', ),
			array('language_id' => '2', 'key' => 'refecture_17', 'data_type_key' => 'refecture', 'name' => '石川県', 'code' => '17', 'weight' => '17', ),
			array('language_id' => '2', 'key' => 'refecture_18', 'data_type_key' => 'refecture', 'name' => '福井県', 'code' => '18', 'weight' => '18', ),
			array('language_id' => '2', 'key' => 'refecture_19', 'data_type_key' => 'refecture', 'name' => '山梨県', 'code' => '19', 'weight' => '19', ),
			array('language_id' => '2', 'key' => 'refecture_20', 'data_type_key' => 'refecture', 'name' => '長野県', 'code' => '20', 'weight' => '20', ),
			array('language_id' => '2', 'key' => 'refecture_21', 'data_type_key' => 'refecture', 'name' => '岐阜県', 'code' => '21', 'weight' => '21', ),
			array('language_id' => '2', 'key' => 'refecture_22', 'data_type_key' => 'refecture', 'name' => '静岡県', 'code' => '22', 'weight' => '22', ),
			array('language_id' => '2', 'key' => 'refecture_23', 'data_type_key' => 'refecture', 'name' => '愛知県', 'code' => '23', 'weight' => '23', ),
			array('language_id' => '2', 'key' => 'refecture_24', 'data_type_key' => 'refecture', 'name' => '三重県', 'code' => '24', 'weight' => '24', ),
			array('language_id' => '2', 'key' => 'refecture_25', 'data_type_key' => 'refecture', 'name' => '滋賀県', 'code' => '25', 'weight' => '25', ),
			array('language_id' => '2', 'key' => 'refecture_26', 'data_type_key' => 'refecture', 'name' => '京都府', 'code' => '26', 'weight' => '26', ),
			array('language_id' => '2', 'key' => 'refecture_27', 'data_type_key' => 'refecture', 'name' => '大阪府', 'code' => '27', 'weight' => '27', ),
			array('language_id' => '2', 'key' => 'refecture_28', 'data_type_key' => 'refecture', 'name' => '兵庫県', 'code' => '28', 'weight' => '28', ),
			array('language_id' => '2', 'key' => 'refecture_29', 'data_type_key' => 'refecture', 'name' => '奈良県', 'code' => '29', 'weight' => '29', ),
			array('language_id' => '2', 'key' => 'refecture_30', 'data_type_key' => 'refecture', 'name' => '和歌山県', 'code' => '30', 'weight' => '30', ),
			array('language_id' => '2', 'key' => 'refecture_31', 'data_type_key' => 'refecture', 'name' => '鳥取県', 'code' => '31', 'weight' => '31', ),
			array('language_id' => '2', 'key' => 'refecture_32', 'data_type_key' => 'refecture', 'name' => '島根県', 'code' => '32', 'weight' => '32', ),
			array('language_id' => '2', 'key' => 'refecture_33', 'data_type_key' => 'refecture', 'name' => '岡山県', 'code' => '33', 'weight' => '33', ),
			array('language_id' => '2', 'key' => 'refecture_34', 'data_type_key' => 'refecture', 'name' => '広島県', 'code' => '34', 'weight' => '34', ),
			array('language_id' => '2', 'key' => 'refecture_35', 'data_type_key' => 'refecture', 'name' => '山口県', 'code' => '35', 'weight' => '35', ),
			array('language_id' => '2', 'key' => 'refecture_36', 'data_type_key' => 'refecture', 'name' => '徳島県', 'code' => '36', 'weight' => '36', ),
			array('language_id' => '2', 'key' => 'refecture_37', 'data_type_key' => 'refecture', 'name' => '香川県', 'code' => '37', 'weight' => '37', ),
			array('language_id' => '2', 'key' => 'refecture_38', 'data_type_key' => 'refecture', 'name' => '愛媛県', 'code' => '38', 'weight' => '38', ),
			array('language_id' => '2', 'key' => 'refecture_39', 'data_type_key' => 'refecture', 'name' => '高知県', 'code' => '39', 'weight' => '39', ),
			array('language_id' => '2', 'key' => 'refecture_40', 'data_type_key' => 'refecture', 'name' => '福岡県', 'code' => '40', 'weight' => '40', ),
			array('language_id' => '2', 'key' => 'refecture_41', 'data_type_key' => 'refecture', 'name' => '佐賀県', 'code' => '41', 'weight' => '41', ),
			array('language_id' => '2', 'key' => 'refecture_42', 'data_type_key' => 'refecture', 'name' => '長崎県', 'code' => '42', 'weight' => '42', ),
			array('language_id' => '2', 'key' => 'refecture_43', 'data_type_key' => 'refecture', 'name' => '熊本県', 'code' => '43', 'weight' => '43', ),
			array('language_id' => '2', 'key' => 'refecture_44', 'data_type_key' => 'refecture', 'name' => '大分県', 'code' => '44', 'weight' => '44', ),
			array('language_id' => '2', 'key' => 'refecture_45', 'data_type_key' => 'refecture', 'name' => '宮崎県', 'code' => '45', 'weight' => '45', ),
			array('language_id' => '2', 'key' => 'refecture_46', 'data_type_key' => 'refecture', 'name' => '鹿児島県', 'code' => '46', 'weight' => '46', ),
			array('language_id' => '2', 'key' => 'refecture_47', 'data_type_key' => 'refecture', 'name' => '沖縄県', 'code' => '47', 'weight' => '47', ),
			//英語--都道府県
			array('language_id' => '1', 'key' => 'refecture_01', 'data_type_key' => 'refecture', 'name' => 'Hokkaido', 'code' => '01', 'weight' => '1', ),
			array('language_id' => '1', 'key' => 'refecture_02', 'data_type_key' => 'refecture', 'name' => 'Aomori', 'code' => '02', 'weight' => '2', ),
			array('language_id' => '1', 'key' => 'refecture_03', 'data_type_key' => 'refecture', 'name' => 'Iwate', 'code' => '03', 'weight' => '3', ),
			array('language_id' => '1', 'key' => 'refecture_04', 'data_type_key' => 'refecture', 'name' => 'Miyagi', 'code' => '04', 'weight' => '4', ),
			array('language_id' => '1', 'key' => 'refecture_05', 'data_type_key' => 'refecture', 'name' => 'Akita', 'code' => '05', 'weight' => '5', ),
			array('language_id' => '1', 'key' => 'refecture_06', 'data_type_key' => 'refecture', 'name' => 'Yamagata', 'code' => '06', 'weight' => '6', ),
			array('language_id' => '1', 'key' => 'refecture_07', 'data_type_key' => 'refecture', 'name' => 'Fukushima', 'code' => '07', 'weight' => '7', ),
			array('language_id' => '1', 'key' => 'refecture_08', 'data_type_key' => 'refecture', 'name' => 'Ibaraki', 'code' => '08', 'weight' => '8', ),
			array('language_id' => '1', 'key' => 'refecture_09', 'data_type_key' => 'refecture', 'name' => 'Tochigi', 'code' => '09', 'weight' => '9', ),
			array('language_id' => '1', 'key' => 'refecture_10', 'data_type_key' => 'refecture', 'name' => 'Gunma', 'code' => '10', 'weight' => '10', ),
			array('language_id' => '1', 'key' => 'refecture_11', 'data_type_key' => 'refecture', 'name' => 'Saitama', 'code' => '11', 'weight' => '11', ),
			array('language_id' => '1', 'key' => 'refecture_12', 'data_type_key' => 'refecture', 'name' => 'Chiba', 'code' => '12', 'weight' => '12', ),
			array('language_id' => '1', 'key' => 'refecture_13', 'data_type_key' => 'refecture', 'name' => 'Tokyo', 'code' => '13', 'weight' => '13', ),
			array('language_id' => '1', 'key' => 'refecture_14', 'data_type_key' => 'refecture', 'name' => 'Kanagawa', 'code' => '14', 'weight' => '14', ),
			array('language_id' => '1', 'key' => 'refecture_15', 'data_type_key' => 'refecture', 'name' => 'Niigata', 'code' => '15', 'weight' => '15', ),
			array('language_id' => '1', 'key' => 'refecture_16', 'data_type_key' => 'refecture', 'name' => 'Toyama', 'code' => '16', 'weight' => '16', ),
			array('language_id' => '1', 'key' => 'refecture_17', 'data_type_key' => 'refecture', 'name' => 'Ishikawa', 'code' => '17', 'weight' => '17', ),
			array('language_id' => '1', 'key' => 'refecture_18', 'data_type_key' => 'refecture', 'name' => 'Fukui', 'code' => '18', 'weight' => '18', ),
			array('language_id' => '1', 'key' => 'refecture_19', 'data_type_key' => 'refecture', 'name' => 'Yamanashi', 'code' => '19', 'weight' => '19', ),
			array('language_id' => '1', 'key' => 'refecture_20', 'data_type_key' => 'refecture', 'name' => 'Nagano', 'code' => '20', 'weight' => '20', ),
			array('language_id' => '1', 'key' => 'refecture_21', 'data_type_key' => 'refecture', 'name' => 'Gifu', 'code' => '21', 'weight' => '21', ),
			array('language_id' => '1', 'key' => 'refecture_22', 'data_type_key' => 'refecture', 'name' => 'Shizuoka', 'code' => '22', 'weight' => '22', ),
			array('language_id' => '1', 'key' => 'refecture_23', 'data_type_key' => 'refecture', 'name' => 'Aichi', 'code' => '23', 'weight' => '23', ),
			array('language_id' => '1', 'key' => 'refecture_24', 'data_type_key' => 'refecture', 'name' => 'Mie', 'code' => '24', 'weight' => '24', ),
			array('language_id' => '1', 'key' => 'refecture_25', 'data_type_key' => 'refecture', 'name' => 'Shiga', 'code' => '25', 'weight' => '25', ),
			array('language_id' => '1', 'key' => 'refecture_26', 'data_type_key' => 'refecture', 'name' => 'Kyoto', 'code' => '26', 'weight' => '26', ),
			array('language_id' => '1', 'key' => 'refecture_27', 'data_type_key' => 'refecture', 'name' => 'Osaka', 'code' => '27', 'weight' => '27', ),
			array('language_id' => '1', 'key' => 'refecture_28', 'data_type_key' => 'refecture', 'name' => 'Hyogo', 'code' => '28', 'weight' => '28', ),
			array('language_id' => '1', 'key' => 'refecture_29', 'data_type_key' => 'refecture', 'name' => 'Nara', 'code' => '29', 'weight' => '29', ),
			array('language_id' => '1', 'key' => 'refecture_30', 'data_type_key' => 'refecture', 'name' => 'Wakayama', 'code' => '30', 'weight' => '30', ),
			array('language_id' => '1', 'key' => 'refecture_31', 'data_type_key' => 'refecture', 'name' => 'Tottori', 'code' => '31', 'weight' => '31', ),
			array('language_id' => '1', 'key' => 'refecture_32', 'data_type_key' => 'refecture', 'name' => 'Shimane', 'code' => '32', 'weight' => '32', ),
			array('language_id' => '1', 'key' => 'refecture_33', 'data_type_key' => 'refecture', 'name' => 'Okayama', 'code' => '33', 'weight' => '33', ),
			array('language_id' => '1', 'key' => 'refecture_34', 'data_type_key' => 'refecture', 'name' => 'Hiroshima', 'code' => '34', 'weight' => '34', ),
			array('language_id' => '1', 'key' => 'refecture_35', 'data_type_key' => 'refecture', 'name' => 'Yamaguchi', 'code' => '35', 'weight' => '35', ),
			array('language_id' => '1', 'key' => 'refecture_36', 'data_type_key' => 'refecture', 'name' => 'Tokushima', 'code' => '36', 'weight' => '36', ),
			array('language_id' => '1', 'key' => 'refecture_37', 'data_type_key' => 'refecture', 'name' => 'Kagawa', 'code' => '37', 'weight' => '37', ),
			array('language_id' => '1', 'key' => 'refecture_38', 'data_type_key' => 'refecture', 'name' => 'Ehime', 'code' => '38', 'weight' => '38', ),
			array('language_id' => '1', 'key' => 'refecture_39', 'data_type_key' => 'refecture', 'name' => 'Kochi', 'code' => '39', 'weight' => '39', ),
			array('language_id' => '1', 'key' => 'refecture_40', 'data_type_key' => 'refecture', 'name' => 'Fukuoka', 'code' => '40', 'weight' => '40', ),
			array('language_id' => '1', 'key' => 'refecture_41', 'data_type_key' => 'refecture', 'name' => 'Saga', 'code' => '41', 'weight' => '41', ),
			array('language_id' => '1', 'key' => 'refecture_42', 'data_type_key' => 'refecture', 'name' => 'Nagasaki', 'code' => '42', 'weight' => '42', ),
			array('language_id' => '1', 'key' => 'refecture_43', 'data_type_key' => 'refecture', 'name' => 'Kumamoto', 'code' => '43', 'weight' => '43', ),
			array('language_id' => '1', 'key' => 'refecture_44', 'data_type_key' => 'refecture', 'name' => 'Oita', 'code' => '44', 'weight' => '44', ),
			array('language_id' => '1', 'key' => 'refecture_45', 'data_type_key' => 'refecture', 'name' => 'Miyazaki', 'code' => '45', 'weight' => '45', ),
			array('language_id' => '1', 'key' => 'refecture_46', 'data_type_key' => 'refecture', 'name' => 'Kagoshima', 'code' => '46', 'weight' => '46', ),
			array('language_id' => '1', 'key' => 'refecture_47', 'data_type_key' => 'refecture', 'name' => 'Okinawa', 'code' => '47', 'weight' => '47', ),
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
