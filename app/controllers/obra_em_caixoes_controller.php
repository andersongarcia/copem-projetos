<?php
class ObraEmCaixoesController extends AppController {

	var $name = 'ObraEmCaixoes';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->ObraEmCaixao->recursive = 0;
		$this->set('obraEmCaixoes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ObraEmCaixao.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('obraEmCaixao', $this->ObraEmCaixao->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ObraEmCaixao->create();
			if ($this->ObraEmCaixao->save($this->data)) {
				$this->Session->setFlash(__('The ObraEmCaixao has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ObraEmCaixao could not be saved. Please, try again.', true));
			}
		}
		$superestruturas = $this->ObraEmCaixao->Superestrutura->find('list');
		$this->set(compact('superestruturas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ObraEmCaixao', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ObraEmCaixao->save($this->data)) {
				$this->Session->setFlash(__('The ObraEmCaixao has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ObraEmCaixao could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ObraEmCaixao->read(null, $id);
		}
		$superestruturas = $this->ObraEmCaixao->Superestrutura->find('list');
		$this->set(compact('superestruturas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ObraEmCaixao', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ObraEmCaixao->del($id)) {
			$this->Session->setFlash(__('ObraEmCaixao deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>