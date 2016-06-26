<?php
App::uses('OrganizationInvolvement', 'Model');

/**
 * OrganizationInvolvement Test Case
 *
 */
class OrganizationInvolvementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.organization_involvement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OrganizationInvolvement = ClassRegistry::init('OrganizationInvolvement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OrganizationInvolvement);

		parent::tearDown();
	}

}
