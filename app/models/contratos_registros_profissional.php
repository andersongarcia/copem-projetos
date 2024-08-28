<?php
class ContratosRegistrosProfissional extends AppModel {

	var $name = 'ContratosRegistrosProfissional';
	var $validate = array(
		'contrato_id' => array('notempty'),
		'data_de_pagamento' => array('rule'=>'date','allowEmpty'=>true)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Contrato' => array(
			'className' => 'Contrato',
			'foreignKey' => 'contrato_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>