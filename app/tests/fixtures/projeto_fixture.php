<?php 
/* SVN FILE: $Id$ */
/* Projeto Fixture generated on: 2010-01-24 15:41:10 : 1264347670*/

class ProjetoFixture extends CakeTestFixture {
	var $name = 'Projeto';
	var $table = 'projetos';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'codigo' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 10),
		'nome' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'projeto_tipo_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'local' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'cliente_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'escopo_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'servico_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'local_especifico' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'rodovia' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 20),
		'estaca' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 20),
		'km' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 10),
		'transposicao_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'classe_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'movimentacao_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'curva' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'esconsidade' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'finalidade_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'talude_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'terrapleno_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'material_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'moldagem_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'area' => array('type'=>'float', 'null' => true, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'codigo'  => 'Lorem ip',
		'nome'  => 'Lorem ipsum dolor sit amet',
		'projeto_tipo_id'  => 1,
		'local'  => 'Lorem ipsum dolor sit amet',
		'cliente_id'  => 1,
		'escopo_id'  => 1,
		'servico_id'  => 1,
		'local_especifico'  => 'Lorem ipsum dolor sit amet',
		'rodovia'  => 'Lorem ipsum dolor ',
		'estaca'  => 'Lorem ipsum dolor ',
		'km'  => 'Lorem ip',
		'transposicao_id'  => 1,
		'classe_id'  => 1,
		'movimentacao_id'  => 1,
		'curva'  => 1,
		'esconsidade'  => 1,
		'finalidade_id'  => 1,
		'talude_id'  => 1,
		'terrapleno_id'  => 1,
		'material_id'  => 1,
		'moldagem_id'  => 1,
		'area'  => 1,
		'created'  => '2010-01-24 15:41:10',
		'modified'  => '2010-01-24 15:41:10'
	));
}
?>