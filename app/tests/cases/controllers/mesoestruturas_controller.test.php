<?php 
/* SVN FILE: $Id$ */
/* MesoestruturasController Test cases generated on: 2010-02-01 19:00:58 : 1265050858*/
App::import('Controller', 'Mesoestruturas');

class TestMesoestruturas extends MesoestruturasController {
	var $autoRender = false;
}

class MesoestruturasControllerTest extends CakeTestCase {
	var $Mesoestruturas = null;

	function startTest() {
		$this->Mesoestruturas = new TestMesoestruturas();
		$this->Mesoestruturas->constructClasses();
	}

	function testMesoestruturasControllerInstance() {
		$this->assertTrue(is_a($this->Mesoestruturas, 'MesoestruturasController'));
	}

	function endTest() {
		unset($this->Mesoestruturas);
	}
}
?>