<?php
App::uses('ElectricitySource', 'Model');

/**
 * ElectricitySource Test Case
 *
 */
class ElectricitySourceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.electricity_source'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ElectricitySource = ClassRegistry::init('ElectricitySource');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ElectricitySource);

		parent::tearDown();
	}

}
