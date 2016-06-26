<?php
App::uses('FamilyMemberInfo', 'Model');

/**
 * FamilyMemberInfo Test Case
 *
 */
class FamilyMemberInfoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.family_member_info',
		'app.family_age_group',
		'app.gender',
		'app.family_desgnation_info',
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
		$this->FamilyMemberInfo = ClassRegistry::init('FamilyMemberInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FamilyMemberInfo);

		parent::tearDown();
	}

}
