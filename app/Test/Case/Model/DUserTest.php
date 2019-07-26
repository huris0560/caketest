<?php
App::uses('DUser', 'Model');

/**
 * DUser Test Case
 */
class DUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.d_user',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DUser = ClassRegistry::init('DUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DUser);

		parent::tearDown();
	}

}
