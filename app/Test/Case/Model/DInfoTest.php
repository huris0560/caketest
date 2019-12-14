<?php
App::uses('DInfo', 'Model');

/**
 * DInfo Test Case
 */
class DInfoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.d_info'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DInfo = ClassRegistry::init('DInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DInfo);

		parent::tearDown();
	}

}
