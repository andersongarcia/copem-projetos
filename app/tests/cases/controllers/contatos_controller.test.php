<?php 
/* SVN FILE: $Id$ */
/* ContatosController Test cases generated on: 2010-02-06 18:18:53 : 1265480333*/
App::import('Controller', 'Contatos');

class TestContatos extends ContatosController {
	var $autoRender = false;
}

class ContatosControllerTest extends CakeTestCase {
	var $Contatos = null;

	function startTest() {
		$this->Contatos = new TestContatos();
		$this->Contatos->constructClasses();
	}

	function testContatosControllerInstance() {
		$this->assertTrue(is_a($this->Contatos, 'ContatosController'));
	}

	function endTest() {
		unset($this->Contatos);
	}
}
?>