<?php
App::uses('FamilyInfo', 'Model');

/**
 * FamilyInfo Test Case
 *
 */
class FamilyInfoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		$this->FamilyInfo = ClassRegistry::init('FamilyInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FamilyInfo);

		parent::tearDown();
	}

}
