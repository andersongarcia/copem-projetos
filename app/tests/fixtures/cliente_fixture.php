<?php 
/* SVN FILE: $Id$ */
/* Cliente Fixture generated on: 2010-02-06 20:05:00 : 1265486700*/

class ClienteFixture extends CakeTestFixture {
	var $name = 'Cliente';
	var $table = 'clientes';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nome' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'logradouro' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 200),
		'numero' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 5),
		'complemento' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'bairro' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'cidade' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'estado' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 2),
		'cep' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 8),
		'cnpj' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 15),
		'inscricao_estadual' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 20),
		'email' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'nome'  => 'Lorem ipsum dolor sit amet',
		'logradouro'  => 'Lorem ipsum dolor sit amet',
		'numero'  => 'Lor',
		'complemento'  => 'Lorem ipsum dolor sit amet',
		'bairro'  => 'Lorem ipsum dolor sit amet',
		'cidade'  => 'Lorem ipsum dolor sit amet',
		'estado'  => '',
		'cep'  => 'Lorem ',
		'cnpj'  => 'Lorem ipsum d',
		'inscricao_estadual'  => 'Lorem ipsum dolor ',
		'email'  => 'Lorem ipsum dolor sit amet',
		'created'  => '2010-02-06 20:05:00',
		'modified'  => '2010-02-06 20:05:00'
	));
}
?>