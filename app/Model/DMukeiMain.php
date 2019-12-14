<?php
App::uses('AppModel', 'Model');
/**
 * DMukeiMain Model
 *
 * @property Order $Order
 */
class DMukeiMain extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'd_mukei_main';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'd_mukei_cd';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'd_mukei_cd';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'd_mukei_cd' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Order' => array(
			'className' => 'Order',
			'foreignKey' => 'order_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
