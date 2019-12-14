<?php
App::uses('AppModel', 'Model');
/**
 * DCart Model
 *
 */
class DCart extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'd_cart';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'cart_cd';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'cart_cd';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'cart_cd' => array(
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
