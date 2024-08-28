<?php 
/* SVN FILE: $Id$ */
/* Aproximacao Test cases generated on: 2010-01-23 03:37:15 : 1264217835*/
App::import('Model', 'Aproximacao');

class AproximacaoTestCase extends CakeTestCase {
	var $Aproximacao = null;
	var $fixtures = array('app.aproximacao');

	function startTest() {
		$this->Aproximacao =& ClassRegistry::init('Aproximacao');
	}

	function testAproximacaoInstance() {
		$this->assertTrue(is_a($this->Aproximacao, 'Aproximacao'));
	}

	function testAproximacaoFind() {
		$this->Aproximacao->recursive = -1;
		$results = $this->Aproximacao->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Aproximacao' => array(
			'id'  => 1,
			'descricao'  => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>