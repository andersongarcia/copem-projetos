<?php 
/* SVN FILE: $Id$ */
/* AparelhosController Test cases generated on: 2010-01-23 03:16:39 : 1264216599*/
App::import('Controller', 'Aparelhos');

class TestAparelhos extends AparelhosController {
	var $autoRender = false;
}

class AparelhosControllerTest extends CakeTestCase {
	var $Aparelhos = null;

	function startTest() {
		$this->Aparelhos = new TestAparelhos();
		$this->Aparelhos->constructClasses();
	}

	function testAparelhosControllerInstance() {
		$this->assertTrue(is_a($this->Aparelhos, 'AparelhosController'));
	}

	function endTest() {
		unset($this->Aparelhos);
	}
}
?>