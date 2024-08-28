<?php
class ObrasController extends AppController {

	var $name = 'Obras';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Obra->recursive = 0;
		$this->set('obras', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Obra.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('obra', $this->Obra->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Obra->create();
			if ($this->Obra->save($this->data)) {
				$this->Session->setFlash(__('The Obra has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Obra could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Obra', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Obra->save($this->data)) {
				$this->Session->setFlash(__('The Obra has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Obra could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Obra->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Obra', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Obra->del($id)) {
			$this->Session->setFlash(__('Obra deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->Obra->recursive = 0;
		$this->set('obras', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Obra.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('obra', $this->Obra->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Obra->create();
			if ($this->Obra->save($this->data)) {
				$this->Session->setFlash(__('The Obra has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Obra could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Obra', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Obra->save($this->data)) {
				$this->Session->setFlash(__('The Obra has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Obra could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Obra->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Obra', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Obra->del($id)) {
			$this->Session->setFlash(__('Obra deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>