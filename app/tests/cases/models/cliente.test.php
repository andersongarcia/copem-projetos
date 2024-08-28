<?php 
/* SVN FILE: $Id$ */
/* Cliente Test cases generated on: 2010-02-06 20:05:00 : 1265486700*/
App::import('Model', 'Cliente');

class ClienteTestCase extends CakeTestCase {
	var $Cliente = null;
	var $fixtures = array('app.cliente', 'app.contato', 'app.projeto');

	function startTest() {
		$this->Cliente =& ClassRegistry::init('Cliente');
	}

	function testClienteInstance() {
		$this->assertTrue(is_a($this->Cliente, 'Cliente'));
	}

	function testClienteFind() {
		$this->Cliente->recursive = -1;
		$results = $this->Cliente->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Cliente' => array(
			'id'  => 1,
			'nome'  => 'Lorem ipsum dolor sit amet',
			'logradouro'  => 'Lorem ipsum dolor sit amet',
			'numero'  => 'Lor',
			'complemento'  => 'Lorem ipsum dolor sit amet',
			'bairro'  => 'Lorem ipsum dolor sit amet',
			'cidade'  => 'Lorem ipsum dolor sit amet',
			'estado'  => '',
			'cep'  => 'Lorem ',
			'cnpj'  => 'Lorem ipsum d',
			'inscricao_estadual'  => 'Lorem ipsum dolor ',
			'email'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2010-02-06 20:05:00',
			'modified'  => '2010-02-06 20:05:00'
		));
		$this->assertEqual($results, $expected);
	}
}
?>