<?php 
/* SVN FILE: $Id$ */
/* ObraEmViga Test cases generated on: 2010-02-19 17:40:21 : 1266601221*/
App::import('Model', 'ObraEmViga');

class ObraEmVigaTestCase extends CakeTestCase {
	var $ObraEmViga = null;
	var $fixtures = array('app.obra_em_viga', 'app.superestrutura');

	function startTest() {
		$this->ObraEmViga =& ClassRegistry::init('ObraEmViga');
	}

	function testObraEmVigaInstance() {
		$this->assertTrue(is_a($this->ObraEmViga, 'ObraEmViga'));
	}

	function testObraEmVigaFind() {
		$this->ObraEmViga->recursive = -1;
		$results = $this->ObraEmViga->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('ObraEmViga' => array(
			'id'  => 1,
			'superestrutura_id'  => 1,
			'numero_de_vigas'  => 1,
			'altura_da_viga_isolada'  => 1,
			'altura_da_laje'  => 1,
			'altura_da_viga_completa'  => 1,
			'entre_eixos_de_vigas'  => 1,
			'balanco_transversal'  => 1,
			'largura_alma'  => 1,
			'largura_flange'  => 1,
			'largura_talao'  => 1,
			'created'  => '2010-02-19 17:40:21',
			'modified'  => '2010-02-19 17:40:21'
		));
		$this->assertEqual($results, $expected);
	}
}
?>