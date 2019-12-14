<?php
App::uses('AppModel', 'Model');
/**
 * DInfo Model
 *
 */
class DInfo extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'd_info';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'info_cd';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'info_cd';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'info_cd' => array(
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
