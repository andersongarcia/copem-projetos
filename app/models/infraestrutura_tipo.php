<?php
class InfraestruturaTipo extends AppModel {

	var $name = 'InfraestruturaTipo';
	var $validate = array(
		'descricao' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Infraestrutura' => array(
			'className' => 'Infraestrutura',
			'foreignKey' => 'infraestrutura_tipo_id',
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

	var $hasAndBelongsToMany = array(
		'InfraestruturaTipo' => array(
			'className' => 'InfraestruturaTipo',
			'joinTable' => 'infraestrutura_tipos_projeto_tipos',
			'foreignKey' => 'infraestrutura_tipo_id',
			'associationForeignKey' => 'projeto_tipo_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => 'InfraestruturaTipo.id',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);
}
?>