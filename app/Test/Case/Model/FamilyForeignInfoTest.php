<?php
App::uses('FamilyForeignInfo', 'Model');

/**
 * FamilyForeignInfo Test Case
 *
 */
class FamilyForeignInfoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.family_foreign_info',
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
		$this->FamilyForeignInfo = ClassRegistry::init('FamilyForeignInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FamilyForeignInfo);

		parent::tearDown();
	}

}
