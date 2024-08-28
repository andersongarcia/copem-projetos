<?php 
/* SVN FILE: $Id$ */
/* ProjetoTipo Test cases generated on: 2010-02-05 13:58:52 : 1265378332*/
App::import('Model', 'ProjetoTipo');

class ProjetoTipoTestCase extends CakeTestCase {
	var $ProjetoTipo = null;
	var $fixtures = array('app.projeto_tipo', 'app.projeto');

	function startTest() {
		$this->ProjetoTipo =& ClassRegistry::init('ProjetoTipo');
	}

	function testProjetoTipoInstance() {
		$this->assertTrue(is_a($this->ProjetoTipo, 'ProjetoTipo'));
	}

	function testProjetoTipoFind() {
		$this->ProjetoTipo->recursive = -1;
		$results = $this->ProjetoTipo->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('ProjetoTipo' => array(
			'id'  => 1,
			'codigo'  => 'L',
			'descricao'  => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>