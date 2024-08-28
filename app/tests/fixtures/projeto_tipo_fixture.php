<?php 
/* SVN FILE: $Id$ */
/* ProjetoTipo Fixture generated on: 2010-02-05 13:58:51 : 1265378331*/

class ProjetoTipoFixture extends CakeTestFixture {
	var $name = 'ProjetoTipo';
	var $table = 'projeto_tipos';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'codigo' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 3),
		'descricao' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'codigo'  => 'L',
		'descricao'  => 'Lorem ipsum dolor sit amet'
	));
}
?>