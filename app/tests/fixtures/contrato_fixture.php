<?php 
/* SVN FILE: $Id$ */
/* Contrato Fixture generated on: 2010-02-07 17:46:53 : 1265564813*/

class ContratoFixture extends CakeTestFixture {
	var $name = 'Contrato';
	var $table = 'contratos';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'edital' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 10),
		'contrato' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 10),
		'objeto' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'orcamento_valor' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'data_do_envio' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'data_de_aprovacao' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'numero_de_parcelas' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'prazo_final' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'data_primeira_nota' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'data_assinatura_do_contrato' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'caucao_valor' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'caucao_data_do_pagamento' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'caucao_data_do_ressarcimento' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'tam_data_de_solicitacao' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'tam_data_de_emissao' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'tc_data_de_solicitacao' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'tc_data_de_emissao' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'atestado_data_de_solicitacao' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'atestado_data_de_emissao' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'caixa_arquivo_projeto' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'caixa_arquivo_estudo' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
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
}
?>