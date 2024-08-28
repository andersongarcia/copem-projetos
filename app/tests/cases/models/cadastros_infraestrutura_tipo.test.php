<?php 
/* SVN FILE: $Id$ */
/* CadastrosInfraestruturaTipo Test cases generated on: 2010-02-05 13:18:44 : 1265375924*/
App::import('Model', 'CadastrosInfraestruturaTipo');

class CadastrosInfraestruturaTipoTestCase extends CakeTestCase {
	var $CadastrosInfraestruturaTipo = null;
	var $fixtures = array('app.cadastros_infraestrutura_tipo', 'app.cadastro', 'app.infraestrutura_tipo');

	function startTest() {
		$this->CadastrosInfraestruturaTipo =& ClassRegistry::init('CadastrosInfraestruturaTipo');
	}

	function testCadastrosInfraestruturaTipoInstance() {
		$this->assertTrue(is_a($this->CadastrosInfraestruturaTipo, 'CadastrosInfraestruturaTipo'));
	}

	function testCadastrosInfraestruturaTipoFind() {
		$this->CadastrosInfraestruturaTipo->recursive = -1;
		$results = $this->CadastrosInfraestruturaTipo->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('CadastrosInfraestruturaTipo' => array(
			'id'  => 1,
			'cadastro_id'  => 1,
			'infraestrutura_tipo_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>