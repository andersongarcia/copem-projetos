<?php 
/* SVN FILE: $Id$ */
/* Mesoestrutura Test cases generated on: 2010-02-01 19:00:42 : 1265050842*/
App::import('Model', 'Mesoestrutura');

class MesoestruturaTestCase extends CakeTestCase {
	var $Mesoestrutura = null;
	var $fixtures = array('app.mesoestrutura', 'app.projeto', 'app.pilar', 'app.aparelho', 'app.aproximacao');

	function startTest() {
		$this->Mesoestrutura =& ClassRegistry::init('Mesoestrutura');
	}

	function testMesoestruturaInstance() {
		$this->assertTrue(is_a($this->Mesoestrutura, 'Mesoestrutura'));
	}

	function testMesoestruturaFind() {
		$this->Mesoestrutura->recursive = -1;
		$results = $this->Mesoestrutura->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Mesoestrutura' => array(
			'id'  => 1,
			'projeto_id'  => 1,
			'pilar_id'  => 1,
			'aparelho_id'  => 1,
			'travessa_do_encontro_vao'  => 1,
			'travessa_do_encontro_altura'  => 1,
			'travessa_do_encontro_largura'  => 1,
			'travessa_interna_vao'  => 1,
			'travessa_interna_altura'  => 1,
			'travessa_interna_largura'  => 1,
			'aproximacao_id'  => 1,
			'espessura_da_parede'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>