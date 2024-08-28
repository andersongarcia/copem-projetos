<?php
class Infraestrutura extends AppModel {

	var $name = 'Infraestrutura';
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
		'InfraestruturaTipo' => array(
			'className' => 'InfraestruturaTipo',
			'foreignKey' => 'infraestrutura_tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tubulao' => array(
			'className' => 'Tubulao',
			'foreignKey' => 'tubulao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Estacao' => array(
			'className' => 'Estacao',
			'foreignKey' => 'estacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Estaca' => array(
			'className' => 'Estaca',
			'foreignKey' => 'estaca_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Sapata' => array(
			'className' => 'Sapata',
			'foreignKey' => 'sapata_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Talude' => array(
			'className' => 'Talude',
			'foreignKey' => 'talude_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Terreno' => array(
			'className' => 'Terreno',
			'foreignKey' => 'terreno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>