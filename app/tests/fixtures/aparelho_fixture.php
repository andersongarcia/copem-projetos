<?php 
/* SVN FILE: $Id$ */
/* Aparelho Fixture generated on: 2010-01-23 03:15:57 : 1264216557*/

class AparelhoFixture extends CakeTestFixture {
	var $name = 'Aparelho';
	var $table = 'aparelhos';
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