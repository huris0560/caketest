<?php
App::uses('DOrderEstimate', 'Model');

/**
 * DOrderEstimate Test Case
 */
class DOrderEstimateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.d_order_estimate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DOrderEstimate = ClassRegistry::init('DOrderEstimate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DOrderEstimate);

		parent::tearDown();
	}

}
