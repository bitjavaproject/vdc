<?php
App::uses('AppModel', 'Model');
/**
 * FamilyDesgnationInfo Model
 *
 * @property DesignationType $DesignationType
 * @property Gender $Gender
 * @property FamilyInfo $FamilyInfo
 * @property FamilyMemberInfo $FamilyMemberInfo
 */
class FamilyDesgnationInfo extends AppModel {

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
		'DesgnationType' => array(
			'className' => 'DesgnationType',
			'foreignKey' => 'desgnation_type_id',
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
		'FamilyInfo' => array(
			'className' => 'FamilyInfo',
			'foreignKey' => 'family_info_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'FamilyMemberInfo' => array(
			'className' => 'FamilyMemberInfo',
			'foreignKey' => 'family_desgnation_info_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
