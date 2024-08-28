<?php 
/* SVN FILE: $Id$ */
/* InfraestruturaTiposProjetoTipo Test cases generated on: 2010-02-05 13:51:12 : 1265377872*/
App::import('Model', 'InfraestruturaTiposProjetoTipo');

class InfraestruturaTiposProjetoTipoTestCase extends CakeTestCase {
	var $InfraestruturaTiposProjetoTipo = null;
	var $fixtures = array('app.infraestrutura_tipos_projeto_tipo', 'app.infraestrutura_tipo', 'app.projeto_tipo');

	function startTest() {
		$this->InfraestruturaTiposProjetoTipo =& ClassRegistry::init('InfraestruturaTiposProjetoTipo');
	}

	function testInfraestruturaTiposProjetoTipoInstance() {
		$this->assertTrue(is_a($this->InfraestruturaTiposProjetoTipo, 'InfraestruturaTiposProjetoTipo'));
	}

	function testInfraestruturaTiposProjetoTipoFind() {
		$this->InfraestruturaTiposProjetoTipo->recursive = -1;
		$results = $this->InfraestruturaTiposProjetoTipo->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('InfraestruturaTiposProjetoTipo' => array(
			'id'  => 1,
			'infraestrutura_tipo_id'  => 1,
			'projeto_tipo_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>