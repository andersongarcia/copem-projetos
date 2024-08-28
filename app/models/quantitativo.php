<?php
class Quantitativo extends AppModel {

	var $name = 'Quantitativo';
	var $validate = array(
		'projeto_id' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Projeto' => array(
			'className' => 'Projeto',
			'foreignKey' => 'projeto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>