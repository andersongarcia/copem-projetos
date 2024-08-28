<?php 
/* SVN FILE: $Id$ */
/* Superestrutura Test cases generated on: 2010-02-01 19:02:05 : 1265050925*/
App::import('Model', 'Superestrutura');

class SuperestruturaTestCase extends CakeTestCase {
	var $Superestrutura = null;
	var $fixtures = array('app.superestrutura', 'app.projeto', 'app.movimentacao', 'app.material', 'app.moldagem', 'app.montagem');

	function startTest() {
		$this->Superestrutura =& ClassRegistry::init('Superestrutura');
	}

	function testSuperestruturaInstance() {
		$this->assertTrue(is_a($this->Superestrutura, 'Superestrutura'));
	}

	function testSuperestruturaFind() {
		$this->Superestrutura->recursive = -1;
		$results = $this->Superestrutura->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Superestrutura' => array(
			'id'  => 1,
			'projeto_id'  => 1,
			'projeto_padrao'  => 1,
			'projeto_padrao_vao'  => 1,
			'projeto_padrao_largura'  => 1,
			'movimentacao_id'  => 1,
			'comprimento'  => 1,
			'numero_de_celulas'  => 1,
			'numero_de_vaos'  => 1,
			'vao'  => 1,
			'vao_livre'  => 1,
			'vao_maior'  => 1,
			'vao_menor'  => 1,
			'altura'  => 1,
			'espessura'  => 1,
			'espessura_da_laje'  => 1,
			'balanco'  => 1,
			'largura'  => 1,
			'curva'  => 1,
			'esconsidade'  => 1,
			'material_id'  => 1,
			'moldagem_id'  => 1,
			'montagem_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>