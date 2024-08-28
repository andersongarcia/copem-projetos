<?php 
/* SVN FILE: $Id$ */
/* ContratosRegistrosProfissionaisController Test cases generated on: 2010-02-07 17:56:25 : 1265565385*/
App::import('Controller', 'ContratosRegistrosProfissionais');

class TestContratosRegistrosProfissionais extends ContratosRegistrosProfissionaisController {
	var $autoRender = false;
}

class ContratosRegistrosProfissionaisControllerTest extends CakeTestCase {
	var $ContratosRegistrosProfissionais = null;

	function startTest() {
		$this->ContratosRegistrosProfissionais = new TestContratosRegistrosProfissionais();
		$this->ContratosRegistrosProfissionais->constructClasses();
	}

	function testContratosRegistrosProfissionaisControllerInstance() {
		$this->assertTrue(is_a($this->ContratosRegistrosProfissionais, 'ContratosRegistrosProfissionaisController'));
	}

	function endTest() {
		unset($this->ContratosRegistrosProfissionais);
	}
}
?>