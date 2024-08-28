<?php
class ProjetoTipo extends AppModel {

	var $name = 'ProjetoTipo';
        var $recursive = 2;
	var $validate = array(
		'codigo' => array('notempty'),
		'descricao' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Projeto' => array(
			'className' => 'Projeto',
			'foreignKey' => 'projeto_tipo_id',
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
		'CadastrosProjetoTipo' => array(
			'className' => 'CadastrosProjetoTipo',
			'foreignKey' => 'projeto_tipo_id',
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
		'Cadastro' => array(
			'className' => 'Cadastro',
			'joinTable' => 'cadastros_projeto_tipos',
			'foreignKey' => 'projeto_tipo_id',
			'associationForeignKey' => 'cadastro_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'InfraestruturaTipo' => array(
			'className' => 'InfraestruturaTipo',
			'joinTable' => 'infraestrutura_tipos_projeto_tipos',
			'foreignKey' => 'projeto_tipo_id',
			'associationForeignKey' => 'infraestrutura_tipo_id',
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