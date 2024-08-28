<?php
class Contrato extends AppModel {

	var $name = 'Contrato';
	var $validate = array(
		'orcamento_valor' => array('rule'=>'money', 'allowEmpty'=>true),
		'data_do_envio' => array('rule'=>'date', 'allowEmpty'=>true),
		'data_de_aprovacao' => array('rule'=>'date', 'allowEmpty'=>true),
		'numero_de_parcelas' => array('rule'=>'numeric', 'allowEmpty'=>true),
		'prazo_final' => array('rule'=>'date', 'allowEmpty'=>true),
		'data_primeira_nota' => array('rule'=>'date', 'allowEmpty'=>true),
		'data_assinatura_do_contrato' => array('rule'=>'date', 'allowEmpty'=>true),
		'caucao_valor' => array('rule'=>'money', 'allowEmpty'=>true),
		'caucao_data_do_pagamento' => array('rule'=>'date', 'allowEmpty'=>true),
		'caucao_data_do_ressarcimento' => array('rule'=>'date', 'allowEmpty'=>true),
		'tam_data_de_solicitacao' => array('rule'=>'date', 'allowEmpty'=>true),
		'tam_data_de_emissao' => array('rule'=>'date', 'allowEmpty'=>true),
		'tc_data_de_solicitacao' => array('rule'=>'date', 'allowEmpty'=>true),
		'tc_data_de_emissao' => array('rule'=>'date', 'allowEmpty'=>true),
		'atestado_data_de_solicitacao' => array('rule'=>'date', 'allowEmpty'=>true),
		'atestado_data_de_emissao' => array('rule'=>'date', 'allowEmpty'=>true)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'ContratosRegistrosProfissional' => array(
			'className' => 'ContratosRegistrosProfissional',
			'foreignKey' => 'contrato_id',
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
?>