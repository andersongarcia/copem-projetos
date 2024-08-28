<?php 
/* SVN FILE: $Id$ */
/* ObrasEmVigasController Test cases generated on: 2010-02-19 11:58:13 : 1266580693*/
App::import('Controller', 'ObrasEmVigas');

class TestObrasEmVigas extends ObrasEmVigasController {
	var $autoRender = false;
}

class ObrasEmVigasControllerTest extends CakeTestCase {
	var $ObrasEmVigas = null;

	function startTest() {
		$this->ObrasEmVigas = new TestObrasEmVigas();
		$this->ObrasEmVigas->constructClasses();
	}

	function testObrasEmVigasControllerInstance() {
		$this->assertTrue(is_a($this->ObrasEmVigas, 'ObrasEmVigasController'));
	}

	function endTest() {
		unset($this->ObrasEmVigas);
	}
}
?>