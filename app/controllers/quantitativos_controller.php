<?php
class QuantitativosController extends AppController {

	var $name = 'Quantitativos';
	var $helpers = array('Html', 'Form', 'Javascript');

	function index() {
		$this->Quantitativo->recursive = 0;
		$this->set('quantitativos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Quantitativo.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('quantitativo', $this->Quantitativo->read(null, $id));
	}

	function add($id_projeto) {
		if (!empty($this->data)) {
			$this->Quantitativo->create();
			if ($this->Quantitativo->save($this->data)) {
				$this->Session->setFlash(__('The Quantitativo has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Quantitativo could not be saved. Please, try again.', true));
			}
		}
		$conditions = array("Projeto.id" => $id_projeto);
		$projetos = $this->Quantitativo->Projeto->find('list', array('fields' => 'codigo', 'conditions' =>$conditions));
                $this->set('id_projeto', $id_projeto);
		$this->set(compact('projetos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Quantitativo', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Quantitativo->save($this->data)) {
				$this->Session->setFlash(__('The Quantitativo has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Quantitativo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Quantitativo->read(null, $id);
		}
		$projetos = $this->Quantitativo->Projeto->find('list');
		$this->set(compact('projetos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Quantitativo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Quantitativo->del($id)) {
			$this->Session->setFlash(__('Quantitativo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>