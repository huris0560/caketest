<?php
App::uses('DItem', 'Model');

/**
 * DItem Test Case
 */
class DItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.d_item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DItem = ClassRegistry::init('DItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DItem);

		parent::tearDown();
	}

}
