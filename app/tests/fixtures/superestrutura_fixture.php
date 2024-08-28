<?php 
/* SVN FILE: $Id$ */
/* Superestrutura Fixture generated on: 2010-02-01 19:02:05 : 1265050925*/

class SuperestruturaFixture extends CakeTestFixture {
	var $name = 'Superestrutura';
	var $table = 'superestruturas';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'projeto_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'projeto_padrao' => array('type'=>'boolean', 'null' => false, 'default' => NULL),
		'projeto_padrao_vao' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'projeto_padrao_largura' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'movimentacao_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'comprimento' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'numero_de_celulas' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'numero_de_vaos' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'vao' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'vao_livre' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'vao_maior' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'vao_menor' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'altura' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'espessura' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'espessura_da_laje' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'balanco' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'largura' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'curva' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'esconsidade' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'material_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'moldagem_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'montagem_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'projeto_id'  => 1,
		'projeto_padrao'  => 1,
		'projeto_padrao_vao'  => 1,
		'projeto_padrao_largura'  => 1,
		'movimentacao_id'  => 1,
		'comprimento'  => 1,
		'numero_de_celulas'  => 1,
		'numero_de_vaos'  => 1,
		'vao'  => 1,
		'vao_livre'  => 1,
		'vao_maior'  => 1,
		'vao_menor'  => 1,
		'altura'  => 1,
		'espessura'  => 1,
		'espessura_da_laje'  => 1,
		'balanco'  => 1,
		'largura'  => 1,
		'curva'  => 1,
		'esconsidade'  => 1,
		'material_id'  => 1,
		'moldagem_id'  => 1,
		'montagem_id'  => 1
	));
}
?>