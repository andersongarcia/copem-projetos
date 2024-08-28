<?php 
/* SVN FILE: $Id$ */
/* Obra Test cases generated on: 2010-02-19 11:52:23 : 1266580343*/
App::import('Model', 'Obra');

class ObraTestCase extends CakeTestCase {
	var $Obra = null;
	var $fixtures = array('app.obra', 'app.superestrutura');

	function startTest() {
		$this->Obra =& ClassRegistry::init('Obra');
	}

	function testObraInstance() {
		$this->assertTrue(is_a($this->Obra, 'Obra'));
	}

	function testObraFind() {
		$this->Obra->recursive = -1;
		$results = $this->Obra->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Obra' => array(
			'id'  => 1,
			'descricao'  => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>