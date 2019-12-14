<?php
/**
 * DMukeiMain Fixture
 */
class DMukeiMainFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'd_mukei_main';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'd_mukei_cd' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => false, 'key' => 'primary'),
		'user_cd' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => false),
		'str_flag' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'sbt_flag' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'tanto_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'extra_mail' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'pay_type_flag' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2, 'unsigned' => false),
		's_kikan_no' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cast_no' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'kakunin_no' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'regist_day' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'nyukin_day' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'cancel_day' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'total_order_num' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'total_price' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'user_bikou' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'inside_memo' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'update_day' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'pay_type' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'kigen_day' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nyukin_mail' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'order_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'total_price_hontai' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'd_mukei_cd', 'unique' => 1)
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
			'user_cd' => 1,
			'str_flag' => 1,
			'sbt_flag' => 1,
			'tanto_name' => 'Lorem ipsum dolor sit amet',
			'extra_mail' => 'Lorem ipsum dolor sit amet',
			'pay_type_flag' => 1,
			's_kikan_no' => 'Lorem ip',
			'cast_no' => 'Lorem ipsum dolor ',
			'kakunin_no' => 'Lorem ip',
			'regist_day' => 1567844455,
			'nyukin_day' => 1567844455,
			'cancel_day' => 1567844455,
			'total_order_num' => 1,
			'total_price' => 1,
			'user_bikou' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'inside_memo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'update_day' => 1567844455,
			'pay_type' => 1,
			'kigen_day' => 'Lorem ipsum dolor ',
			'nyukin_mail' => 'Lorem ip',
			'order_id' => 'Lorem ip',
			'total_price_hontai' => 1
		),
	);

}
