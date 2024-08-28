<?php
class Cadastro extends AppModel {
	var $name = 'Cadastro';
	var $validate = array(
		'nome' => array(
			'notempty' => array('rule' => array('notempty')),
		)
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed
}
?>