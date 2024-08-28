<?php
class InfraestruturaTiposProjetoTipo extends AppModel {

	var $name = 'InfraestruturaTiposProjetoTipo';
	var $validate = array(
		'infraestrutura_tipo_id' => array('notempty'),
		'projeto_tipo_id' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'InfraestruturaTipo' => array(
			'className' => 'InfraestruturaTipo',
			'foreignKey' => 'infraestrutura_tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ProjetoTipo' => array(
			'className' => 'ProjetoTipo',
			'foreignKey' => 'projeto_tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>