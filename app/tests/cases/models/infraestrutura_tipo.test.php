<?php 
/* SVN FILE: $Id$ */
/* InfraestruturaTipo Test cases generated on: 2010-02-05 13:19:53 : 1265375993*/
App::import('Model', 'InfraestruturaTipo');

class InfraestruturaTipoTestCase extends CakeTestCase {
	var $InfraestruturaTipo = null;
	var $fixtures = array('app.infraestrutura_tipo', 'app.infraestrutura');

	function startTest() {
		$this->InfraestruturaTipo =& ClassRegistry::init('InfraestruturaTipo');
	}

	function testInfraestruturaTipoInstance() {
		$this->assertTrue(is_a($this->InfraestruturaTipo, 'InfraestruturaTipo'));
	}

	function testInfraestruturaTipoFind() {
		$this->InfraestruturaTipo->recursive = -1;
		$results = $this->InfraestruturaTipo->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('InfraestruturaTipo' => array(
			'id'  => 1,
			'descricao'  => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>