<?php 
/* SVN FILE: $Id$ */
/* ProjetosController Test cases generated on: 2010-01-24 15:42:07 : 1264347727*/
App::import('Controller', 'Projetos');

class TestProjetos extends ProjetosController {
	var $autoRender = false;
}

class ProjetosControllerTest extends CakeTestCase {
	var $Projetos = null;

	function startTest() {
		$this->Projetos = new TestProjetos();
		$this->Projetos->constructClasses();
	}

	function testProjetosControllerInstance() {
		$this->assertTrue(is_a($this->Projetos, 'ProjetosController'));
	}

	function endTest() {
		unset($this->Projetos);
	}
}
?>