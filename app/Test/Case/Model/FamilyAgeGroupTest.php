<?php
App::uses('FamilyAgeGroup', 'Model');

/**
 * FamilyAgeGroup Test Case
 *
 */
class FamilyAgeGroupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.family_age_group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FamilyAgeGroup = ClassRegistry::init('FamilyAgeGroup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FamilyAgeGroup);

		parent::tearDown();
	}

}
