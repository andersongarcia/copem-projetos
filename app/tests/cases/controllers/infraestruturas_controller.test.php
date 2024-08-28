<?php 
/* SVN FILE: $Id$ */
/* InfraestruturasController Test cases generated on: 2010-02-01 18:31:12 : 1265049072*/
App::import('Controller', 'Infraestruturas');

class TestInfraestruturas extends InfraestruturasController {
	var $autoRender = false;
}

class InfraestruturasControllerTest extends CakeTestCase {
	var $Infraestruturas = null;

	function startTest() {
		$this->Infraestruturas = new TestInfraestruturas();
		$this->Infraestruturas->constructClasses();
	}

	function testInfraestruturasControllerInstance() {
		$this->assertTrue(is_a($this->Infraestruturas, 'InfraestruturasController'));
	}

	function endTest() {
		unset($this->Infraestruturas);
	}
}
?>