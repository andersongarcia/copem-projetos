<?php 
/* SVN FILE: $Id$ */
/* Infraestrutura Test cases generated on: 2010-02-01 18:04:38 : 1265047478*/
App::import('Model', 'Infraestrutura');

class InfraestruturaTestCase extends CakeTestCase {
	var $Infraestrutura = null;
	var $fixtures = array('app.infraestrutura', 'app.projeto', 'app.infraestrutura_tipo', 'app.tubulao', 'app.estacao', 'app.estaca', 'app.sapata', 'app.talude', 'app.terreno');

	function startTest() {
		$this->Infraestrutura =& ClassRegistry::init('Infraestrutura');
	}

	function testInfraestruturaInstance() {
		$this->assertTrue(is_a($this->Infraestrutura, 'Infraestrutura'));
	}

	function testInfraestruturaFind() {
		$this->Infraestrutura->recursive = -1;
		$results = $this->Infraestrutura->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Infraestrutura' => array(
			'id'  => 1,
			'projeto_id'  => 1,
			'infraestrutura_tipo_id'  => 1,
			'tubulao_id'  => 1,
			'estacao_id'  => 1,
			'estaca_id'  => 1,
			'sapata_id'  => 1,
			'talude_id'  => 1,
			'alas_altura'  => 1,
			'alas_comprimento'  => 1,
			'alas_angulo'  => 1,
			'terreno_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>