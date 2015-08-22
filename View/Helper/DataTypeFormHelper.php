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
 * Default Constructor
 *
 * @param View $View The View this helper is being attached to.
 * @param array $settings Configuration settings for the helper.
 */
	public function __construct(View $View, $settings = array()) {
		parent::__construct($View, $settings);

		//$this->DataType = ClassRegistry::init('DataTypes.DataType');
		$this->DataTypeTemplate = ClassRegistry::init('DataTypes.DataTypeTemplate');
		$this->DataTypeTemplatesPlugin = ClassRegistry::init('DataTypes.DataTypeTemplatesPlugin');
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
		static $dataTypes = null;
		if (! isset($dataTypes)) {
			$conditions = array(
				'DataTypeTemplate.language_id' => Configure::read('Config.languageId')
			);
			if (isset($settings['plugin'])) {
				$conditions['DataTypeTemplatesPlugin.plugin_key'] = $this->settings['plugin'];
			} else {
				$conditions['DataTypeTemplatesPlugin.plugin_key'] = $this->_View->request->params['plugin'];
			}
			$options = array(
				'recursive' => 0,
				'fields' => array('DataTypeTemplate.key', 'DataTypeTemplate.name'),
				'conditions' => $conditions,
				'order' => array('DataTypeTemplate.weight' => 'asc')
			);
			$dataTypes = $this->DataTypeTemplatesPlugin->find('list', $options);
		}

		$options = Hash::merge(array(
			'type' => 'select',
			'options' => $dataTypes
		), $attributes);
		return $this->Form->input($fieldName, $options);
	}

/**
 * Generates a form input element complete with label and wrapper div
 *
 * @param string $dataTypeTemplateKey data_type_templates.key
 * @param string $fieldName This should be "Modelname.fieldname"
 * @param string $inputLabel Label tag value
 * @param array $attributes The HTML attributes of the select element.
 * @return string Completed form widget.
 */
	public function inputDataType($dataTypeTemplateKey, $fieldName, $inputLabel, $attributes = array()) {
		static $dataTypeTemplates = array();

		if (! isset($dataTypeTemplates[$dataTypeTemplateKey])) {
			$dataTypeTemplates[$dataTypeTemplateKey] = $this->DataTypeTemplate->getDataTypeTemplateByKey($dataTypeTemplateKey);
		}
		$dataTypeTemplate = $dataTypeTemplates[$dataTypeTemplateKey];
		$dataTypeKey = $dataTypeTemplate['DataTypeTemplate']['data_type_key'];

		if ($dataTypeTemplate['DataTypeTemplate']['key'] === 'created' ||
				$dataTypeTemplate['DataTypeTemplate']['key'] === 'modified') {

			$dataTypeKey = 'label';
		}

		$html = '';

		switch ($dataTypeKey) {
			case 'radio':
				$html .= $this->Form->label($fieldName, $inputLabel);
				$html .= '<div class="form-control data-type-no-border">';
				$html .= '</div>';
				break;

			case 'checkbox':
				$html .= $this->Form->label($fieldName, $inputLabel);
				$html .= '<div class="form-control data-type-no-border">';
				$html .= '</div>';
				break;

			//case 'select':
			//	$html .= '<strong>' . $inputLabel . '</strong>';
			//	break;

			case 'password':
				$html .= '<div class="data-type-password">';
				$html .= $this->Form->input($fieldName, Hash::merge(array(
						'type' => $dataTypeKey,
						'label' => $inputLabel,
						'class' => 'form-control',
						'error' => false,
					), $attributes));
				$html .= '</div>';

				$html .= '<div class="has-error">';
				$html .= $this->Form->error($fieldName, null, array(
						'class' => 'help-block'
					));
				$html .= '</div>';

				$html .= '<div class="data-type-password data-type-again">';

				$html .= $this->Form->input($fieldName . '_again', Hash::merge(array(
						'type' => $dataTypeKey,
						'label' => __d('data_types', 'Re-enter'),
						'class' => 'form-control',
						'error' => false,
					), $attributes));

				$html .= '</div>';
				$html .= '<div class="has-error">';
				$html .= $this->Form->error($fieldName . '_again', null, array(
						'class' => 'help-block'
					));
				$html .= '</div>';

				break;

			case 'datetime':
				$html .= $this->Form->label($fieldName, $inputLabel);
				break;

			case 'img':
				$html .= $this->Form->label($fieldName, $inputLabel);
				$html .= '<div class="thumbnail">';
				$html .= $this->Html->image($attributes['noimage'], array(
						'class' => 'img-responsive img-rounded',
						'alt' => 'Avatar',
					));
				$html .= '</div>';
				break;

			case 'label':
				$html .= $this->Form->label($fieldName, $inputLabel);
				$html .= '<div class="form-control data-type-no-border">';
				//$html .= Hash::get($this->_View->request->data, $fieldName);
				$html .= '</div>';
				break;

			default:
				$html .= $this->Form->input($fieldName, Hash::merge(array(
					'type' => $dataTypeKey,
					'label' => $inputLabel,
					'class' => 'form-control',
					'error' => false,
				), $attributes));
				$html .= '<div class="has-error">';
				$html .= $this->Form->error($fieldName, null, array(
						'class' => 'help-block'
					));
				$html .= '</div>';
		}

		return $html;
	}

}
