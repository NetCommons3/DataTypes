<?php
/**
 * DataType Model
 *
 * @property Language $Language
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('DataTypesAppModel', 'DataTypes.Model');

/**
 * DataType Model
 */
class DataType extends DataTypesAppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'language_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'key' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Language' => array(
			'className' => 'M17n.Language',
			'foreignKey' => 'language_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * データタイプを取得
 *
 * @param array $dataTypeKey DataType.keyの配列
 * @return array DataTypes配列
 */
	public function getDataTypes($dataTypeKey = array()) {
		$this->DataTypeChoice = ClassRegistry::init('DataTypes.DataTypeChoice');

		//データ取得
		$dataTypes = $this->find('all', array(
			'recursive' => -1,
			'conditions' => array(
				$this->alias . '.language_id' => Current::read('Language.id'),
				$this->alias . '.key' => $dataTypeKey
			),
		));
		$dataTypes = Hash::combine($dataTypes, '{n}.' . $this->alias . '.key', '{n}');

		//データ取得
		$dataTypeChoices = $this->DataTypeChoice->find('all', array(
			'recursive' => -1,
			'conditions' => array(
				$this->DataTypeChoice->alias . '.language_id' => Current::read('Language.id'),
				$this->DataTypeChoice->alias . '.data_type_key' => $dataTypeKey
			),
		));
		$dataTypeChoices = Hash::combine(
			$dataTypeChoices,
			'{n}.' . $this->DataTypeChoice->alias . '.id',
			'{n}.' . $this->DataTypeChoice->alias,
			'{n}.' . $this->DataTypeChoice->alias . '.data_type_key'
		);
		foreach ($dataTypeChoices as $key => $choices) {
			$dataTypes[$key][$this->DataTypeChoice->alias] = $choices;
		}

		return $dataTypes;
	}

}
