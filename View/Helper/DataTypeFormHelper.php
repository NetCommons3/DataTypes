<?php
/**
 * EdumapHelper
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('FormHelper', 'View/Helper');

/**
 * DataTypesHelper
 *
 * @package NetCommons\UserAttributes\View\Helper
 */
class DataTypeFormHelper extends FormHelper {

/**
 * Other helpers used by FormHelper
 *
 * @var array
 */
	public $helpers = array('Form', 'Html');

/**
 * Plugins data
 *
 * @var array
 */
	public $dataTypes;

/**
 * Default Constructor
 *
 * @param View $View The View this helper is being attached to.
 * @param array $settings Configuration settings for the helper.
 */
	public function __construct(View $View, $settings = array()) {
		parent::__construct($View, $settings);

		$this->DataTypeTemplate = ClassRegistry::init('DataTypes.DataTypeTemplate');

		$conditions = array(
			'language_id' => Configure::read('Config.languageId')
		);
		if (isset($settings['plugin'])) {
			$conditions['OR'] = array(
				'plugin_key' => $settings['plugin'],
				'is_user_defined' => false
			);
		} else {
			$conditions['is_user_defined'] = false;
		}

		$options = array(
			'recursive' => -1,
			'fields' => array('DataTypeTemplate.key', 'DataTypeTemplate.name'),
			'conditions' => $conditions,
			'order' => array('is_user_defined' => 'asc', 'weight' => 'asc')
		);
		$this->dataTypes = $this->DataTypeTemplate->find('list', $options);
	}

/**
 * Outputs data type list
 *
 * @param string $fieldName Name attribute of the SELECT
 * @param array $attributes The HTML attributes of the select element.
 * @return string Formatted SELECT element
 * @link http://book.cakephp.org/2.0/en/core-libraries/helpers/form.html#options-for-select-checkbox-and-radio-inputs
 */
	public function selectDataTypes($fieldName, $attributes = array()) {
		$options = Hash::merge(array(
			'type' => 'select',
			'options' => $this->dataTypes
		), $attributes);
		return $this->Form->input($fieldName, $options);
	}
}
