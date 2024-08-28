<?php
class Aparelho extends AppModel {

	var $name = 'Aparelho';
	var $validate = array(
		'descricao' => array('notempty')
	);

}
?>