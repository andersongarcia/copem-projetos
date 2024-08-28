<?php 
/* SVN FILE: $Id$ */
/* InfraestruturaTiposProjetoTipo Fixture generated on: 2010-02-05 13:51:12 : 1265377872*/

class InfraestruturaTiposProjetoTipoFixture extends CakeTestFixture {
	var $name = 'InfraestruturaTiposProjetoTipo';
	var $table = 'infraestrutura_tipos_projeto_tipos';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'key' => 'primary'),
		'infraestrutura_tipo_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'projeto_tipo_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'indexes' => array()
	);
	var $records = array(array(
		'id'  => 1,
		'infraestrutura_tipo_id'  => 1,
		'projeto_tipo_id'  => 1
	));
}
?>