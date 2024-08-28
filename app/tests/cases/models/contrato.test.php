<?php 
/* SVN FILE: $Id$ */
/* Contrato Test cases generated on: 2010-02-07 17:46:54 : 1265564814*/
App::import('Model', 'Contrato');

class ContratoTestCase extends CakeTestCase {
	var $Contrato = null;
	var $fixtures = array('app.contrato', 'app.contratos_registros_profissional');

	function startTest() {
		$this->Contrato =& ClassRegistry::init('Contrato');
	}

	function testContratoInstance() {
		$this->assertTrue(is_a($this->Contrato, 'Contrato'));
	}

	function testContratoFind() {
		$this->Contrato->recursive = -1;
		$results = $this->Contrato->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Contrato' => array(
			'id'  => 1,
			'edital'  => 'Lorem ip',
			'contrato'  => 'Lorem ip',
			'objeto'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'orcamento_valor'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'data_do_envio'  => '2010-02-07',
			'data_de_aprovacao'  => '2010-02-07',
			'numero_de_parcelas'  => 1,
			'prazo_final'  => '2010-02-07',
			'data_primeira_nota'  => '2010-02-07',
			'data_assinatura_do_contrato'  => '2010-02-07',
			'caucao_valor'  => '2010-02-07',
			'caucao_data_do_pagamento'  => '2010-02-07',
			'caucao_data_do_ressarcimento'  => '2010-02-07',
			'tam_data_de_solicitacao'  => '2010-02-07',
			'tam_data_de_emissao'  => '2010-02-07',
			'tc_data_de_solicitacao'  => '2010-02-07',
			'tc_data_de_emissao'  => '2010-02-07',
			'atestado_data_de_solicitacao'  => '2010-02-07',
			'atestado_data_de_emissao'  => '2010-02-07',
			'caixa_arquivo_projeto'  => 1,
			'caixa_arquivo_estudo'  => 1,
			'created'  => '2010-02-07 17:46:53',
			'modified'  => '2010-02-07 17:46:53'
		));
		$this->assertEqual($results, $expected);
	}
}
?>