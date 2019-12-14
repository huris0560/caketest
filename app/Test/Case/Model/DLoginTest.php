<?php
App::uses('DLogin', 'Model');

/**
 * DLogin Test Case
 */
class DLoginTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.d_login'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DLogin = ClassRegistry::init('DLogin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DLogin);

		parent::tearDown();
	}

}
