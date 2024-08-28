<?php 
/* SVN FILE: $Id$ */
/* ObraEmVigasController Test cases generated on: 2010-02-19 17:40:49 : 1266601249*/
App::import('Controller', 'ObraEmVigas');

class TestObraEmVigas extends ObraEmVigasController {
	var $autoRender = false;
}

class ObraEmVigasControllerTest extends CakeTestCase {
	var $ObraEmVigas = null;

	function startTest() {
		$this->ObraEmVigas = new TestObraEmVigas();
		$this->ObraEmVigas->constructClasses();
	}

	function testObraEmVigasControllerInstance() {
		$this->assertTrue(is_a($this->ObraEmVigas, 'ObraEmVigasController'));
	}

	function endTest() {
		unset($this->ObraEmVigas);
	}
}
?>