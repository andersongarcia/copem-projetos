<?php
class ObraEmLaje extends AppModel {

	var $name = 'ObraEmLaje';
	var $useTable = 'obra_em_laje';
	var $validate = array(
		'superestrutura_id' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Superestrutura' => array(
			'className' => 'Superestrutura',
			'foreignKey' => 'superestrutura_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>