<?php
App::uses('TrainingPeriod', 'Model');

/**
 * TrainingPeriod Test Case
 *
 */
class TrainingPeriodTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.training_period'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TrainingPeriod = ClassRegistry::init('TrainingPeriod');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TrainingPeriod);

		parent::tearDown();
	}

}
