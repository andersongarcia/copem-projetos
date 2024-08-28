<?php
class CadastrosProjetoTipo extends AppModel {

	var $name = 'CadastrosProjetoTipo';
        var $recursive = 2;
	var $validate = array(
		'cadastro_id' => array('notempty'),
		'projeto_tipo_id' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Cadastro' => array(
			'className' => 'Cadastro',
			'foreignKey' => 'cadastro_id',
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
		),
		'Formulario' => array(
			'className' => 'Formulario',
			'foreignKey' => 'formulario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>