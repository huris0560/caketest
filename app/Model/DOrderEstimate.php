<?php
App::uses('AppModel', 'Model');
/**
 * DOrderEstimate Model
 *
 */
class DOrderEstimate extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'd_order_estimate';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'order_estimate_cd';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'order_estimate_cd';

}
