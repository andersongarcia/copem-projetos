<?php 
/* SVN FILE: $Id$ */
/* SuperestruturasController Test cases generated on: 2010-02-01 19:02:22 : 1265050942*/
App::import('Controller', 'Superestruturas');

class TestSuperestruturas extends SuperestruturasController {
	var $autoRender = false;
}

class SuperestruturasControllerTest extends CakeTestCase {
	var $Superestruturas = null;

	function startTest() {
		$this->Superestruturas = new TestSuperestruturas();
		$this->Superestruturas->constructClasses();
	}

	function testSuperestruturasControllerInstance() {
		$this->assertTrue(is_a($this->Superestruturas, 'SuperestruturasController'));
	}

	function endTest() {
		unset($this->Superestruturas);
	}
}
?>