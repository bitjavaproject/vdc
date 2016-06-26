<?php
App::uses('FamilyDisasterInfo', 'Model');

/**
 * FamilyDisasterInfo Test Case
 *
 */
class FamilyDisasterInfoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.family_disaster_info',
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
		$this->FamilyDisasterInfo = ClassRegistry::init('FamilyDisasterInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FamilyDisasterInfo);

		parent::tearDown();
	}

}
