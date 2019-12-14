<?php
App::uses('AppModel', 'Model');
/**
 * CopyTest01 Model
 *
 */
class CopyTest01 extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'copy_test_01';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'testNo';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'testName';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'testNo' => array(
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
