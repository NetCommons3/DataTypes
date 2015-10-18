<?php
/**
 * DataTypeForm Component
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('Component', 'Controller');

/**
 * DataTypeForm Component
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\DataTypes\Controller
 */
class DataTypeFormComponent extends Component {

/**
 * 対象のデータタイプ
 *
 * @var array
 */
	public $dataTypes = array(
		'text',
		'textarea',
		'radio',
		'checkbox',
		'select',
	);

/**
 * Called after the Controller::beforeFilter() and before the controller action
 *
 * @param Controller $controller Controller with components to startup
 * @return void
 * @link http://book.cakephp.org/2.0/en/controllers/components.html#Component::startup
 */
	public function startup(Controller $controller) {
		$this->controller = $controller;
		$this->controller->helpers[] = 'DataTypes.DataTypeForm';

		//Modelの呼び出し
		$this->DataType = ClassRegistry::init('DataTypes.DataType');

		$dataTypes = $this->DataType->getDataTypes($this->dataTypes);
		$this->controller->set('dataTypes', $dataTypes);
	}

}
