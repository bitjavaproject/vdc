<?php
App::uses('FamilyActivityInfo', 'Model');

/**
 * FamilyActivityInfo Test Case
 *
 */
class FamilyActivityInfoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.family_activity_info',
		'app.activity',
		'app.gender',
		'app.family_info',
		'app.organization_involvement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FamilyActivityInfo = ClassRegistry::init('FamilyActivityInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FamilyActivityInfo);

		parent::tearDown();
	}

}
