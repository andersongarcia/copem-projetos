<?php 
/* SVN FILE: $Id$ */
/* Formulario Test cases generated on: 2010-02-04 14:04:39 : 1265292279*/
App::import('Model', 'Formulario');

class FormularioTestCase extends CakeTestCase {
	var $Formulario = null;
	var $fixtures = array('app.formulario', 'app.cadastros_projeto_tipo');

	function startTest() {
		$this->Formulario =& ClassRegistry::init('Formulario');
	}

	function testFormularioInstance() {
		$this->assertTrue(is_a($this->Formulario, 'Formulario'));
	}

	function testFormularioFind() {
		$this->Formulario->recursive = -1;
		$results = $this->Formulario->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Formulario' => array(
			'id'  => 1,
			'nome'  => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>