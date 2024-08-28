<?php 
/* SVN FILE: $Id$ */
/* CadastrosProjetoTipo Fixture generated on: 2010-02-04 14:05:11 : 1265292311*/

class CadastrosProjetoTipoFixture extends CakeTestFixture {
	var $name = 'CadastrosProjetoTipo';
	var $table = 'cadastros_projeto_tipos';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'cadastro_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'projeto_tipo_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'formulario_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'indexes' => array()
	);
	var $records = array(array(
		'id'  => 1,
		'cadastro_id'  => 1,
		'projeto_tipo_id'  => 1,
		'formulario_id'  => 1
	));
}
?>