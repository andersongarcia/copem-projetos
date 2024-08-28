<?php 
/* SVN FILE: $Id$ */
/* ObraEmLaje Fixture generated on: 2010-02-19 11:56:49 : 1266580609*/

class ObraEmLajeFixture extends CakeTestFixture {
	var $name = 'ObraEmLaje';
	var $table = 'obra_em_laje';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'superestrutura_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'tipo' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'altura_da_laje_no_vao' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'altura_da_laje_no_apoio' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'balanco_transversal' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'superestrutura_id'  => 1,
		'tipo'  => 'Lorem ipsum dolor sit amet',
		'altura_da_laje_no_vao'  => 'Lorem ipsum dolor sit amet',
		'altura_da_laje_no_apoio'  => 'Lorem ipsum dolor sit amet',
		'balanco_transversal'  => 'Lorem ipsum dolor sit amet',
		'created'  => '2010-02-19 11:56:49',
		'modified'  => '2010-02-19 11:56:49'
	));
}
?>