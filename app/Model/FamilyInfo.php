<?php
App::uses('AppModel', 'Model');
/**
 * FamilyInfo Model
 *
 * @property OrganizationInvolvement $OrganizationInvolvement
 */
class FamilyInfo extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'house_owner';
	public $actsAs = array('Containable');

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'OrganizationInvolvement' => array(
			'className' => 'OrganizationInvolvement',
			'foreignKey' => 'organization_involvement_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	public $hasMany = array(
			'FamilyMemberInfo' => array(
					'className' => 'FamilyMemberInfo',
					'foreignKey' => 'family_info_id',
					'dependent' => true,
			),
			
	);
}
