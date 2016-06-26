<?php
App::uses('CookingMaterial', 'Model');

/**
 * CookingMaterial Test Case
 *
 */
class CookingMaterialTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cooking_material'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CookingMaterial = ClassRegistry::init('CookingMaterial');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CookingMaterial);

		parent::tearDown();
	}

}
