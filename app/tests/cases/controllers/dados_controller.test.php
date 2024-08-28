<?php 
/* SVN FILE: $Id$ */
/* DadosController Test cases generated on: 2010-02-11 17:39:02 : 1265909942*/
App::import('Controller', 'Dados');

class TestDados extends DadosController {
	var $autoRender = false;
}

class DadosControllerTest extends CakeTestCase {
	var $Dados = null;

	function startTest() {
		$this->Dados = new TestDados();
		$this->Dados->constructClasses();
	}

	function testDadosControllerInstance() {
		$this->assertTrue(is_a($this->Dados, 'DadosController'));
	}

	function endTest() {
		unset($this->Dados);
	}
}
?>