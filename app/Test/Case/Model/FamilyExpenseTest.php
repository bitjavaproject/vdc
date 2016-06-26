<?php
App::uses('FamilyExpense', 'Model');

/**
 * FamilyExpense Test Case
 *
 */
class FamilyExpenseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.family_expense',
		'app.expense',
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
		$this->FamilyExpense = ClassRegistry::init('FamilyExpense');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FamilyExpense);

		parent::tearDown();
	}

}
