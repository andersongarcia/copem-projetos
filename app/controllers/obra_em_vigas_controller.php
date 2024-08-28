<?php
class ObraEmVigasController extends AppController {

	var $name = 'ObraEmVigas';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->ObraEmViga->recursive = 0;
		$this->set('obraEmVigas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ObraEmViga.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('obraEmViga', $this->ObraEmViga->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ObraEmViga->create();
			if ($this->ObraEmViga->save($this->data)) {
				$this->Session->setFlash(__('The ObraEmViga has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ObraEmViga could not be saved. Please, try again.', true));
			}
		}
		$superestruturas = $this->ObraEmViga->Superestrutura->find('list');
		$this->set(compact('superestruturas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ObraEmViga', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ObraEmViga->save($this->data)) {
				$this->Session->setFlash(__('The ObraEmViga has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ObraEmViga could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ObraEmViga->read(null, $id);
		}
		$superestruturas = $this->ObraEmViga->Superestrutura->find('list');
		$this->set(compact('superestruturas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ObraEmViga', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ObraEmViga->del($id)) {
			$this->Session->setFlash(__('ObraEmViga deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>