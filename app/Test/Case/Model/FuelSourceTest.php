<?php
App::uses('FuelSource', 'Model');

/**
 * FuelSource Test Case
 *
 */
class FuelSourceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fuel_source'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FuelSource = ClassRegistry::init('FuelSource');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FuelSource);

		parent::tearDown();
	}

}
