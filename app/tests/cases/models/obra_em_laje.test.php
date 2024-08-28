<?php 
/* SVN FILE: $Id$ */
/* ObraEmLaje Test cases generated on: 2010-02-19 11:56:49 : 1266580609*/
App::import('Model', 'ObraEmLaje');

class ObraEmLajeTestCase extends CakeTestCase {
	var $ObraEmLaje = null;
	var $fixtures = array('app.obra_em_laje', 'app.superestrutura');

	function startTest() {
		$this->ObraEmLaje =& ClassRegistry::init('ObraEmLaje');
	}

	function testObraEmLajeInstance() {
		$this->assertTrue(is_a($this->ObraEmLaje, 'ObraEmLaje'));
	}

	function testObraEmLajeFind() {
		$this->ObraEmLaje->recursive = -1;
		$results = $this->ObraEmLaje->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('ObraEmLaje' => array(
			'id'  => 1,
			'superestrutura_id'  => 1,
			'tipo'  => 'Lorem ipsum dolor sit amet',
			'altura_da_laje_no_vao'  => 'Lorem ipsum dolor sit amet',
			'altura_da_laje_no_apoio'  => 'Lorem ipsum dolor sit amet',
			'balanco_transversal'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2010-02-19 11:56:49',
			'modified'  => '2010-02-19 11:56:49'
		));
		$this->assertEqual($results, $expected);
	}
}
?>