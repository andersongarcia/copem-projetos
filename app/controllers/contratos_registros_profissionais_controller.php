<?php
class ContratosRegistrosProfissionaisController extends AppController {

	var $name = 'ContratosRegistrosProfissionais';
	var $helpers = array('Html', 'Form', 'Javascript', 'DatePicker');

	function index() {
		$this->ContratosRegistrosProfissional->recursive = 0;
		$this->set('contratosRegistrosProfissionais', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Documento inválido.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('contratosRegistrosProfissional', $this->ContratosRegistrosProfissional->read(null, $id));
	}

	function add($id_contrato) {
		if (!empty($this->data)) {
			$this->ContratosRegistrosProfissional->create();
			if ($this->ContratosRegistrosProfissional->save($this->data)) {
				$this->Session->setFlash(__('O Documento foi salvo', true));
				$this->redirect(array('controller'=>'contratos','action'=>'view', 'id'=>$this->data['ContratosRegistrosProfissional']['contrato_id']));
			} else {
				$this->Session->setFlash(__('O Documento não pode ser salvo. Por favor, tente novamente.', true));
			}
		}
		$conditions = array('Contrato.id' => $id_contrato);
		$contratos = $this->ContratosRegistrosProfissional->Contrato->find('list', array('fields'=>'edital', 'conditions' =>$conditions));

                $this->set('id_contrato', $id_contrato);
		$this->set(compact('contratos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Documento inválido', true));
                        $this->redirect(array('controller'=>'contratos','action'=>'view',$this->data['ContratosRegistrosProfissional']['contrato_id']));
		}
		if (!empty($this->data)) {
			if ($this->ContratosRegistrosProfissional->save($this->data)) {
				$this->Session->setFlash(__('O Documento foi salvo', true));
				$this->redirect(array('controller'=>'contratos','action'=>'view',$this->data['ContratosRegistrosProfissional']['contrato_id']));
			} else {
				$this->Session->setFlash(__('O Documento não pode ser salvo. Por favor, tente novamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ContratosRegistrosProfissional->read(null, $id);
		}
		$conditions = array('Contrato.id' => $this->data['ContratosRegistrosProfissional']['contrato_id']);
		$contratos = $this->ContratosRegistrosProfissional->Contrato->find('list', array('fields'=>'edital', 'conditions' =>$conditions));

                $this->set(compact('contratos'));
	}

	function delete($id = null) {
                $this->data = $this->ContratosRegistrosProfissional->read(null, $id);
		if (!$id) {
			$this->Session->setFlash(__('Id inválido para Documento', true));
			$this->redirect(array('controller'=>'contratos','action'=>'view','id'=>$this->data['ContratosRegistrosProfissional']['contrato_id']));
		}
		if ($this->ContratosRegistrosProfissional->del($id)) {
			$this->Session->setFlash(__('Documento excluído', true));
			$this->redirect(array('controller'=>'contratos','action'=>'view','id'=>$this->data['ContratosRegistrosProfissional']['contrato_id']));
		}
	}

}
?>