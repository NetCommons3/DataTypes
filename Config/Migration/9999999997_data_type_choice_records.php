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
			array('language_id' => '2', 'key' => 'timezone_gmt_m12', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT-12:00) エニウェトク、クエジェリン', 'value' => '-12', 'weight' => '1', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_m11', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT-11:00) ミッドウェー島、サモア', 'value' => '-11', 'weight' => '2', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_m10', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT-10:00) ハワイ', 'value' => '-10', 'weight' => '3', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_m9', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT-9:00) アラスカ', 'value' => '-9', 'weight' => '4', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_m8', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT-8:00) 太平洋標準時（米国およびカナダ）、ティファナ', 'value' => '-8', 'weight' => '5', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_m7', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT-7:00) 山地標準時（米国およびカナダ）', 'value' => '-7', 'weight' => '6', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_m6', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT-6:00) 中部標準時（米国およびカナダ）、メキシコシティ', 'value' => '-6', 'weight' => '7', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_m5', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT-5:00) 東部標準時（米国およびカナダ）、ボゴタ、リマ、キト', 'value' => '-5', 'weight' => '8', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_m4', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT-4:00) 大西洋標準時（カナダ）、カラカス、ラパス', 'value' => '-4', 'weight' => '9', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_m35', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT-3:30) ニューファンドランド', 'value' => '-3.5', 'weight' => '10', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_m3', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT-3:00) ブラジリア、ブエノスアイレス、ジョージタウン', 'value' => '-3', 'weight' => '11', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_m2', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT-2:00) 中央大西洋', 'value' => '-2', 'weight' => '12', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_m1', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT-1:00) アゾレス諸島、カーボベルデ諸島', 'value' => '-1', 'weight' => '13', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_0', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT) グリニッジ標準時、ダブリン、ロンドン、リスボン、エジンバラ', 'value' => '0', 'weight' => '14', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_p1', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT+1:00) ブリュッセル、コペンハーゲン、マドリッド、パリ、アムステルダム', 'value' => '+1', 'weight' => '15', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_p2', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT+2:00) アテネ、イスタンブール、エルサレム、カイロ、ヘルシンキ', 'value' => '+2', 'weight' => '16', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_p3', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT+3:00) バグダッド、ナイロビ、クウェート、リヤド、モスクワ', 'value' => '+3', 'weight' => '17', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_p35', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT+3:30) テヘラン', 'value' => '+3.5', 'weight' => '18', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_p4', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT+4:00) アブダビ、マスカット、バク、トビリシ', 'value' => '+4', 'weight' => '19', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_p45', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT+4:30) カブール', 'value' => '+4.5', 'weight' => '20', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_p5', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT+5:00) イスラマバード、カラチ、タシケント、エカテリンバーグ', 'value' => '+5', 'weight' => '21', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_p55', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT+5:30) カルカッタ、チェンナイ、ムンバイ、ニューデリー', 'value' => '+5.5', 'weight' => '22', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_p6', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT+6:00) ダッカ、アルマティ、スリ・ジャヤワルダナプラ', 'value' => '+6', 'weight' => '23', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_p7', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT+7:00) バンコク、ハノイ、ジャカルタ', 'value' => '+7', 'weight' => '24', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_p8', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT+8:00) シンガポール、パース、台北、北京、重慶、香港、ウルムチ', 'value' => '+8', 'weight' => '25', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_p9', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT+9:00) 東京、大阪、札幌、ソウル、ヤクーツク', 'value' => '+9', 'weight' => '26', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_p95', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT+9:30) アデレード、ダーウィン', 'value' => '+9.5', 'weight' => '27', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_p10', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT+10:00) ウラジオストク、キャンベラ、メルボルン、シドニー、グアム', 'value' => '+10', 'weight' => '28', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_p11', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT+11:00) マガダン、ソロモン諸島、ニューカレドニア', 'value' => '+11', 'weight' => '29', ),
			array('language_id' => '2', 'key' => 'timezone_gmt_p12', 'data_type_key' => 'select', 'data_type_template_key' => 'timezone', 'plugin_key' => 'users', 'name' => '(GMT+12:00) オークランド、ウェリントン、フィジー、カムチャッカ', 'value' => '+12', 'weight' => '30', ),
			array('language_id' => '2', 'key' => 'user_role_key_user_administrator', 'data_type_key' => 'select', 'data_type_template_key' => 'user_role_key', 'plugin_key' => 'users', 'name' => '会員管理者', 'value' => 'user_administrator', 'weight' => '1', ),
			array('language_id' => '2', 'key' => 'user_role_key_chief_user', 'data_type_key' => 'select', 'data_type_template_key' => 'user_role_key', 'plugin_key' => 'users', 'name' => '主任', 'value' => 'chief_user', 'weight' => '2', ),
			array('language_id' => '2', 'key' => 'user_role_key_general_user', 'data_type_key' => 'select', 'data_type_template_key' => 'user_role_key', 'plugin_key' => 'users', 'name' => '一般', 'value' => 'general_user', 'weight' => '3', ),
			array('language_id' => '2', 'key' => 'user_role_key_guest_user', 'data_type_key' => 'select', 'data_type_template_key' => 'user_role_key', 'plugin_key' => 'users', 'name' => 'ゲスト', 'value' => 'guest_user', 'weight' => '4', ),
			array('language_id' => '2', 'key' => 'status_1', 'data_type_key' => 'select', 'data_type_template_key' => 'status', 'plugin_key' => 'users', 'name' => '利用可能', 'value' => '1', 'weight' => '1', ),
			array('language_id' => '2', 'key' => 'status_0', 'data_type_key' => 'select', 'data_type_template_key' => 'status', 'plugin_key' => 'users', 'name' => '利用不可', 'value' => '0', 'weight' => '2', ),
			array('language_id' => '2', 'key' => 'status_2', 'data_type_key' => 'select', 'data_type_template_key' => 'status', 'plugin_key' => 'users', 'name' => '承認待ち', 'value' => '2', 'weight' => '3', ),
			array('language_id' => '2', 'key' => 'status_3', 'data_type_key' => 'select', 'data_type_template_key' => 'status', 'plugin_key' => 'users', 'name' => '承認済み', 'value' => '3', 'weight' => '4', ),
			array('language_id' => '2', 'key' => 'refecture_radio_01', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '北海道', 'value' => '01', 'weight' => '1', ),
			array('language_id' => '2', 'key' => 'refecture_radio_02', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '青森県', 'value' => '02', 'weight' => '2', ),
			array('language_id' => '2', 'key' => 'refecture_radio_03', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '岩手県', 'value' => '03', 'weight' => '3', ),
			array('language_id' => '2', 'key' => 'refecture_radio_04', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '宮城県', 'value' => '04', 'weight' => '4', ),
			array('language_id' => '2', 'key' => 'refecture_radio_05', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '秋田県', 'value' => '05', 'weight' => '5', ),
			array('language_id' => '2', 'key' => 'refecture_radio_06', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '山形県', 'value' => '06', 'weight' => '6', ),
			array('language_id' => '2', 'key' => 'refecture_radio_07', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '福島県', 'value' => '07', 'weight' => '7', ),
			array('language_id' => '2', 'key' => 'refecture_radio_08', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '茨城県', 'value' => '08', 'weight' => '8', ),
			array('language_id' => '2', 'key' => 'refecture_radio_09', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '栃木県', 'value' => '09', 'weight' => '9', ),
			array('language_id' => '2', 'key' => 'refecture_radio_10', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '群馬県', 'value' => '10', 'weight' => '10', ),
			array('language_id' => '2', 'key' => 'refecture_radio_11', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '埼玉県', 'value' => '11', 'weight' => '11', ),
			array('language_id' => '2', 'key' => 'refecture_radio_12', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '千葉県', 'value' => '12', 'weight' => '12', ),
			array('language_id' => '2', 'key' => 'refecture_radio_13', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '東京都', 'value' => '13', 'weight' => '13', ),
			array('language_id' => '2', 'key' => 'refecture_radio_14', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '神奈川県', 'value' => '14', 'weight' => '14', ),
			array('language_id' => '2', 'key' => 'refecture_radio_15', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '新潟県', 'value' => '15', 'weight' => '15', ),
			array('language_id' => '2', 'key' => 'refecture_radio_16', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '富山県', 'value' => '16', 'weight' => '16', ),
			array('language_id' => '2', 'key' => 'refecture_radio_17', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '石川県', 'value' => '17', 'weight' => '17', ),
			array('language_id' => '2', 'key' => 'refecture_radio_18', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '福井県', 'value' => '18', 'weight' => '18', ),
			array('language_id' => '2', 'key' => 'refecture_radio_19', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '山梨県', 'value' => '19', 'weight' => '19', ),
			array('language_id' => '2', 'key' => 'refecture_radio_20', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '長野県', 'value' => '20', 'weight' => '20', ),
			array('language_id' => '2', 'key' => 'refecture_radio_21', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '岐阜県', 'value' => '21', 'weight' => '21', ),
			array('language_id' => '2', 'key' => 'refecture_radio_22', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '静岡県', 'value' => '22', 'weight' => '22', ),
			array('language_id' => '2', 'key' => 'refecture_radio_23', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '愛知県', 'value' => '23', 'weight' => '23', ),
			array('language_id' => '2', 'key' => 'refecture_radio_24', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '三重県', 'value' => '24', 'weight' => '24', ),
			array('language_id' => '2', 'key' => 'refecture_radio_25', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '滋賀県', 'value' => '25', 'weight' => '25', ),
			array('language_id' => '2', 'key' => 'refecture_radio_26', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '京都府', 'value' => '26', 'weight' => '26', ),
			array('language_id' => '2', 'key' => 'refecture_radio_27', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '大阪府', 'value' => '27', 'weight' => '27', ),
			array('language_id' => '2', 'key' => 'refecture_radio_28', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '兵庫県', 'value' => '28', 'weight' => '28', ),
			array('language_id' => '2', 'key' => 'refecture_radio_29', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '奈良県', 'value' => '29', 'weight' => '29', ),
			array('language_id' => '2', 'key' => 'refecture_radio_30', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '和歌山県', 'value' => '30', 'weight' => '30', ),
			array('language_id' => '2', 'key' => 'refecture_radio_31', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '鳥取県', 'value' => '31', 'weight' => '31', ),
			array('language_id' => '2', 'key' => 'refecture_radio_32', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '島根県', 'value' => '32', 'weight' => '32', ),
			array('language_id' => '2', 'key' => 'refecture_radio_33', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '岡山県', 'value' => '33', 'weight' => '33', ),
			array('language_id' => '2', 'key' => 'refecture_radio_34', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '広島県', 'value' => '34', 'weight' => '34', ),
			array('language_id' => '2', 'key' => 'refecture_radio_35', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '山口県', 'value' => '35', 'weight' => '35', ),
			array('language_id' => '2', 'key' => 'refecture_radio_36', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '徳島県', 'value' => '36', 'weight' => '36', ),
			array('language_id' => '2', 'key' => 'refecture_radio_37', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '香川県', 'value' => '37', 'weight' => '37', ),
			array('language_id' => '2', 'key' => 'refecture_radio_38', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '愛媛県', 'value' => '38', 'weight' => '38', ),
			array('language_id' => '2', 'key' => 'refecture_radio_39', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '高知県', 'value' => '39', 'weight' => '39', ),
			array('language_id' => '2', 'key' => 'refecture_radio_40', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '福岡県', 'value' => '40', 'weight' => '40', ),
			array('language_id' => '2', 'key' => 'refecture_radio_41', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '佐賀県', 'value' => '41', 'weight' => '41', ),
			array('language_id' => '2', 'key' => 'refecture_radio_42', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '長崎県', 'value' => '42', 'weight' => '42', ),
			array('language_id' => '2', 'key' => 'refecture_radio_43', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '熊本県', 'value' => '43', 'weight' => '43', ),
			array('language_id' => '2', 'key' => 'refecture_radio_44', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '大分県', 'value' => '44', 'weight' => '44', ),
			array('language_id' => '2', 'key' => 'refecture_radio_45', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '宮崎県', 'value' => '45', 'weight' => '45', ),
			array('language_id' => '2', 'key' => 'refecture_radio_46', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '鹿児島県', 'value' => '46', 'weight' => '46', ),
			array('language_id' => '2', 'key' => 'refecture_radio_47', 'data_type_key' => 'radio', 'data_type_template_key' => 'refecture_radio', 'plugin_key' => '', 'name' => '沖縄県', 'value' => '47', 'weight' => '47', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_01', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '北海道', 'value' => '01', 'weight' => '1', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_02', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '青森県', 'value' => '02', 'weight' => '2', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_03', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '岩手県', 'value' => '03', 'weight' => '3', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_04', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '宮城県', 'value' => '04', 'weight' => '4', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_05', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '秋田県', 'value' => '05', 'weight' => '5', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_06', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '山形県', 'value' => '06', 'weight' => '6', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_07', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '福島県', 'value' => '07', 'weight' => '7', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_08', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '茨城県', 'value' => '08', 'weight' => '8', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_09', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '栃木県', 'value' => '09', 'weight' => '9', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_10', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '群馬県', 'value' => '10', 'weight' => '10', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_11', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '埼玉県', 'value' => '11', 'weight' => '11', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_12', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '千葉県', 'value' => '12', 'weight' => '12', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_13', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '東京都', 'value' => '13', 'weight' => '13', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_14', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '神奈川県', 'value' => '14', 'weight' => '14', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_15', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '新潟県', 'value' => '15', 'weight' => '15', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_16', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '富山県', 'value' => '16', 'weight' => '16', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_17', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '石川県', 'value' => '17', 'weight' => '17', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_18', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '福井県', 'value' => '18', 'weight' => '18', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_19', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '山梨県', 'value' => '19', 'weight' => '19', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_20', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '長野県', 'value' => '20', 'weight' => '20', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_21', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '岐阜県', 'value' => '21', 'weight' => '21', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_22', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '静岡県', 'value' => '22', 'weight' => '22', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_23', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '愛知県', 'value' => '23', 'weight' => '23', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_24', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '三重県', 'value' => '24', 'weight' => '24', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_25', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '滋賀県', 'value' => '25', 'weight' => '25', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_26', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '京都府', 'value' => '26', 'weight' => '26', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_27', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '大阪府', 'value' => '27', 'weight' => '27', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_28', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '兵庫県', 'value' => '28', 'weight' => '28', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_29', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '奈良県', 'value' => '29', 'weight' => '29', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_30', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '和歌山県', 'value' => '30', 'weight' => '30', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_31', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '鳥取県', 'value' => '31', 'weight' => '31', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_32', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '島根県', 'value' => '32', 'weight' => '32', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_33', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '岡山県', 'value' => '33', 'weight' => '33', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_34', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '広島県', 'value' => '34', 'weight' => '34', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_35', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '山口県', 'value' => '35', 'weight' => '35', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_36', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '徳島県', 'value' => '36', 'weight' => '36', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_37', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '香川県', 'value' => '37', 'weight' => '37', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_38', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '愛媛県', 'value' => '38', 'weight' => '38', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_39', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '高知県', 'value' => '39', 'weight' => '39', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_40', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '福岡県', 'value' => '40', 'weight' => '40', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_41', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '佐賀県', 'value' => '41', 'weight' => '41', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_42', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '長崎県', 'value' => '42', 'weight' => '42', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_43', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '熊本県', 'value' => '43', 'weight' => '43', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_44', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '大分県', 'value' => '44', 'weight' => '44', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_45', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '宮崎県', 'value' => '45', 'weight' => '45', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_46', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '鹿児島県', 'value' => '46', 'weight' => '46', ),
			array('language_id' => '2', 'key' => 'refecture_checkbox_47', 'data_type_key' => 'checkbox', 'data_type_template_key' => 'refecture_checkbox', 'plugin_key' => '', 'name' => '沖縄県', 'value' => '47', 'weight' => '47', ),
			array('language_id' => '2', 'key' => 'refecture_select_01', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '北海道', 'value' => '01', 'weight' => '1', ),
			array('language_id' => '2', 'key' => 'refecture_select_02', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '青森県', 'value' => '02', 'weight' => '2', ),
			array('language_id' => '2', 'key' => 'refecture_select_03', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '岩手県', 'value' => '03', 'weight' => '3', ),
			array('language_id' => '2', 'key' => 'refecture_select_04', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '宮城県', 'value' => '04', 'weight' => '4', ),
			array('language_id' => '2', 'key' => 'refecture_select_05', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '秋田県', 'value' => '05', 'weight' => '5', ),
			array('language_id' => '2', 'key' => 'refecture_select_06', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '山形県', 'value' => '06', 'weight' => '6', ),
			array('language_id' => '2', 'key' => 'refecture_select_07', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '福島県', 'value' => '07', 'weight' => '7', ),
			array('language_id' => '2', 'key' => 'refecture_select_08', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '茨城県', 'value' => '08', 'weight' => '8', ),
			array('language_id' => '2', 'key' => 'refecture_select_09', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '栃木県', 'value' => '09', 'weight' => '9', ),
			array('language_id' => '2', 'key' => 'refecture_select_10', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '群馬県', 'value' => '10', 'weight' => '10', ),
			array('language_id' => '2', 'key' => 'refecture_select_11', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '埼玉県', 'value' => '11', 'weight' => '11', ),
			array('language_id' => '2', 'key' => 'refecture_select_12', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '千葉県', 'value' => '12', 'weight' => '12', ),
			array('language_id' => '2', 'key' => 'refecture_select_13', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '東京都', 'value' => '13', 'weight' => '13', ),
			array('language_id' => '2', 'key' => 'refecture_select_14', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '神奈川県', 'value' => '14', 'weight' => '14', ),
			array('language_id' => '2', 'key' => 'refecture_select_15', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '新潟県', 'value' => '15', 'weight' => '15', ),
			array('language_id' => '2', 'key' => 'refecture_select_16', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '富山県', 'value' => '16', 'weight' => '16', ),
			array('language_id' => '2', 'key' => 'refecture_select_17', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '石川県', 'value' => '17', 'weight' => '17', ),
			array('language_id' => '2', 'key' => 'refecture_select_18', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '福井県', 'value' => '18', 'weight' => '18', ),
			array('language_id' => '2', 'key' => 'refecture_select_19', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '山梨県', 'value' => '19', 'weight' => '19', ),
			array('language_id' => '2', 'key' => 'refecture_select_20', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '長野県', 'value' => '20', 'weight' => '20', ),
			array('language_id' => '2', 'key' => 'refecture_select_21', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '岐阜県', 'value' => '21', 'weight' => '21', ),
			array('language_id' => '2', 'key' => 'refecture_select_22', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '静岡県', 'value' => '22', 'weight' => '22', ),
			array('language_id' => '2', 'key' => 'refecture_select_23', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '愛知県', 'value' => '23', 'weight' => '23', ),
			array('language_id' => '2', 'key' => 'refecture_select_24', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '三重県', 'value' => '24', 'weight' => '24', ),
			array('language_id' => '2', 'key' => 'refecture_select_25', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '滋賀県', 'value' => '25', 'weight' => '25', ),
			array('language_id' => '2', 'key' => 'refecture_select_26', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '京都府', 'value' => '26', 'weight' => '26', ),
			array('language_id' => '2', 'key' => 'refecture_select_27', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '大阪府', 'value' => '27', 'weight' => '27', ),
			array('language_id' => '2', 'key' => 'refecture_select_28', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '兵庫県', 'value' => '28', 'weight' => '28', ),
			array('language_id' => '2', 'key' => 'refecture_select_29', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '奈良県', 'value' => '29', 'weight' => '29', ),
			array('language_id' => '2', 'key' => 'refecture_select_30', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '和歌山県', 'value' => '30', 'weight' => '30', ),
			array('language_id' => '2', 'key' => 'refecture_select_31', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '鳥取県', 'value' => '31', 'weight' => '31', ),
			array('language_id' => '2', 'key' => 'refecture_select_32', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '島根県', 'value' => '32', 'weight' => '32', ),
			array('language_id' => '2', 'key' => 'refecture_select_33', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '岡山県', 'value' => '33', 'weight' => '33', ),
			array('language_id' => '2', 'key' => 'refecture_select_34', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '広島県', 'value' => '34', 'weight' => '34', ),
			array('language_id' => '2', 'key' => 'refecture_select_35', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '山口県', 'value' => '35', 'weight' => '35', ),
			array('language_id' => '2', 'key' => 'refecture_select_36', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '徳島県', 'value' => '36', 'weight' => '36', ),
			array('language_id' => '2', 'key' => 'refecture_select_37', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '香川県', 'value' => '37', 'weight' => '37', ),
			array('language_id' => '2', 'key' => 'refecture_select_38', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '愛媛県', 'value' => '38', 'weight' => '38', ),
			array('language_id' => '2', 'key' => 'refecture_select_39', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '高知県', 'value' => '39', 'weight' => '39', ),
			array('language_id' => '2', 'key' => 'refecture_select_40', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '福岡県', 'value' => '40', 'weight' => '40', ),
			array('language_id' => '2', 'key' => 'refecture_select_41', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '佐賀県', 'value' => '41', 'weight' => '41', ),
			array('language_id' => '2', 'key' => 'refecture_select_42', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '長崎県', 'value' => '42', 'weight' => '42', ),
			array('language_id' => '2', 'key' => 'refecture_select_43', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '熊本県', 'value' => '43', 'weight' => '43', ),
			array('language_id' => '2', 'key' => 'refecture_select_44', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '大分県', 'value' => '44', 'weight' => '44', ),
			array('language_id' => '2', 'key' => 'refecture_select_45', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '宮崎県', 'value' => '45', 'weight' => '45', ),
			array('language_id' => '2', 'key' => 'refecture_select_46', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '鹿児島県', 'value' => '46', 'weight' => '46', ),
			array('language_id' => '2', 'key' => 'refecture_select_47', 'data_type_key' => 'select', 'data_type_template_key' => 'refecture_select', 'plugin_key' => '', 'name' => '沖縄県', 'value' => '47', 'weight' => '47', ),
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
