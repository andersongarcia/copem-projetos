<?php 
/* SVN FILE: $Id$ */
/* InfraestruturaTiposController Test cases generated on: 2010-02-05 13:20:08 : 1265376008*/
App::import('Controller', 'InfraestruturaTipos');

class TestInfraestruturaTipos extends InfraestruturaTiposController {
	var $autoRender = false;
}

class InfraestruturaTiposControllerTest extends CakeTestCase {
	var $InfraestruturaTipos = null;

	function startTest() {
		$this->InfraestruturaTipos = new TestInfraestruturaTipos();
		$this->InfraestruturaTipos->constructClasses();
	}

	function testInfraestruturaTiposControllerInstance() {
		$this->assertTrue(is_a($this->InfraestruturaTipos, 'InfraestruturaTiposController'));
	}

	function endTest() {
		unset($this->InfraestruturaTipos);
	}
}
?>