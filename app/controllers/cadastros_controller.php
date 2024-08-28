<?php
class CadastrosController extends AppController {

	var $name = 'Cadastros';
        var $displayField = 'nome';
	var $helpers = array('Html', 'Form');

	function admin_index() {
		$this->Cadastro->recursive = 0;
		$this->set('cadastros', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Cadastro.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('cadastro', $this->Cadastro->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Cadastro->create();
			if ($this->Cadastro->save($this->data)) {
				$this->Session->setFlash(__('The Cadastro has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Cadastro could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Cadastro', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Cadastro->save($this->data)) {
				$this->Session->setFlash(__('The Cadastro has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Cadastro could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Cadastro->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Cadastro', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Cadastro->del($id)) {
			$this->Session->setFlash(__('Cadastro deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

        function admin_menu(){
            $conditions = array('Cadastro.admin'=>true);
            $cadastros = $this->set('cadastros', $this->Cadastro->find('all', array('conditions'=>$conditions)));
        }
}
?>