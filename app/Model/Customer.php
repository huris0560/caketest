<?php
App::uses('AppModel', 'Model');
//App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
App::uses('AbstractPasswordHasher', 'Controller/Component/Auth');

/**
 * Customer Model
 *
 */
class Customer extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'customer';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'customer_name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'modified' => array(
			'time' => array(
				'rule' => array('time'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	public function beforeSave($options = array()) {
//ふぐは忘れろ
		if (isset($this->data[$this->alias]['password'])) {
			$temp = $this->data[$this->alias]['password'];
			$this->data[$this->alias]['password'] =  Security::hash($temp,'sha256',true);
			//			$passwordHasher = new BlowfishPasswordHasher();
			//			Security::setHash('blowfish');
			//			$this->data[$this->alias]['password'] =  $this->data[$this->alias]['password'];
		}
		return true;
	}
}
