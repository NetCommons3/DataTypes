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
		'Form',
		'NetCommons.NetCommonsForm',
		'NetCommons.NetCommonsHtml',
	);

/**
 * データタイプの選択リスト
 *
 * @param string $fieldName フィールド名
 * @param array $attributes HTMLの属性オプション
 * @return string SELECTタグ
 * @link http://book.cakephp.org/2.0/en/core-libraries/helpers/form.html#options-for-select-checkbox-and-radio-inputs
 */
	public function selectDataTypes($fieldName, $attributes = array()) {
		$dataTypes = Hash::combine($this->_View->viewVars['dataTypes'], '{s}.DataType.key', '{s}.DataType.name');
		$options = Hash::merge(array(
			'type' => 'select',
			'options' => $dataTypes
		), $attributes);

		return $this->NetCommonsForm->input($fieldName, $options);
	}

/**
 * Generates a form input element complete with label and wrapper div
 *
 * @param string $dataTypeTemplateKey data_type_templates.key
 * @param string $fieldName This should be "Modelname.fieldname"
 * @param string $inputLabel Label tag value
 * @param array $attributes The HTML attributes of the select element.
 * @return string Completed form widget.
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 */
	public function inputDataType($dataTypeKey, $fieldName, $inputLabel, $attributes = array()) {
		$output = '';

		switch ($dataTypeKey) {
			case 'radio':
				$options = $attributes['options'];
				unset($attributes['options']) ;

				$output .= '<div>';
				$output .= $this->NetCommonsForm->label($fieldName, $inputLabel);
				$output .= '</div>';

				$output .= '<div class="form-control data-type-no-border">';
				$output .= $this->NetCommonsForm->radio($fieldName, $options, Hash::merge(array(
					'div' => array('class' => 'form-control form-inline'),
					'separator' => '<span class="radio-separator"></span>'
				), $attributes));
				$output .= '</div>';
				break;

			//case 'checkbox':
			//	$output .= $this->__checkbox($fieldName, $inputLabel, $attributes);
			//	break;

			//case 'select':
			//	$output .= '<strong>' . $inputLabel . '</strong>';
			//	break;

			case 'password':
				$output .= $this->password($fieldName, $inputLabel, $attributes);
				break;

			//case 'datetime':
			//	$output .= $this->__datetime($fieldName, $inputLabel, $attributes);
			//	break;

			case 'img':
				$output .= $this->image($fieldName, $inputLabel, $attributes);
				break;

			case 'label':
				$output .= $this->NetCommonsForm->label($fieldName, $inputLabel);
				$output .= '<div class="form-control data-type-no-border">';
				$output .= Hash::get($this->_View->request->data, $fieldName);
				$output .= '</div>';
				break;

			default:
				$output .= $this->NetCommonsForm->input($fieldName, Hash::merge(array(
					'type' => $dataTypeKey,
					'label' => $inputLabel,
				), $attributes));
		}

		return $output;
	}

/**
 * Generates a form input element complete with label and wrapper div
 *
 * @param string $fieldName This should be "Modelname.fieldname"
 * @param string $inputLabel Label tag value
 * @param array $attributes The HTML attributes of the select element.
 * @return string Completed form widget.
 */
//	private function __checkbox($fieldName, $inputLabel, $attributes = array()) {
//		$output = '';
//		$output .= $this->Form->label($fieldName, $inputLabel);
//		$output .= '<div class="form-control data-type-no-border">';
//		$output .= '</div>';
//
//		//Dummy
//		$attributes = $attributes;
//		return $output;
//	}

/**
 * Generates a form input element complete with label and wrapper div
 *
 * @param string $fieldName This should be "Modelname.fieldname"
 * @param string $inputLabel Label tag value
 * @param array $attributes The HTML attributes of the select element.
 * @return string Completed form widget.
 */
//	private function __radio($fieldName, $inputLabel, $attributes = array()) {
//		$output = '';
//
//		$output .= $this->Form->label($fieldName, $inputLabel);
//		$output .= '<div class="form-control data-type-no-border">';
//		$output .= '</div>';
//
//		//Dummy
//		$attributes = $attributes;
//		return $output;
//	}

/**
 * パスワードのHTMLタグの出力
 *
 * @param string $fieldName フィールド名
 * @param string $inputLabel ラベル名
 * @param array $attributes HTMLタグ属性
 * @return string パスワードタグ
 */
	public function password($fieldName, $inputLabel, $attributes = array()) {
		$output = '';
		$output .= '<div class="form-group">';

		//パスワード入力フォーム
		$output .= '<div class="data-type-password">';
		$output .= $this->NetCommonsForm->input($fieldName, Hash::merge(array(
				'type' => 'password',
				'label' => $inputLabel,
				'div' => false,
				'autocomplete' => 'off',
			), $attributes));
		$output .= '</div>';

		//再入力フォーム
		$output .= '<div class="data-type-password data-type-again">';
		$output .= $this->NetCommonsForm->input($fieldName . '_again', Hash::merge(array(
				'type' => 'password',
				'label' => __d('data_types', 'Re-enter'),
				//'class' => 'form-control',
				//'error' => false,
				'autocomplete' => 'off',
			), $attributes));
		$output .= '</div>';

		$output .= '</div>';
		return $output;
	}

/**
 * Generates a form input element complete with label and wrapper div
 *
 * @param string $fieldName This should be "Modelname.fieldname"
 * @param string $inputLabel Label tag value
 * @param array $attributes The HTML attributes of the select element.
 * @return string Completed form widget.
 */
	public function image($fieldName, $inputLabel, $attributes = array()) {
		$output = '';

		$output .= $this->NetCommonsForm->label($fieldName, $inputLabel);
		$output .= '<div class="thumbnail">';
		$output .= $this->NetCommonsHtml->image($attributes['noimage'], array(
				'class' => 'img-responsive img-rounded',
				'alt' => 'Avatar',
			));
		$output .= '</div>';

		return $output;
	}

}
