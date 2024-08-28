<?php 
/* SVN FILE: $Id$ */
/* Projeto Test cases generated on: 2010-01-24 15:41:11 : 1264347671*/
App::import('Model', 'Projeto');

class ProjetoTestCase extends CakeTestCase {
	var $Projeto = null;
	var $fixtures = array('app.projeto', 'app.projeto_tipo', 'app.cliente', 'app.escopo', 'app.servico', 'app.transposicao', 'app.classe', 'app.movimentacao', 'app.finalidade', 'app.talude', 'app.terrapleno', 'app.material', 'app.moldagem', 'app.infraestrutura', 'app.mesoestrutura', 'app.superestrutura');

	function startTest() {
		$this->Projeto =& ClassRegistry::init('Projeto');
	}

	function testProjetoInstance() {
		$this->assertTrue(is_a($this->Projeto, 'Projeto'));
	}

	function testProjetoFind() {
		$this->Projeto->recursive = -1;
		$results = $this->Projeto->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Projeto' => array(
			'id'  => 1,
			'codigo'  => 'Lorem ip',
			'nome'  => 'Lorem ipsum dolor sit amet',
			'projeto_tipo_id'  => 1,
			'local'  => 'Lorem ipsum dolor sit amet',
			'cliente_id'  => 1,
			'escopo_id'  => 1,
			'servico_id'  => 1,
			'local_especifico'  => 'Lorem ipsum dolor sit amet',
			'rodovia'  => 'Lorem ipsum dolor ',
			'estaca'  => 'Lorem ipsum dolor ',
			'km'  => 'Lorem ip',
			'transposicao_id'  => 1,
			'classe_id'  => 1,
			'movimentacao_id'  => 1,
			'curva'  => 1,
			'esconsidade'  => 1,
			'finalidade_id'  => 1,
			'talude_id'  => 1,
			'terrapleno_id'  => 1,
			'material_id'  => 1,
			'moldagem_id'  => 1,
			'area'  => 1,
			'created'  => '2010-01-24 15:41:10',
			'modified'  => '2010-01-24 15:41:10'
		));
		$this->assertEqual($results, $expected);
	}
}
?>