<?php
class ObraEmLajesController extends AppController {

	var $name = 'ObraEmLajes';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->ObraEmLaje->recursive = 0;
		$this->set('obraEmLajes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ObraEmLaje.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('obraEmLaje', $this->ObraEmLaje->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ObraEmLaje->create();
			if ($this->ObraEmLaje->save($this->data)) {
				$this->Session->setFlash(__('The ObraEmLaje has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ObraEmLaje could not be saved. Please, try again.', true));
			}
		}
		$superestruturas = $this->ObraEmLaje->Superestrutura->find('list');
		$this->set(compact('superestruturas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ObraEmLaje', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ObraEmLaje->save($this->data)) {
				$this->Session->setFlash(__('The ObraEmLaje has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ObraEmLaje could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ObraEmLaje->read(null, $id);
		}
		$superestruturas = $this->ObraEmLaje->Superestrutura->find('list');
		$this->set(compact('superestruturas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ObraEmLaje', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ObraEmLaje->del($id)) {
			$this->Session->setFlash(__('ObraEmLaje deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>