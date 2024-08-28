<?php 
/* SVN FILE: $Id$ */
/* Infraestrutura Fixture generated on: 2010-02-01 18:04:38 : 1265047478*/

class InfraestruturaFixture extends CakeTestFixture {
	var $name = 'Infraestrutura';
	var $table = 'infraestruturas';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'projeto_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'infraestrutura_tipo_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'tubulao_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'estacao_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'estaca_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'sapata_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'talude_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'alas_altura' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'alas_comprimento' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'alas_angulo' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'terreno_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'projeto_id'  => 1,
		'infraestrutura_tipo_id'  => 1,
		'tubulao_id'  => 1,
		'estacao_id'  => 1,
		'estaca_id'  => 1,
		'sapata_id'  => 1,
		'talude_id'  => 1,
		'alas_altura'  => 1,
		'alas_comprimento'  => 1,
		'alas_angulo'  => 1,
		'terreno_id'  => 1
	));
}
?>