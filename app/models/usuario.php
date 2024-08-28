<?php
class Usuario extends AppModel {

	var $name = 'Usuario';
	var $validate = array(
		'username' => array('notempty')
	);

}
?>