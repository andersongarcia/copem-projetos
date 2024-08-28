<?php 
/* SVN FILE: $Id$ */
/* ProjetoTiposController Test cases generated on: 2010-02-04 13:35:20 : 1265290520*/
App::import('Controller', 'ProjetoTipos');

class TestProjetoTipos extends ProjetoTiposController {
	var $autoRender = false;
}

class ProjetoTiposControllerTest extends CakeTestCase {
	var $ProjetoTipos = null;

	function startTest() {
		$this->ProjetoTipos = new TestProjetoTipos();
		$this->ProjetoTipos->constructClasses();
	}

	function testProjetoTiposControllerInstance() {
		$this->assertTrue(is_a($this->ProjetoTipos, 'ProjetoTiposController'));
	}

	function endTest() {
		unset($this->ProjetoTipos);
	}
}
?>