<?php 
/* SVN FILE: $Id$ */
/* ContratosRegistrosProfissional Fixture generated on: 2010-02-07 17:45:01 : 1265564701*/

class ContratosRegistrosProfissionalFixture extends CakeTestFixture {
	var $name = 'ContratosRegistrosProfissional';
	var $table = 'contratos_registros_profissionais';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'contrato_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'documento' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 10),
		'profissional' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'data_de_pagamento' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'valor' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'contrato_id'  => 1,
		'documento'  => 'Lorem ip',
		'profissional'  => 'Lorem ipsum dolor sit amet',
		'data_de_pagamento'  => '2010-02-07',
		'valor'  => '2010-02-07'
	));
}
?>