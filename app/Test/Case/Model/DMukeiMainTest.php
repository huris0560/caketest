<?php
App::uses('DMukeiMain', 'Model');

/**
 * DMukeiMain Test Case
 */
class DMukeiMainTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.d_mukei_main',
		'app.order'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DMukeiMain = ClassRegistry::init('DMukeiMain');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DMukeiMain);

		parent::tearDown();
	}

}
