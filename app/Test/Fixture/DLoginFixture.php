<?php
/**
 * DLogin Fixture
 */
class DLoginFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'd_login';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'login_cd' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => false, 'key' => 'primary'),
		'user_cd' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => false),
		'login_time' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'last_update_time' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'login_cd', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'login_cd' => 1,
			'user_cd' => 1,
			'login_time' => 1567825246,
			'last_update_time' => 1567825246
		),
	);

}
