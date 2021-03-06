<?php
/**
 * Timezone Behavior
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('ModelBehavior', 'Model');

/**
 * Timezone Behavior
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\DataTypes\Model\Behavior
 */
class TimezoneBehavior extends ModelBehavior {

/**
 * タイムゾーンの取得
 *
 * @param Model $model Model ビヘイビア呼び出し元モデル
 * @param string $what タイムゾーン(地域)
 * @param string $country 2文字のISO3166-1互換の国コード
 * @return array タイムゾーン配列
 */
	public function getTimezone(Model $model, $what = null, $country = null) {
		$results = array();

		if (isset($country)) {
			$what = DateTimeZone::PER_COUNTRY;
		}
		if (! isset($what)) {
			$what = DateTimeZone::ALL;
		}

		$timezoneIdentifiers = DateTimeZone::listIdentifiers($what, $country);
		foreach ($timezoneIdentifiers as $timezone) {
			$date = new DateTime('now', (new DateTimeZone($timezone)));

			if ($timezone === 'UTC') {
				$timezoneValue = __d('data_types', '(UTC%s)', '') . ' ';
			} else {
				$timezoneValue = __d('data_types', '(UTC%s)', $date->format('P')) . ' ';
			}

			$results[] = array(
				'key' => $timezone,
				'name' => $timezoneValue . __d('data_types', $timezone),
				'code' => $timezone,
				'language_id' => Current::read('Language.id'),
				'sort' => $date->format('Z')
			);
		}

		$results = Hash::sort($results, '{n}.sort', 'asc');
		return $results;
	}

}
