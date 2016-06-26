<?php
App::uses('LoanSource', 'Model');

/**
 * LoanSource Test Case
 *
 */
class LoanSourceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.loan_source'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LoanSource = ClassRegistry::init('LoanSource');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LoanSource);

		parent::tearDown();
	}

}
