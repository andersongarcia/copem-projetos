<?php 
/* SVN FILE: $Id$ */
/* Formulario Fixture generated on: 2010-02-04 14:04:39 : 1265292279*/

class FormularioFixture extends CakeTestFixture {
	var $name = 'Formulario';
	var $table = 'formularios';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nome' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 30),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'nome'  => 'Lorem ipsum dolor sit amet'
	));
}
?>