<?php
App::uses('CopyTest02', 'Model');

/**
 * CopyTest02 Test Case
 */
class CopyTest02Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.copy_test02'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CopyTest02 = ClassRegistry::init('CopyTest02');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CopyTest02);

		parent::tearDown();
	}

}
