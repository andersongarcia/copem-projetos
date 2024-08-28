<?php
class Superestrutura extends AppModel {

	var $name = 'Superestrutura';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Projeto' => array(
			'className' => 'Projeto',
			'foreignKey' => 'projeto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Movimentacao' => array(
			'className' => 'Movimentacao',
			'foreignKey' => 'movimentacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Material' => array(
			'className' => 'Material',
			'foreignKey' => 'material_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Moldagem' => array(
			'className' => 'Moldagem',
			'foreignKey' => 'moldagem_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Montagem' => array(
			'className' => 'Montagem',
			'foreignKey' => 'montagem_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Obra' => array(
			'className' => 'Obra',
			'foreignKey' => 'obra_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasOne = array(
		'ObraEmViga' => array(
			'className' => 'ObraEmViga',
			'foreignKey' => 'superestrutura_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ObraEmLaje' => array(
			'className' => 'ObraEmLaje',
			'foreignKey' => 'superestrutura_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ObraEmCaixao' => array(
			'className' => 'ObraEmCaixao',
			'foreignKey' => 'superestrutura_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
        );
}
?>