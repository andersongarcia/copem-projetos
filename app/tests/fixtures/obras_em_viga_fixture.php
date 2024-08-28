<?php 
/* SVN FILE: $Id$ */
/* ObrasEmViga Fixture generated on: 2010-02-19 11:57:14 : 1266580634*/

class ObrasEmVigaFixture extends CakeTestFixture {
	var $name = 'ObrasEmViga';
	var $table = 'obras_em_vigas';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'superestrutura_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'numero_de_vigas' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'altura_da_viga_isolada' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'altura_da_laje' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'altura_da_viga_completa' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'entre_eixos_de_vigas' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'balanco_transversal' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'largura_alma' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'largura_flange' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'largura_talao' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
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
}
?>