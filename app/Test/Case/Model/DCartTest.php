<?php
App::uses('DCart', 'Model');

/**
 * DCart Test Case
 */
class DCartTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.d_cart'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DCart = ClassRegistry::init('DCart');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DCart);

		parent::tearDown();
	}

}
