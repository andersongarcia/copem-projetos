<?php 
/* SVN FILE: $Id$ */
/* ObraEmCaixao Fixture generated on: 2010-02-19 11:55:43 : 1266580543*/

class ObraEmCaixaoFixture extends CakeTestFixture {
	var $name = 'ObraEmCaixao';
	var $table = 'obra_em_caixao';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'superestrutura_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'numero_de_almas' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'altura_do_vao' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'altura_no_apoio' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'altura_da_laje_superior' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'altura_da_laje_inferior' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'balanco_transversal' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'superestrutura_id'  => 1,
		'numero_de_almas'  => 1,
		'altura_do_vao'  => 1,
		'altura_no_apoio'  => 1,
		'altura_da_laje_superior'  => 1,
		'altura_da_laje_inferior'  => 1,
		'balanco_transversal'  => 1,
		'created'  => '2010-02-19 11:55:43',
		'modified'  => '2010-02-19 11:55:43'
	));
}
?>