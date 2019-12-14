<?php
App::uses('CopyTest01', 'Model');

/**
 * CopyTest01 Test Case
 */
class CopyTest01Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.copy_test01'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CopyTest01 = ClassRegistry::init('CopyTest01');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CopyTest01);

		parent::tearDown();
	}

}
