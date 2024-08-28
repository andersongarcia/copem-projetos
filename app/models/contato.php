<?php
class Contato extends AppModel {

	var $name = 'Contato';
	var $validate = array(
		'nome' => array('notempty'),
		'email' => array(
                    'rule'=>'email',
                    'allowEmpty'=>true,
                    'required'=>false,
                    'message'=>'E-mail inválido'
                )
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'cliente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>