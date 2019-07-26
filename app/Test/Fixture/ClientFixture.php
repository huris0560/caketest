<?php
/**
 * Client Fixture
 */
class ClientFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'ユーザーID'),
		'pass_word' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'comment' => 'パスワード', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '名前（漢字）', 'charset' => 'utf8'),
		'name_kana' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '名前（カナ）', 'charset' => 'utf8'),
		'first_name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '姓', 'charset' => 'utf8'),
		'last_name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '名', 'charset' => 'utf8'),
		'first_name_kana' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '姓かな', 'charset' => 'utf8'),
		'last_name_kana' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '名かな', 'charset' => 'utf8'),
		'sex' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => '性別 [1男/2女]'),
		'circle_name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'サークル名', 'charset' => 'utf8'),
		'mail_addr1' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'メールアドレス1 [PCメアド]', 'charset' => 'utf8'),
		'mail_addr2' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'メールアドレス2 [スマホメアド]', 'charset' => 'utf8'),
		'mmaga_flag' => array('type' => 'tinyinteger', 'null' => false, 'default' => '0', 'unsigned' => false, 'comment' => 'メルマガフラグ [0無し/1あり]'),
		'Tel_m1' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => '電話番号1 [自宅]'),
		'Tel_m2' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => '電話番号２ [スマホ]'),
		'fax1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'comment' => 'ファックス番号', 'charset' => 'utf8'),
		'birth_day' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '生年月日'),
		'regist_day' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '登録日'),
		'update_day' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => '情報更新日'),
		'zipcode1_1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'comment' => '郵便番号1-1 [請求先住所]', 'charset' => 'utf8'),
		'zipcode1_2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'comment' => '郵便番号1-2 [請求先住所]', 'charset' => 'utf8'),
		'addr_1_1' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '都道府県1 [請求先住所]', 'charset' => 'utf8'),
		'addr_1_2' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '市区町村1 [請求先住所]', 'charset' => 'utf8'),
		'addr_1_3' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '番地１ [請求先住所]', 'charset' => 'utf8'),
		'addr_1_4' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '建物部屋番号１ [請求先住所]', 'charset' => 'utf8'),
		'atena_name1' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '宛名１ [請求先住所]', 'charset' => 'utf8'),
		'Tel_1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'comment' => '宛先電話番号１ [請求先住所]', 'charset' => 'utf8'),
		'zipcode2_1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'comment' => '郵便番号2-1', 'charset' => 'utf8'),
		'zipcode2_2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'comment' => '郵便番号2-2', 'charset' => 'utf8'),
		'addr_２_1' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '都道府県2', 'charset' => 'utf8'),
		'addr_２_2' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '市区町村2', 'charset' => 'utf8'),
		'addr_２_3' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '番地２', 'charset' => 'utf8'),
		'addr_２_4' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '建物部屋番号２', 'charset' => 'utf8'),
		'atena_name2' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '宛名2', 'charset' => 'utf8'),
		'Tel_2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'comment' => '宛先電話番号2', 'charset' => 'utf8'),
		'zipcode3_1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'comment' => '郵便番号3-1', 'charset' => 'utf8'),
		'zipcode3_2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'comment' => '郵便番号3-2', 'charset' => 'utf8'),
		'addr_3_1' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '都道府県3', 'charset' => 'utf8'),
		'addr_3_2' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '市区町村3', 'charset' => 'utf8'),
		'addr_3_3' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '番地3', 'charset' => 'utf8'),
		'addr_3_4' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '建物部屋番号3', 'charset' => 'utf8'),
		'atena_name3' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '宛名3', 'charset' => 'utf8'),
		'Tel_3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'comment' => '宛先電話番号3', 'charset' => 'utf8'),
		'user_age' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'comment' => '年齢', 'charset' => 'utf8'),
		'teishi_day' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => '利用停止日'),
		'teishi_flag' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => '利用停止フラグ'),
		'user_str' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '備考', 'charset' => 'utf8'),
		'myaon_point' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Myaonポイント'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'user_id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB', 'comment' => 'クライアント')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'user_id' => 1,
			'pass_word' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'name_kana' => 'Lorem ipsum dolor sit amet',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'first_name_kana' => 'Lorem ipsum dolor sit amet',
			'last_name_kana' => 'Lorem ipsum dolor sit amet',
			'sex' => 1,
			'circle_name' => 'Lorem ipsum dolor sit amet',
			'mail_addr1' => 'Lorem ipsum dolor sit amet',
			'mail_addr2' => 'Lorem ipsum dolor sit amet',
			'mmaga_flag' => 1,
			'Tel_m1' => 1,
			'Tel_m2' => 1,
			'fax1' => 'Lorem ipsum dolor sit amet',
			'birth_day' => '2019-07-22',
			'regist_day' => '2019-07-22',
			'update_day' => '2019-07-22',
			'zipcode1_1' => 'Lorem ipsum dolor sit amet',
			'zipcode1_2' => 'Lorem ipsum dolor sit amet',
			'addr_1_1' => 'Lorem ipsum dolor sit amet',
			'addr_1_2' => 'Lorem ipsum dolor sit amet',
			'addr_1_3' => 'Lorem ipsum dolor sit amet',
			'addr_1_4' => 'Lorem ipsum dolor sit amet',
			'atena_name1' => 'Lorem ipsum dolor sit amet',
			'Tel_1' => 'Lorem ipsum dolor sit amet',
			'zipcode2_1' => 'Lorem ipsum dolor sit amet',
			'zipcode2_2' => 'Lorem ipsum dolor sit amet',
			'addr_２_1' => 'Lorem ipsum dolor sit amet',
			'addr_２_2' => 'Lorem ipsum dolor sit amet',
			'addr_２_3' => 'Lorem ipsum dolor sit amet',
			'addr_２_4' => 'Lorem ipsum dolor sit amet',
			'atena_name2' => 'Lorem ipsum dolor sit amet',
			'Tel_2' => 'Lorem ipsum dolor sit amet',
			'zipcode3_1' => 'Lorem ipsum dolor sit amet',
			'zipcode3_2' => 'Lorem ipsum dolor sit amet',
			'addr_3_1' => 'Lorem ipsum dolor sit amet',
			'addr_3_2' => 'Lorem ipsum dolor sit amet',
			'addr_3_3' => 'Lorem ipsum dolor sit amet',
			'addr_3_4' => 'Lorem ipsum dolor sit amet',
			'atena_name3' => 'Lorem ipsum dolor sit amet',
			'Tel_3' => 'Lorem ipsum dolor sit amet',
			'user_age' => 'Lorem ipsum dolor sit amet',
			'teishi_day' => '2019-07-22',
			'teishi_flag' => 1,
			'user_str' => 'Lorem ipsum dolor sit amet',
			'myaon_point' => 1
		),
	);

}
