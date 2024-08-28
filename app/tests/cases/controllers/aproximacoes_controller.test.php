<?php 
/* SVN FILE: $Id$ */
/* AproximacoesController Test cases generated on: 2010-01-23 03:37:34 : 1264217854*/
App::import('Controller', 'Aproximacoes');

class TestAproximacoes extends AproximacoesController {
	var $autoRender = false;
}

class AproximacoesControllerTest extends CakeTestCase {
	var $Aproximacoes = null;

	function startTest() {
		$this->Aproximacoes = new TestAproximacoes();
		$this->Aproximacoes->constructClasses();
	}

	function testAproximacoesControllerInstance() {
		$this->assertTrue(is_a($this->Aproximacoes, 'AproximacoesController'));
	}

	function endTest() {
		unset($this->Aproximacoes);
	}
}
?>