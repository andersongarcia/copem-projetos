<?php 
/* SVN FILE: $Id$ */
/* SubcontratadosController Test cases generated on: 2010-02-11 17:39:18 : 1265909958*/
App::import('Controller', 'Subcontratados');

class TestSubcontratados extends SubcontratadosController {
	var $autoRender = false;
}

class SubcontratadosControllerTest extends CakeTestCase {
	var $Subcontratados = null;

	function startTest() {
		$this->Subcontratados = new TestSubcontratados();
		$this->Subcontratados->constructClasses();
	}

	function testSubcontratadosControllerInstance() {
		$this->assertTrue(is_a($this->Subcontratados, 'SubcontratadosController'));
	}

	function endTest() {
		unset($this->Subcontratados);
	}
}
?>