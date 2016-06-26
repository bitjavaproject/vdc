<?php
/**
 * FamilyForeignInfoFixture
 *
 */
class FamilyForeignInfoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'gender_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'country_name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'total' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'time_period' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'gender_id' => 1,
			'country_name' => 'Lorem ipsum dolor sit amet',
			'total' => 1,
			'time_period' => 1,
			'family_info_id' => 1,
			'created' => '2016-04-09 07:28:05',
			'modified_by' => 1,
			'updated' => '2016-04-09 07:28:05'
		),
	);

}
