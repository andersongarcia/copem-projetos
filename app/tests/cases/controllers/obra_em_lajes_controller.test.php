<?php 
/* SVN FILE: $Id$ */
/* ObraEmLajesController Test cases generated on: 2010-02-19 11:57:54 : 1266580674*/
App::import('Controller', 'ObraEmLajes');

class TestObraEmLajes extends ObraEmLajesController {
	var $autoRender = false;
}

class ObraEmLajesControllerTest extends CakeTestCase {
	var $ObraEmLajes = null;

	function startTest() {
		$this->ObraEmLajes = new TestObraEmLajes();
		$this->ObraEmLajes->constructClasses();
	}

	function testObraEmLajesControllerInstance() {
		$this->assertTrue(is_a($this->ObraEmLajes, 'ObraEmLajesController'));
	}

	function endTest() {
		unset($this->ObraEmLajes);
	}
}
?>