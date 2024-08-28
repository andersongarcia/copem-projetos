<?php 
/* SVN FILE: $Id$ */
/* Obra Fixture generated on: 2010-02-19 11:52:20 : 1266580340*/

class ObraFixture extends CakeTestFixture {
	var $name = 'Obra';
	var $table = 'obras';
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