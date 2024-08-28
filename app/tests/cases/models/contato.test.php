<?php 
/* SVN FILE: $Id$ */
/* Contato Test cases generated on: 2010-02-06 18:17:35 : 1265480255*/
App::import('Model', 'Contato');

class ContatoTestCase extends CakeTestCase {
	var $Contato = null;
	var $fixtures = array('app.contato', 'app.cliente');

	function startTest() {
		$this->Contato =& ClassRegistry::init('Contato');
	}

	function testContatoInstance() {
		$this->assertTrue(is_a($this->Contato, 'Contato'));
	}

	function testContatoFind() {
		$this->Contato->recursive = -1;
		$results = $this->Contato->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Contato' => array(
			'id'  => 1,
			'cliente_id'  => 1,
			'nome'  => 'Lorem ipsum dolor sit amet',
			'email'  => 'Lorem ipsum dolor sit amet',
			'telefone_profissional'  => 'Lorem ipsum d',
			'telefone_residencial'  => 1,
			'celular'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>