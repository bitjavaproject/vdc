<?php
App::uses('HouseCondition', 'Model');

/**
 * HouseCondition Test Case
 *
 */
class HouseConditionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.house_condition'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HouseCondition = ClassRegistry::init('HouseCondition');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HouseCondition);

		parent::tearDown();
	}

}
