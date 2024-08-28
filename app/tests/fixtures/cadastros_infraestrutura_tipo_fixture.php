<?php 
/* SVN FILE: $Id$ */
/* CadastrosInfraestruturaTipo Fixture generated on: 2010-02-05 13:18:44 : 1265375924*/

class CadastrosInfraestruturaTipoFixture extends CakeTestFixture {
	var $name = 'CadastrosInfraestruturaTipo';
	var $table = 'cadastros_infraestrutura_tipos';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'cadastro_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'infraestrutura_tipo_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'indexes' => array()
	);
	var $records = array(array(
		'id'  => 1,
		'cadastro_id'  => 1,
		'infraestrutura_tipo_id'  => 1
	));
}
?>