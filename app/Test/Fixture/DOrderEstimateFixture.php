<?php
/**
 * DOrderEstimate Fixture
 */
class DOrderEstimateFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'd_order_estimate';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'order_estimate_cd' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => false, 'key' => 'primary'),
		'estimate_no' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => false),
		'user_cd' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'order_cd' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false, 'key' => 'index'),
		'pack_price' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'asobi_kasan' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'kuchie_kasan' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'account_price' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'sum_price' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => false),
		'hon_size' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hon_busu' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'tozi' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'seihon' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hon_page' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'hyosi_insatu' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hyosi_yosi' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'honbun_insatu' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'honbun_yosi' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'asobi' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'asobi_kami' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'kuchie_insatu' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'kuchie_yosi' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'kuchie_sonyu_mai' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'kuchie_sonyu_ba' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'kuchie_sonyu_ba_etc' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'pack_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'delivery_method_name' => array('type' => 'binary', 'null' => true, 'default' => null),
		'delivery_date' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'event_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hyosi_deadline' => array('type' => 'date', 'null' => true, 'default' => null),
		'hyosi_discount_deadline' => array('type' => 'date', 'null' => true, 'default' => null),
		'hyosi_express_deadline' => array('type' => 'date', 'null' => true, 'default' => null),
		'honbun_deadline' => array('type' => 'date', 'null' => true, 'default' => null),
		'honbun_discount_deadline' => array('type' => 'date', 'null' => true, 'default' => null),
		'honbun_express_deadline' => array('type' => 'date', 'null' => true, 'default' => null),
		'kuchie_deadline' => array('type' => 'date', 'null' => true, 'default' => null),
		'kuchie_discount_deadline' => array('type' => 'date', 'null' => true, 'default' => null),
		'kuchie_express_deadline' => array('type' => 'date', 'null' => true, 'default' => null),
		'pack_discount_ratio' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => false),
		'pack_discount_price' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'pack_express_ratio' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => false),
		'pack_express_price' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'hyosi_discount_ratio' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => false),
		'hyosi_discount_price' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'hyosi_express_ratio' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => false),
		'hyosi_express_price' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'honbun_discount_ratio' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => false),
		'honbun_discount_price' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'honbun_express_ratio' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => false),
		'honbun_express_price' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'kuchie_discount_ratio' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => false),
		'kuchie_discount_price' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'kuchie_express_ratio' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => false),
		'kuchie_express_price' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'put_foil_discount_ratio' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => false),
		'put_foil_discount_price' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'put_foil_express_ratio' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => false),
		'put_foil_express_price' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'other_option_price' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'other_option_detail' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'price_without_tax' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'external_tax' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'regist_timestamp' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'update_timestamp' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'order_timestamp' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'admin_nyuko_status' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1, 'unsigned' => false),
		'admin_label_color' => array('type' => 'string', 'null' => false, 'default' => 'FFFFFF', 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'admin_nyuko_memo' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'keizoku_flag' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1, 'unsigned' => false),
		'hyosi_complete_status' => array('type' => 'enum(\'0\',\'1\')', 'null' => true, 'default' => '0', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hyosi_complete_timestamp' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'honbun_complete_status' => array('type' => 'enum(\'0\',\'1\')', 'null' => true, 'default' => '0', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'honbun_complete_timestamp' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'kuchie_complete_status' => array('type' => 'enum(\'0\',\'1\')', 'null' => true, 'default' => '0', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'kuchie_complete_timestamp' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'hyosi_limit_time' => array('type' => 'time', 'null' => true, 'default' => '15:00:00'),
		'hyosi_discount_limit_time' => array('type' => 'time', 'null' => true, 'default' => '15:00:00'),
		'hyosi_express_limit_time' => array('type' => 'time', 'null' => true, 'default' => '15:00:00'),
		'honbun_limit_time' => array('type' => 'time', 'null' => true, 'default' => '15:00:00'),
		'honbun_discount_limit_time' => array('type' => 'time', 'null' => true, 'default' => '15:00:00'),
		'honbun_express_limit_time' => array('type' => 'time', 'null' => true, 'default' => '15:00:00'),
		'kuchie_limit_time' => array('type' => 'time', 'null' => true, 'default' => '15:00:00'),
		'kuchie_discount_limit_time' => array('type' => 'time', 'null' => true, 'default' => '15:00:00'),
		'kuchie_express_limit_time' => array('type' => 'time', 'null' => true, 'default' => '15:00:00'),
		'book_title' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'reprint_flag' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'delivery_installments' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'delivery_space_no' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'delivery_circle_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'customer_circle_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'expiration_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'tehai_flag' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 2, 'unsigned' => false),
		'tehai_kanryo_day' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'before_sum_price' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'ul_send_flag_hyosi' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1, 'unsigned' => false, 'key' => 'index'),
		'ul_send_flag_honbun' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1, 'unsigned' => false, 'key' => 'index'),
		'ul_send_flag_kuchie' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1, 'unsigned' => false, 'key' => 'index'),
		'pack_cover_price' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'pack_body_price' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'hyosi_download_status' => array('type' => 'enum(\'0\',\'1\')', 'null' => true, 'default' => '0', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hyosi_download_timestamp' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'honbun_download_status' => array('type' => 'enum(\'0\',\'1\')', 'null' => true, 'default' => '0', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'honbun_download_timestamp' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'kuchie_download_status' => array('type' => 'enum(\'0\',\'1\')', 'null' => true, 'default' => '0', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'kuchie_download_timestamp' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'order_estimate_cd', 'unique' => 1),
			'order_cd' => array('column' => 'order_cd', 'unique' => 0),
			'ul_send_flag_hyosi' => array('column' => 'ul_send_flag_hyosi', 'unique' => 0),
			'ul_send_flag_honbun' => array('column' => 'ul_send_flag_honbun', 'unique' => 0),
			'ul_send_flag_kuchie' => array('column' => 'ul_send_flag_kuchie', 'unique' => 0)
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
			'order_estimate_cd' => 1,
			'estimate_no' => 1,
			'user_cd' => 'Lorem ipsum dolor ',
			'order_cd' => 1,
			'pack_price' => 1,
			'asobi_kasan' => 1,
			'kuchie_kasan' => 1,
			'account_price' => 1,
			'sum_price' => 1,
			'hon_size' => 'Lorem ipsum dolor sit amet',
			'hon_busu' => 1,
			'tozi' => 'Lorem ipsum dolor sit amet',
			'seihon' => 'Lorem ipsum dolor sit amet',
			'hon_page' => 1,
			'hyosi_insatu' => 'Lorem ipsum dolor sit amet',
			'hyosi_yosi' => 'Lorem ipsum dolor sit amet',
			'honbun_insatu' => 'Lorem ipsum dolor sit amet',
			'honbun_yosi' => 'Lorem ipsum dolor sit amet',
			'asobi' => 'Lorem ipsum dolor sit amet',
			'asobi_kami' => 'Lorem ipsum dolor sit amet',
			'kuchie_insatu' => 'Lorem ipsum dolor sit amet',
			'kuchie_yosi' => 'Lorem ipsum dolor sit amet',
			'kuchie_sonyu_mai' => 'Lorem ipsum dolor sit amet',
			'kuchie_sonyu_ba' => 'Lorem ipsum dolor sit amet',
			'kuchie_sonyu_ba_etc' => 'Lorem ipsum dolor sit amet',
			'pack_name' => 'Lorem ipsum dolor sit amet',
			'delivery_method_name' => 'Lorem ipsum dolor sit amet',
			'delivery_date' => 'Lorem ipsum dolor ',
			'event_name' => 'Lorem ipsum dolor sit amet',
			'hyosi_deadline' => '2019-08-29',
			'hyosi_discount_deadline' => '2019-08-29',
			'hyosi_express_deadline' => '2019-08-29',
			'honbun_deadline' => '2019-08-29',
			'honbun_discount_deadline' => '2019-08-29',
			'honbun_express_deadline' => '2019-08-29',
			'kuchie_deadline' => '2019-08-29',
			'kuchie_discount_deadline' => '2019-08-29',
			'kuchie_express_deadline' => '2019-08-29',
			'pack_discount_ratio' => 1,
			'pack_discount_price' => 1,
			'pack_express_ratio' => 1,
			'pack_express_price' => 1,
			'hyosi_discount_ratio' => 1,
			'hyosi_discount_price' => 1,
			'hyosi_express_ratio' => 1,
			'hyosi_express_price' => 1,
			'honbun_discount_ratio' => 1,
			'honbun_discount_price' => 1,
			'honbun_express_ratio' => 1,
			'honbun_express_price' => 1,
			'kuchie_discount_ratio' => 1,
			'kuchie_discount_price' => 1,
			'kuchie_express_ratio' => 1,
			'kuchie_express_price' => 1,
			'put_foil_discount_ratio' => 1,
			'put_foil_discount_price' => 1,
			'put_foil_express_ratio' => 1,
			'put_foil_express_price' => 1,
			'other_option_price' => 1,
			'other_option_detail' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'price_without_tax' => 1,
			'external_tax' => 1,
			'regist_timestamp' => 1567065565,
			'update_timestamp' => 1567065565,
			'order_timestamp' => 1567065565,
			'admin_nyuko_status' => 1,
			'admin_label_color' => 'Lorem ip',
			'admin_nyuko_memo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'keizoku_flag' => 1,
			'hyosi_complete_status' => '',
			'hyosi_complete_timestamp' => 1567065565,
			'honbun_complete_status' => '',
			'honbun_complete_timestamp' => 1567065565,
			'kuchie_complete_status' => '',
			'kuchie_complete_timestamp' => 1567065565,
			'hyosi_limit_time' => '09:59:25',
			'hyosi_discount_limit_time' => '09:59:25',
			'hyosi_express_limit_time' => '09:59:25',
			'honbun_limit_time' => '09:59:25',
			'honbun_discount_limit_time' => '09:59:25',
			'honbun_express_limit_time' => '09:59:25',
			'kuchie_limit_time' => '09:59:25',
			'kuchie_discount_limit_time' => '09:59:25',
			'kuchie_express_limit_time' => '09:59:25',
			'book_title' => 'Lorem ipsum dolor sit amet',
			'reprint_flag' => 'Lorem ipsum dolor ',
			'delivery_installments' => 'Lorem ipsum dolor ',
			'delivery_space_no' => 'Lorem ipsum dolor sit amet',
			'delivery_circle_name' => 'Lorem ipsum dolor sit amet',
			'customer_circle_name' => 'Lorem ipsum dolor sit amet',
			'expiration_date' => '2019-08-29',
			'tehai_flag' => 1,
			'tehai_kanryo_day' => 1567065565,
			'before_sum_price' => 1,
			'ul_send_flag_hyosi' => 1,
			'ul_send_flag_honbun' => 1,
			'ul_send_flag_kuchie' => 1,
			'pack_cover_price' => 1,
			'pack_body_price' => 1,
			'hyosi_download_status' => '',
			'hyosi_download_timestamp' => 1567065565,
			'honbun_download_status' => '',
			'honbun_download_timestamp' => 1567065565,
			'kuchie_download_status' => '',
			'kuchie_download_timestamp' => 1567065565
		),
	);

}