<?php 
/* SVN FILE: $Id$ */
/* ObrasEmViga Test cases generated on: 2010-02-19 11:57:14 : 1266580634*/
App::import('Model', 'ObrasEmViga');

class ObrasEmVigaTestCase extends CakeTestCase {
	var $ObrasEmViga = null;
	var $fixtures = array('app.obras_em_viga', 'app.superestrutura');

	function startTest() {
		$this->ObrasEmViga =& ClassRegistry::init('ObrasEmViga');
	}

	function testObrasEmVigaInstance() {
		$this->assertTrue(is_a($this->ObrasEmViga, 'ObrasEmViga'));
	}

	function testObrasEmVigaFind() {
		$this->ObrasEmViga->recursive = -1;
		$results = $this->ObrasEmViga->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('ObrasEmViga' => array(
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
			'created'  => '2010-02-19 11:57:14',
			'modified'  => '2010-02-19 11:57:14'
		));
		$this->assertEqual($results, $expected);
	}
}
?>