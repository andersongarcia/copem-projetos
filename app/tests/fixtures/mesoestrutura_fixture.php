<?php 
/* SVN FILE: $Id$ */
/* Mesoestrutura Fixture generated on: 2010-02-01 19:00:42 : 1265050842*/

class MesoestruturaFixture extends CakeTestFixture {
	var $name = 'Mesoestrutura';
	var $table = 'mesoestruturas';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'projeto_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'pilar_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'aparelho_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'travessa_do_encontro_vao' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'travessa_do_encontro_altura' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'travessa_do_encontro_largura' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'travessa_interna_vao' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'travessa_interna_altura' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'travessa_interna_largura' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'aproximacao_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'espessura_da_parede' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'projeto_id'  => 1,
		'pilar_id'  => 1,
		'aparelho_id'  => 1,
		'travessa_do_encontro_vao'  => 1,
		'travessa_do_encontro_altura'  => 1,
		'travessa_do_encontro_largura'  => 1,
		'travessa_interna_vao'  => 1,
		'travessa_interna_altura'  => 1,
		'travessa_interna_largura'  => 1,
		'aproximacao_id'  => 1,
		'espessura_da_parede'  => 1
	));
}
?>