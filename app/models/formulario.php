<?php
class Formulario extends AppModel {

	var $name = 'Formulario';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'CadastrosProjetoTipo' => array(
			'className' => 'CadastrosProjetoTipo',
			'foreignKey' => 'formulario_id',
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