<?php
/**
 * Customer Fixture
 */
class CustomerFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'customer';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'ID'),
		'customer_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '顧客ID', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '顧客PWも', 'charset' => 'utf8'),
		'created' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'アカウント作成日'),
		'modified' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'アカウント更新日'),
		'old_password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '旧パス登録用（仮', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'id' => 1,
			'customer_name' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'created' => '2019-08-03',
			'modified' => '2019-08-03',
			'old_password' => 'Lorem ipsum dolor sit amet'
		),
	);

}
