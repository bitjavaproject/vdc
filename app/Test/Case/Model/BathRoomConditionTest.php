<?php
App::uses('BathRoomCondition', 'Model');

/**
 * BathRoomCondition Test Case
 *
 */
class BathRoomConditionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bath_room_condition'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BathRoomCondition = ClassRegistry::init('BathRoomCondition');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BathRoomCondition);

		parent::tearDown();
	}

}
