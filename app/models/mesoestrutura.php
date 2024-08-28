<?php
class Mesoestrutura extends AppModel {

	var $name = 'Mesoestrutura';
        var $recursive = 2;

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Projeto' => array(
			'className' => 'Projeto',
			'foreignKey' => 'projeto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Pilar' => array(
			'className' => 'Pilar',
			'foreignKey' => 'pilar_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Aparelho' => array(
			'className' => 'Aparelho',
			'foreignKey' => 'aparelho_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Aproximacao' => array(
			'className' => 'Aproximacao',
			'foreignKey' => 'aproximacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>