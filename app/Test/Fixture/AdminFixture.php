<?php
/**
 * Admin Fixture
 */
class AdminFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'admin_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => '管理者ID'),
		'admin_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '管理者氏名', 'charset' => 'utf8'),
		'login_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => 'ログインID', 'charset' => 'utf8'),
		'login_password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => 'ログインPW', 'charset' => 'utf8'),
		'kyoten_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '管理者所属拠点', 'charset' => 'utf8'),
		'kyoten_ip' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '所属拠点IPアドレス', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'admin_id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB', 'comment' => 'Myaon管理者')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'admin_id' => 1,
			'admin_name' => 'Lorem ipsum dolor sit amet',
			'login_id' => 'Lorem ipsum dolor ',
			'login_password' => 'Lorem ipsum dolor ',
			'kyoten_name' => 'Lorem ipsum dolor sit amet',
			'kyoten_ip' => 'Lorem ipsum dolor '
		),
	);

}
