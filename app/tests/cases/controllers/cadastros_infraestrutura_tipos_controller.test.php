<?php 
/* SVN FILE: $Id$ */
/* CadastrosInfraestruturaTiposController Test cases generated on: 2010-02-05 13:19:14 : 1265375954*/
App::import('Controller', 'CadastrosInfraestruturaTipos');

class TestCadastrosInfraestruturaTipos extends CadastrosInfraestruturaTiposController {
	var $autoRender = false;
}

class CadastrosInfraestruturaTiposControllerTest extends CakeTestCase {
	var $CadastrosInfraestruturaTipos = null;

	function startTest() {
		$this->CadastrosInfraestruturaTipos = new TestCadastrosInfraestruturaTipos();
		$this->CadastrosInfraestruturaTipos->constructClasses();
	}

	function testCadastrosInfraestruturaTiposControllerInstance() {
		$this->assertTrue(is_a($this->CadastrosInfraestruturaTipos, 'CadastrosInfraestruturaTiposController'));
	}

	function endTest() {
		unset($this->CadastrosInfraestruturaTipos);
	}
}
?>