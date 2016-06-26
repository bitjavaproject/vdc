<?php
App::uses('FamilyLoanInfo', 'Model');

/**
 * FamilyLoanInfo Test Case
 *
 */
class FamilyLoanInfoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.family_loan_info',
		'app.loan_source',
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
		$this->FamilyLoanInfo = ClassRegistry::init('FamilyLoanInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FamilyLoanInfo);

		parent::tearDown();
	}

}
