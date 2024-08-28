<?php 
/* SVN FILE: $Id$ */
/* Contato Fixture generated on: 2010-02-06 18:17:35 : 1265480255*/

class ContatoFixture extends CakeTestFixture {
	var $name = 'Contato';
	var $table = 'contatos';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'cliente_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'nome' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'email' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'telefone_profissional' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 15),
		'telefone_residencial' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'length' => 15),
		'celular' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'length' => 15),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'cliente_id'  => 1,
		'nome'  => 'Lorem ipsum dolor sit amet',
		'email'  => 'Lorem ipsum dolor sit amet',
		'telefone_profissional'  => 'Lorem ipsum d',
		'telefone_residencial'  => 1,
		'celular'  => 1
	));
}
?>