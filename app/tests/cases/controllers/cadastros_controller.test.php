<?php 
/* SVN FILE: $Id$ */
/* CadastrosController Test cases generated on: 2010-03-05 20:38:23 : 1267821503*/
App::import('Controller', 'Cadastros');

class TestCadastros extends CadastrosController {
	var $autoRender = false;
}

class CadastrosControllerTest extends CakeTestCase {
	var $Cadastros = null;

	function startTest() {
		$this->Cadastros = new TestCadastros();
		$this->Cadastros->constructClasses();
	}

	function testCadastrosControllerInstance() {
		$this->assertTrue(is_a($this->Cadastros, 'CadastrosController'));
	}

	function endTest() {
		unset($this->Cadastros);
	}
}
?>