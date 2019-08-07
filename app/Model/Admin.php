<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
/**
 * Admin Model
 *
 */
class Admin extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'admin_name' => array(
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
		'baces' => array(
			'notBlank' => array(
				'rule' => array('inList', array("public",'factry', 'reception')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'ip' => array(
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
//	public function beforeSave($options = array()) {
//		if (isset($this->data[$this->alias]['password'])) {
//			$passwordHasher = new BlowfishPasswordHasher();
//			$this->data[$this->alias]['password'] = $passwordHasher->hash(
//					$this->data[$this->alias]['password']
//					);
//		}
//		return true;
//	}
//	public function isOwnedBy($post, $user) {
//		return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
//	}
}