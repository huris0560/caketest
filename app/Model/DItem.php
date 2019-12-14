<?php
App::uses('AppModel', 'Model');
/**
 * DItem Model
 *
 */
class DItem extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'd_item';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'item_cd';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'item_cd';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'item_cd' => array(
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
