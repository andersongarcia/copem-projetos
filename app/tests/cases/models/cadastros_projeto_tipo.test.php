<?php 
/* SVN FILE: $Id$ */
/* CadastrosProjetoTipo Test cases generated on: 2010-02-04 14:05:12 : 1265292312*/
App::import('Model', 'CadastrosProjetoTipo');

class CadastrosProjetoTipoTestCase extends CakeTestCase {
	var $CadastrosProjetoTipo = null;
	var $fixtures = array('app.cadastros_projeto_tipo', 'app.cadastro', 'app.projeto_tipo', 'app.formulario');

	function startTest() {
		$this->CadastrosProjetoTipo =& ClassRegistry::init('CadastrosProjetoTipo');
	}

	function testCadastrosProjetoTipoInstance() {
		$this->assertTrue(is_a($this->CadastrosProjetoTipo, 'CadastrosProjetoTipo'));
	}

	function testCadastrosProjetoTipoFind() {
		$this->CadastrosProjetoTipo->recursive = -1;
		$results = $this->CadastrosProjetoTipo->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('CadastrosProjetoTipo' => array(
			'id'  => 1,
			'cadastro_id'  => 1,
			'projeto_tipo_id'  => 1,
			'formulario_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>