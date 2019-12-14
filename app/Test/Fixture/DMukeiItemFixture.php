<?php
/**
 * DMukeiItem Fixture
 */
class DMukeiItemFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'd_mukei_item';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'd_mukei_cd' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => false, 'key' => 'index'),
		'm_item_name_cd' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => false, 'key' => 'index'),
		'm_item_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sales_price' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => false),
		'order_num' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => false),
		'sub_total' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => false),
		'regist_day' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'update_day' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'hontai_price' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'sub_total_hontai' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'indexes' => array(
			'd_mukei_cd' => array('column' => 'd_mukei_cd', 'unique' => 0),
			'm_item_name_cd' => array('column' => 'm_item_name_cd', 'unique' => 0)
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
			'd_mukei_cd' => 1,
			'm_item_name_cd' => 1,
			'm_item_name' => 'Lorem ipsum dolor sit amet',
			'sales_price' => 1,
			'order_num' => 1,
			'sub_total' => 1,
			'regist_day' => 1567837196,
			'update_day' => 1567837196,
			'hontai_price' => 1,
			'sub_total_hontai' => 1
		),
	);

}
