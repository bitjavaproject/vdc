<?php
App::uses('AppModel', 'Model');
/**
 * FamilyLoanInfo Model
 *
 * @property LoanSource $LoanSource
 * @property FamilyInfo $FamilyInfo
 */
class FamilyLoanInfo extends AppModel {

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
		'LoanSource' => array(
			'className' => 'LoanSource',
			'foreignKey' => 'loan_source_id',
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
