<?php
class ContratosController extends AppController {

	var $name = 'Contratos';
	var $helpers = array('Html', 'Form', 'Javascript', 'DatePicker', 'CakePtbr.Formatacao');

	function index() {
		$this->Contrato->recursive = 0;
		$this->set('contratos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Contrato inválido.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('contrato', $this->Contrato->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Contrato->create();
			if ($this->Contrato->save($this->data)) {
				$this->Session->setFlash(__('O Contrato foi salvo', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('O Contrato não pode ser salvo. Por favor, tente novamente.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Contrato inválido', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Contrato->save($this->data)) {
				$this->Session->setFlash(__('O Contrato foi salvo', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('O Contrato não pode ser salvo. Por favor, tente novamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Contrato->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id inválido para Contrato', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Contrato->del($id)) {
			$this->Session->setFlash(__('Contrato excluído', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>