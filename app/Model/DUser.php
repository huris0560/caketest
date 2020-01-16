<?php
App::uses('AppModel', 'Model');
/**
 * DUser Model
 *
 */
class DUser extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'd_user';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'user_cd';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nick_name';

}
