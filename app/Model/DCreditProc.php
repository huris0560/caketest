<?php
App::uses('AppModel', 'Model');
/**
 * DCreditProc Model
 *
 */
class DCreditProc extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'd_credit_proc';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'proc_no';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'proc_no';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'proc_no' => array(
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
}
