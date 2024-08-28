<?php 
/* SVN FILE: $Id$ */
/* ObraEmCaixoesController Test cases generated on: 2010-02-19 11:57:30 : 1266580650*/
App::import('Controller', 'ObraEmCaixoes');

class TestObraEmCaixoes extends ObraEmCaixoesController {
	var $autoRender = false;
}

class ObraEmCaixoesControllerTest extends CakeTestCase {
	var $ObraEmCaixoes = null;

	function startTest() {
		$this->ObraEmCaixoes = new TestObraEmCaixoes();
		$this->ObraEmCaixoes->constructClasses();
	}

	function testObraEmCaixoesControllerInstance() {
		$this->assertTrue(is_a($this->ObraEmCaixoes, 'ObraEmCaixoesController'));
	}

	function endTest() {
		unset($this->ObraEmCaixoes);
	}
}
?>