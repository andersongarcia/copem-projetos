<?php 
/* SVN FILE: $Id$ */
/* QuantitativosController Test cases generated on: 2010-05-24 01:23:10 : 1274664190*/
App::import('Controller', 'Quantitativos');

class TestQuantitativos extends QuantitativosController {
	var $autoRender = false;
}

class QuantitativosControllerTest extends CakeTestCase {
	var $Quantitativos = null;

	function startTest() {
		$this->Quantitativos = new TestQuantitativos();
		$this->Quantitativos->constructClasses();
	}

	function testQuantitativosControllerInstance() {
		$this->assertTrue(is_a($this->Quantitativos, 'QuantitativosController'));
	}

	function endTest() {
		unset($this->Quantitativos);
	}
}
?>