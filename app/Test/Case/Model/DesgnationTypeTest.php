<?php
App::uses('DesgnationType', 'Model');

/**
 * DesgnationType Test Case
 *
 */
class DesgnationTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.desgnation_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DesgnationType = ClassRegistry::init('DesgnationType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DesgnationType);

		parent::tearDown();
	}

}
