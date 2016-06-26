<?php
App::uses('TrainingType', 'Model');

/**
 * TrainingType Test Case
 *
 */
class TrainingTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.training_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TrainingType = ClassRegistry::init('TrainingType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TrainingType);

		parent::tearDown();
	}

}
