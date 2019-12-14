<?php
/**
 * CopyTest01 Fixture
 */
class CopyTest01Fixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'copy_test_01';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'testNo' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'testName' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 256, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'testDate' => array('type' => 'date', 'null' => false, 'default' => null),
		'testComment' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 256, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'testNo', 'unique' => 1)
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
			'testNo' => 1,
			'testName' => 'Lorem ipsum dolor sit amet',
			'testDate' => '2019-11-20',
			'testComment' => 'Lorem ipsum dolor sit amet'
		),
	);

}
