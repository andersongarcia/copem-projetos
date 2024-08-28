<?php
class UsuariosController extends AppController {

	var $name = 'Usuarios';
	var $helpers = array('Html', 'Form');
        var $scaffold = 'admin';

        /**
         *  The AuthComponent provides the needed functionality
         *  for login, so you can leave this function blank.
         */
        function logout() {
            $this->Session->del('Usuario');
            $this->redirect('/');
        }

        function login(){
            if(!empty($this->data)){
                $conditions = array('Usuario.username'=>$this->data['Usuario']['username']);
                $fields = array('Usuario.username', 'Usuario.password');

                $someone = $this->Usuario->find($conditions, $fields);

                if(!empty($this->data['Usuario']['password']) &&
                        ($someone['Usuario']['password'] == md5($this->data['Usuario']['password']))){
                    // logado
                    $this->Session->write('Usuario', $someone['Usuario']);

                    $this->redirect('/'.$this->Session->read('url_redirect'));
                    exit;
                }
            }
        }

        function beforeFilter() {

        }
}
?>