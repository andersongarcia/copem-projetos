<?php 
/* SVN FILE: $Id$ */
/* Quantitativo Fixture generated on: 2010-05-24 01:22:25 : 1274664145*/

class QuantitativoFixture extends CakeTestFixture {
	var $name = 'Quantitativo';
	var $table = 'quantitativos';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'projeto_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'tpu_der' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 10),
		'preco_total' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'concreto_vigas' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'concreto_laje' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'formas_vigas' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'formas_laje' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'aco_ca_vigas' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'aco_ca_laje' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'aco_cp_vigas' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'aco_cp_laje' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'ap_ancoragem_ativa' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'ap_ancoragem_passiva' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'concreto_travessas' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'concreto_pilares' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'formas_travessas' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'formas_pilares' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'aco_ca_travessas' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'aco_ca_pilares' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'neoprene_simples' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'neoprene_fretado' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'aparelho_metalico' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'concreto_blocos' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'concreto_tubuloes' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'formas_blocos' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'formas_tubuloes' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'aco_ca_blocos' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'aco_ca_tubuloes' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'escavacao_ar_comprimido' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'escavacao_ceu_aberto' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'estacas_estacoes' => array('type'=>'float', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
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
}
?>