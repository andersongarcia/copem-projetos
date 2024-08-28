<?php
class AppController extends Controller {

    function checkSession(){
        if(!$this->Session->check('Usuario')){
            $this->Session->write('url_redirect', $this->params['url']['url']);
            $this->redirect('/usuarios/login');
            exit;
        }
    }

    function beforeFilter(){
        //if(isset($this->params['admin'])){
            $this->checkSession();
        //}
        if($this->Session->check('Usuario')){
            $this->set('logado', 1);
            $this->set('usuario', $this->Session->read('Usuario.username'));
        }else
            $this->set('logado', 0);
    }
}
?>