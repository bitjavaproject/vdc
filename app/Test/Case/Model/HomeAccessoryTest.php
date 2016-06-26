<?php
App::uses('HomeAccessory', 'Model');

/**
 * HomeAccessory Test Case
 *
 */
class HomeAccessoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.home_accessory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HomeAccessory = ClassRegistry::init('HomeAccessory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HomeAccessory);

		parent::tearDown();
	}

}
