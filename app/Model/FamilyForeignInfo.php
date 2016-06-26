<?php
App::uses('AppModel', 'Model');
/**
 * FamilyForeignInfo Model
 *
 * @property Gender $Gender
 * @property FamilyInfo $FamilyInfo
 */
class FamilyForeignInfo extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'family_info_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Gender' => array(
			'className' => 'Gender',
			'foreignKey' => 'gender_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FamilyInfo' => array(
			'className' => 'FamilyInfo',
			'foreignKey' => 'family_info_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
