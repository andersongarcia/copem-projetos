<?php 
/* SVN FILE: $Id$ */
/* CadastrosProjetoTiposController Test cases generated on: 2010-02-04 14:06:03 : 1265292363*/
App::import('Controller', 'CadastrosProjetoTipos');

class TestCadastrosProjetoTipos extends CadastrosProjetoTiposController {
	var $autoRender = false;
}

class CadastrosProjetoTiposControllerTest extends CakeTestCase {
	var $CadastrosProjetoTipos = null;

	function startTest() {
		$this->CadastrosProjetoTipos = new TestCadastrosProjetoTipos();
		$this->CadastrosProjetoTipos->constructClasses();
	}

	function testCadastrosProjetoTiposControllerInstance() {
		$this->assertTrue(is_a($this->CadastrosProjetoTipos, 'CadastrosProjetoTiposController'));
	}

	function endTest() {
		unset($this->CadastrosProjetoTipos);
	}
}
?>