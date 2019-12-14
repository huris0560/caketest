<?php
App::uses('AppModel', 'Model');
/**
 * DMukeiItem Model
 *
 */
class DMukeiItem extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'd_mukei_item';

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
}
