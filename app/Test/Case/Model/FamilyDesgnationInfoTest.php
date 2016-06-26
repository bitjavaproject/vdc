<?php
App::uses('FamilyDesgnationInfo', 'Model');

/**
 * FamilyDesgnationInfo Test Case
 *
 */
class FamilyDesgnationInfoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.family_desgnation_info',
		'app.designation_type',
		'app.gender',
		'app.family_info',
		'app.organization_involvement',
		'app.family_member_info',
		'app.family_age_group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FamilyDesgnationInfo = ClassRegistry::init('FamilyDesgnationInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FamilyDesgnationInfo);

		parent::tearDown();
	}

}
