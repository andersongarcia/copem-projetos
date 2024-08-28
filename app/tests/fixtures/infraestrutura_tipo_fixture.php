<?php 
/* SVN FILE: $Id$ */
/* InfraestruturaTipo Fixture generated on: 2010-02-05 13:19:51 : 1265375991*/

class InfraestruturaTipoFixture extends CakeTestFixture {
	var $name = 'InfraestruturaTipo';
	var $table = 'infraestrutura_tipos';
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