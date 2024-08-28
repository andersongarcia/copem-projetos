<?php 
/* SVN FILE: $Id$ */
/* ObraEmCaixao Test cases generated on: 2010-02-19 11:55:43 : 1266580543*/
App::import('Model', 'ObraEmCaixao');

class ObraEmCaixaoTestCase extends CakeTestCase {
	var $ObraEmCaixao = null;
	var $fixtures = array('app.obra_em_caixao', 'app.superestrutura');

	function startTest() {
		$this->ObraEmCaixao =& ClassRegistry::init('ObraEmCaixao');
	}

	function testObraEmCaixaoInstance() {
		$this->assertTrue(is_a($this->ObraEmCaixao, 'ObraEmCaixao'));
	}

	function testObraEmCaixaoFind() {
		$this->ObraEmCaixao->recursive = -1;
		$results = $this->ObraEmCaixao->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('ObraEmCaixao' => array(
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
		$this->assertEqual($results, $expected);
	}
}
?>