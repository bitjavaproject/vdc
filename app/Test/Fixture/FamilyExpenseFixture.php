<?php
/**
 * FamilyExpenseFixture
 *
 */
class FamilyExpenseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'expense_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'family_info_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'expense_id' => 1,
			'family_info_id' => 1,
			'created' => '2016-04-09 07:31:35',
			'modified_by' => 1,
			'updated' => '2016-04-09 07:31:35'
		),
	);

}
