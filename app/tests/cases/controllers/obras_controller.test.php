<?php 
/* SVN FILE: $Id$ */
/* ObrasController Test cases generated on: 2010-02-19 11:53:14 : 1266580394*/
App::import('Controller', 'Obras');

class TestObras extends ObrasController {
	var $autoRender = false;
}

class ObrasControllerTest extends CakeTestCase {
	var $Obras = null;

	function startTest() {
		$this->Obras = new TestObras();
		$this->Obras->constructClasses();
	}

	function testObrasControllerInstance() {
		$this->assertTrue(is_a($this->Obras, 'ObrasController'));
	}

	function endTest() {
		unset($this->Obras);
	}
}
?>