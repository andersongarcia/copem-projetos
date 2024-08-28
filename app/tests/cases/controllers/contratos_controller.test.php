<?php 
/* SVN FILE: $Id$ */
/* ContratosController Test cases generated on: 2010-02-07 17:56:50 : 1265565410*/
App::import('Controller', 'Contratos');

class TestContratos extends ContratosController {
	var $autoRender = false;
}

class ContratosControllerTest extends CakeTestCase {
	var $Contratos = null;

	function startTest() {
		$this->Contratos = new TestContratos();
		$this->Contratos->constructClasses();
	}

	function testContratosControllerInstance() {
		$this->assertTrue(is_a($this->Contratos, 'ContratosController'));
	}

	function endTest() {
		unset($this->Contratos);
	}
}
?>