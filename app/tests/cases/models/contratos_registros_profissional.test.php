<?php 
/* SVN FILE: $Id$ */
/* ContratosRegistrosProfissional Test cases generated on: 2010-02-07 17:45:04 : 1265564704*/
App::import('Model', 'ContratosRegistrosProfissional');

class ContratosRegistrosProfissionalTestCase extends CakeTestCase {
	var $ContratosRegistrosProfissional = null;
	var $fixtures = array('app.contratos_registros_profissional', 'app.contrato');

	function startTest() {
		$this->ContratosRegistrosProfissional =& ClassRegistry::init('ContratosRegistrosProfissional');
	}

	function testContratosRegistrosProfissionalInstance() {
		$this->assertTrue(is_a($this->ContratosRegistrosProfissional, 'ContratosRegistrosProfissional'));
	}

	function testContratosRegistrosProfissionalFind() {
		$this->ContratosRegistrosProfissional->recursive = -1;
		$results = $this->ContratosRegistrosProfissional->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('ContratosRegistrosProfissional' => array(
			'id'  => 1,
			'contrato_id'  => 1,
			'documento'  => 'Lorem ip',
			'profissional'  => 'Lorem ipsum dolor sit amet',
			'data_de_pagamento'  => '2010-02-07',
			'valor'  => '2010-02-07'
		));
		$this->assertEqual($results, $expected);
	}
}
?>