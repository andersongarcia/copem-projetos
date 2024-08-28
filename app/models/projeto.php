<?php
class Projeto extends AppModel {

	var $name = 'Projeto';
        var $recursive = 2;
	var $validate = array(
                'codigo'=> array('notempty'),
		'nome' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'ProjetoTipo' => array(
			'className' => 'ProjetoTipo',
			'foreignKey' => 'projeto_tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'cliente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Escopo' => array(
			'className' => 'Escopo',
			'foreignKey' => 'escopo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Transposicao' => array(
			'className' => 'Transposicao',
			'foreignKey' => 'transposicao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Classe' => array(
			'className' => 'Classe',
			'foreignKey' => 'classe_id',
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
		'Finalidade' => array(
			'className' => 'Finalidade',
			'foreignKey' => 'finalidade_id',
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
		'Terrapleno' => array(
			'className' => 'Terrapleno',
			'foreignKey' => 'terrapleno_id',
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
		)
	);

	var $hasOne = array(
		'Infraestrutura' => array(
			'className' => 'Infraestrutura',
			'foreignKey' => 'projeto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Mesoestrutura' => array(
			'className' => 'Mesoestrutura',
			'foreignKey' => 'projeto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Superestrutura' => array(
			'className' => 'Superestrutura',
			'foreignKey' => 'projeto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

        var $hasMany = array(
		'Dado' => array(
			'className' => 'Dado',
			'foreignKey' => 'projeto_id',
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
		'Subcontratado' => array(
			'className' => 'Subcontratado',
			'foreignKey' => 'projeto_id',
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