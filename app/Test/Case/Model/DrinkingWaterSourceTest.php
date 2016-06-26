<?php
App::uses('DrinkingWaterSource', 'Model');

/**
 * DrinkingWaterSource Test Case
 *
 */
class DrinkingWaterSourceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.drinking_water_source'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DrinkingWaterSource = ClassRegistry::init('DrinkingWaterSource');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DrinkingWaterSource);

		parent::tearDown();
	}

}
