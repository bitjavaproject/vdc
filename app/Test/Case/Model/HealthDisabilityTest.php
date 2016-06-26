<?php
App::uses('HealthDisability', 'Model');

/**
 * HealthDisability Test Case
 *
 */
class HealthDisabilityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.health_disability'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HealthDisability = ClassRegistry::init('HealthDisability');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HealthDisability);

		parent::tearDown();
	}

}
