<?php
class Cliente extends AppModel {

	var $name = 'Cliente';
	var $validate = array(
		'nome' => array('notempty'),
		'email' => array('rule'=>'email','allowEmpty'=>true,'required'=>false)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Contato' => array(
			'className' => 'Contato',
			'foreignKey' => 'cliente_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Projeto' => array(
			'className' => 'Projeto',
			'foreignKey' => 'cliente_id',
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