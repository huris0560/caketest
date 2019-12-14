<?php
App::uses('DMukeiItem', 'Model');

/**
 * DMukeiItem Test Case
 */
class DMukeiItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.d_mukei_item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DMukeiItem = ClassRegistry::init('DMukeiItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DMukeiItem);

		parent::tearDown();
	}

}
