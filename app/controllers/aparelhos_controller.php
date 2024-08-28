<?php
class AparelhosController extends AppController {

	var $name = 'Aparelhos';
	var $helpers = array('Html', 'Form');

	function admin_index() {
		$this->Aparelho->recursive = 0;
		$this->set('aparelhos', $this->paginate());
	}

        function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Aparelho de Apoio Inválido.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('aparelho', $this->Aparelho->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Aparelho->create();
			if ($this->Aparelho->save($this->data)) {
				$this->Session->setFlash(__('O Aparelho de Apoio foi salvo', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('O Aparelho de Apoio não pode ser salvo. Por favor, tente novamente.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Aparelho de Apoio Inválido', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Aparelho->save($this->data)) {
				$this->Session->setFlash(__('O Aparelho de Apoio foi salvo', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('O Aparelho de Apoio não pode ser salvo. Por favor, tente novamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Aparelho->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id Inválido para o Aparelho de Apoio', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Aparelho->del($id)) {
			$this->Session->setFlash(__('Aparelho de Apoio excluído', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>