<?php 
/* SVN FILE: $Id$ */
/* Subcontratado Test cases generated on: 2010-02-11 17:38:33 : 1265909913*/
App::import('Model', 'Subcontratado');

class SubcontratadoTestCase extends CakeTestCase {
	var $Subcontratado = null;
	var $fixtures = array('app.subcontratado', 'app.projeto', 'app.servico');

	function startTest() {
		$this->Subcontratado =& ClassRegistry::init('Subcontratado');
	}

	function testSubcontratadoInstance() {
		$this->assertTrue(is_a($this->Subcontratado, 'Subcontratado'));
	}

	function testSubcontratadoFind() {
		$this->Subcontratado->recursive = -1;
		$results = $this->Subcontratado->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Subcontratado' => array(
			'id'  => 1,
			'projeto_id'  => 1,
			'servico_id'  => 1,
			'empresa'  => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>