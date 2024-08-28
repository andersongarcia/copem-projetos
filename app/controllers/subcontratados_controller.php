<?php
class SubcontratadosController extends AppController {

	var $name = 'Subcontratados';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Subcontratado->recursive = 0;
		$this->set('subcontratados', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Subcontratado inválido.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('subcontratado', $this->Subcontratado->read(null, $id));
	}

	function add($id_projeto) {
		if (!empty($this->data)) {
			$this->Subcontratado->create();
			if ($this->Subcontratado->save($this->data)) {
				$this->Session->setFlash(__('O Subcontratado foi salvo', true));
				$this->redirect(array('controller'=>'projetos','action'=>'view',$this->data['Subcontratado']['projeto_id']));
			} else {
				$this->Session->setFlash(__('O Subcontratado não pode ser salvo. Por favor, tente novamente.', true));
			}
		}
		$conditions = array('Projeto.id' => $id_projeto);
		$projetos = $this->Subcontratado->Projeto->find('list', array('fields' => 'codigo', 'conditions' =>$conditions));
		$servicos = $this->Subcontratado->Servico->find('list', array('fields' => 'descricao'));
                $this->set('id_projeto', $id_projeto);
		$this->set(compact('projetos', 'servicos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Subcontratado inválido', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Subcontratado->save($this->data)) {
				$this->Session->setFlash(__('O Subcontratado foi salvo', true));
				$this->redirect(array('controller'=>'projetos','action'=>'view',$this->data['Subcontratado']['projeto_id']));
			} else {
				$this->Session->setFlash(__('O Subcontratado não pode ser salvo. Por favor, tente novamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Subcontratado->read(null, $id);
		}
		$conditions = array('Projeto.id' => $this->data['Projeto']['id']);
		$projetos = $this->Subcontratado->Projeto->find('list', array('fields' => 'codigo', 'conditions' =>$conditions));
		$servicos = $this->Subcontratado->Servico->find('list', array('fields' => 'descricao'));
		$this->set(compact('projetos','servicos'));
	}

	function delete($id = null) {
                $this->data = $this->Subcontratado->read(null, $id);
		if (!$id) {
			$this->Session->setFlash(__('Id inválido para Subcontratado', true));
			$this->redirect(array('controller'=>'projetos','action'=>'view','id'=>$this->data['Subcontratado']['projeto_id']));
		}
		if ($this->Subcontratado->del($id)) {
			$this->Session->setFlash(__('Subcontratado excluído', true));
			$this->redirect(array('controller'=>'projetos','action'=>'view','id'=>$this->data['Subcontratado']['projeto_id']));
		}
	}

}
?>