<?php 
/* SVN FILE: $Id$ */
/* Quantitativo Test cases generated on: 2010-05-24 01:22:25 : 1274664145*/
App::import('Model', 'Quantitativo');

class QuantitativoTestCase extends CakeTestCase {
	var $Quantitativo = null;
	var $fixtures = array('app.quantitativo', 'app.projeto');

	function startTest() {
		$this->Quantitativo =& ClassRegistry::init('Quantitativo');
	}

	function testQuantitativoInstance() {
		$this->assertTrue(is_a($this->Quantitativo, 'Quantitativo'));
	}

	function testQuantitativoFind() {
		$this->Quantitativo->recursive = -1;
		$results = $this->Quantitativo->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Quantitativo' => array(
			'id'  => 1,
			'projeto_id'  => 1,
			'tpu_der'  => 'Lorem ip',
			'preco_total'  => 'Lorem ip',
			'concreto_vigas'  => 'Lorem ip',
			'concreto_laje'  => 'Lorem ip',
			'formas_vigas'  => 'Lorem ip',
			'formas_laje'  => 'Lorem ip',
			'aco_ca_vigas'  => 'Lorem ip',
			'aco_ca_laje'  => 'Lorem ip',
			'aco_cp_vigas'  => 'Lorem ip',
			'aco_cp_laje'  => 'Lorem ip',
			'ap_ancoragem_ativa'  => 1,
			'ap_ancoragem_passiva'  => 1,
			'concreto_travessas'  => 1,
			'concreto_pilares'  => 1,
			'formas_travessas'  => 1,
			'formas_pilares'  => 1,
			'aco_ca_travessas'  => 1,
			'aco_ca_pilares'  => 1,
			'neoprene_simples'  => 1,
			'neoprene_fretado'  => 1,
			'aparelho_metalico'  => 1,
			'concreto_blocos'  => 1,
			'concreto_tubuloes'  => 1,
			'formas_blocos'  => 1,
			'formas_tubuloes'  => 1,
			'aco_ca_blocos'  => 1,
			'aco_ca_tubuloes'  => 1,
			'escavacao_ar_comprimido'  => 1,
			'escavacao_ceu_aberto'  => 1,
			'estacas_estacoes'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>