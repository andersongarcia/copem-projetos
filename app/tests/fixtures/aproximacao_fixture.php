<?php 
/* SVN FILE: $Id$ */
/* Aproximacao Fixture generated on: 2010-01-23 03:37:14 : 1264217834*/

class AproximacaoFixture extends CakeTestFixture {
	var $name = 'Aproximacao';
	var $table = 'aproximacoes';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'descricao' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'descricao'  => 'Lorem ipsum dolor sit amet'
	));
}
?>