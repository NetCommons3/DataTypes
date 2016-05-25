<?php
/**
 * DataTypeFormHelper
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('AppHelper', 'View/Helper');

/**
 * DataTypeFormHelper
 *
 * @package NetCommons\DataTypes\View\Helper
 */
class DataTypeFormHelper extends AppHelper {

/**
 * Other helpers used by FormHelper
 *
 * @var array
 */
	public $helpers = array(
		'NetCommons.NetCommonsForm',
		'NetCommons.NetCommonsHtml',
	);

/**
 * Before render callback. beforeRender is called before the view file is rendered.
 *
 * Overridden in subclasses.
 *
 * @param string $viewFile The view file that is going to be rendered
 * @return void
 */
	public function beforeRender($viewFile) {
		$this->NetCommonsHtml->css('/data_types/css/style.css');
		$this->NetCommonsHtml->script('/data_types/js/data_types.jquery.js');
		parent::beforeRender($viewFile);
	}

/**
 * データタイプの選択リスト
 *
 * @param string $fieldName フィールド名
 * @param array $attributes HTMLの属性オプション
 * @return string SELECTタグ
 * @link http://book.cakephp.org/2.0/en/core-libraries/helpers/form.html#options-for-select-checkbox-and-radio-inputs
 */
	public function selectDataTypes($fieldName, $attributes = array()) {
		$dataTypes = Hash::combine(
			$this->_View->viewVars['dataTypes'], '{s}.DataType.key', '{s}.DataType.name'
		);
		$options = Hash::merge(array(
			'type' => 'select',
			'options' => $dataTypes
		), $attributes);

		return $this->NetCommonsForm->input($fieldName, $options);
	}

/**
 * データタイプに対するinputタグのHTML出力
 *
 * @param string $fieldName フィールド名("Modelname.fieldname"形式)
 * @param array $attributes HTMLタグ属性
 * @return string HTML 入力HTML
 */
	public function inputDataType($fieldName, $attributes = array()) {
		$output = '';

		switch ($attributes['type']) {
			case DataType::DATA_TYPE_IMG:
				$output .= $this->image($fieldName, $attributes);
				break;

			case DataType::DATA_TYPE_PASSWORD:
				$attributes = Hash::merge(['again' => true], $attributes);
				$output .= $this->NetCommonsForm->input($fieldName, $attributes);
				break;

			case DataType::DATA_TYPE_RADIO:
			case DataType::DATA_TYPE_CHECKBOX:
				$attributes = Hash::merge(['inline' => true], $attributes);
				$output .= $this->NetCommonsForm->input($fieldName, $attributes);
				break;

			default:
				$output .= $this->NetCommonsForm->input($fieldName, $attributes);
		}

		return $output;
	}

/**
 * Generates a form input element complete with label and wrapper div
 *
 * @param string $fieldName フィールド名("Modelname.fieldname"形式)
 * @param array $attributes HTMLタグ属性
 * @return string imageタグ
 */
	public function image($fieldName, $attributes = array()) {
		$output = '';

		if (! isset($attributes['url'])) {
			return $output;
		}

		$label = $attributes['label'];
		if (Hash::get($attributes, 'required')) {
			$label .= $this->_View->element('NetCommons.required');
		}
		$attributes = Hash::remove($attributes, 'label');
		$attributes = Hash::remove($attributes, 'required');

		$output .= $this->NetCommonsForm->label($fieldName, $label);
		$output .= '<div class="thumbnail data-type-thumbnail data-type-edit-thumbnail">';

		$output .= $this->NetCommonsHtml->image($attributes['url'], array(
			'class' => 'img-responsive img-rounded',
			'alt' => Hash::get($attributes, 'alt'),
			'id' => $this->domId($fieldName . '_image')
		));

		$output .= '</div>';
		$output .= $this->NetCommonsForm->uploadFile($fieldName, Hash::merge(array(
			'label' => false,
			'data-type-key' => 'image',
			//'class' => false,
		), $attributes));

		return $output;
	}

}
