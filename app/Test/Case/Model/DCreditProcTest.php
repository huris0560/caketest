<?php
App::uses('DCreditProc', 'Model');

/**
 * DCreditProc Test Case
 */
class DCreditProcTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.d_credit_proc'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DCreditProc = ClassRegistry::init('DCreditProc');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DCreditProc);

		parent::tearDown();
	}

}
