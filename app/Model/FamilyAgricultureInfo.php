<?php
App::uses('AppModel', 'Model');
/**
 * FamilyAgricultureInfo Model
 *
 * @property Product $Product
 * @property FamilyInfo $FamilyInfo
 */
class FamilyAgricultureInfo extends AppModel {

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
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
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
