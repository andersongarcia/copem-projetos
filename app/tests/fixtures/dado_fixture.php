<?php 
/* SVN FILE: $Id$ */
/* Dado Fixture generated on: 2010-02-11 17:38:19 : 1265909899*/

class DadoFixture extends CakeTestFixture {
	var $name = 'Dado';
	var $table = 'dados';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'projeto_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'servico_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'empresa' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'projeto_id'  => 1,
		'servico_id'  => 1,
		'empresa'  => 'Lorem ipsum dolor sit amet'
	));
}
?>