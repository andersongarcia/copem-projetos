<?php 
/* SVN FILE: $Id$ */
/* Dado Test cases generated on: 2010-02-11 17:38:19 : 1265909899*/
App::import('Model', 'Dado');

class DadoTestCase extends CakeTestCase {
	var $Dado = null;
	var $fixtures = array('app.dado', 'app.projeto', 'app.servico');

	function startTest() {
		$this->Dado =& ClassRegistry::init('Dado');
	}

	function testDadoInstance() {
		$this->assertTrue(is_a($this->Dado, 'Dado'));
	}

	function testDadoFind() {
		$this->Dado->recursive = -1;
		$results = $this->Dado->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Dado' => array(
			'id'  => 1,
			'projeto_id'  => 1,
			'servico_id'  => 1,
			'empresa'  => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>