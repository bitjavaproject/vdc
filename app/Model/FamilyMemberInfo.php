<?php
App::uses('AppModel', 'Model');
/**
 * FamilyMemberInfo Model
 *
 * @property FamilyAgeGroup $FamilyAgeGroup
 * @property Gender $Gender
 * @property FamilyDesgnationInfo $FamilyDesgnationInfo
 * @property FamilyInfo $FamilyInfo
 */
class FamilyMemberInfo extends AppModel {

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
		'FamilyAgeGroup' => array(
			'className' => 'FamilyAgeGroup',
			'foreignKey' => 'family_age_group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Gender' => array(
			'className' => 'Gender',
			'foreignKey' => 'gender_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FamilyDesgnationInfo' => array(
			'className' => 'FamilyDesgnationInfo',
			'foreignKey' => 'family_desgnation_info_id',
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
