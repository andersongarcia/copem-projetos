<?php 
/* SVN FILE: $Id$ */
/* Aparelho Test cases generated on: 2010-01-23 03:16:04 : 1264216564*/
App::import('Model', 'Aparelho');

class AparelhoTestCase extends CakeTestCase {
	var $Aparelho = null;
	var $fixtures = array('app.aparelho');

	function startTest() {
		$this->Aparelho =& ClassRegistry::init('Aparelho');
	}

	function testAparelhoInstance() {
		$this->assertTrue(is_a($this->Aparelho, 'Aparelho'));
	}

	function testAparelhoFind() {
		$this->Aparelho->recursive = -1;
		$results = $this->Aparelho->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Aparelho' => array(
			'id'  => 1,
			'descricao'  => 'Lorem ipsum dolor sit amet'
		));
		$this->assertEqual($results, $expected);
	}
}
?>