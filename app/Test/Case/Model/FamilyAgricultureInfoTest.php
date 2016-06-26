<?php
App::uses('FamilyAgricultureInfo', 'Model');

/**
 * FamilyAgricultureInfo Test Case
 *
 */
class FamilyAgricultureInfoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.family_agriculture_info',
		'app.product',
		'app.product_type',
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
		$this->FamilyAgricultureInfo = ClassRegistry::init('FamilyAgricultureInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FamilyAgricultureInfo);

		parent::tearDown();
	}

}
