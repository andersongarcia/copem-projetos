<?php
class DadosController extends AppController {

	var $name = 'Dados';
	var $helpers = array('Html', 'Form');

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Dado inválido.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('dado', $this->Dado->read(null, $id));
	}

	function add($id_projeto) {
		if (!empty($this->data)) {
			$this->Dado->create();
			if ($this->Dado->save($this->data)) {
				$this->Session->setFlash(__('O Dado foi salvo', true));
				$this->redirect(array('controller'=>'projetos','action'=>'view',$this->data['Dado']['projeto_id']));
			} else {
				$this->Session->setFlash(__('O Dado não pode ser salvo. Por favor, tente novamente.', true));
			}
		}
		$conditions = array('Projeto.id' => $id_projeto);
		$projetos = $this->Dado->Projeto->find('list', array('fields' => 'codigo', 'conditions' =>$conditions));
		$servicos = $this->Dado->Servico->find('list', array('fields' => 'descricao'));
                $this->set('id_projeto', $id_projeto);
		$this->set(compact('projetos', 'servicos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Dado inválido', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Dado->save($this->data)) {
				$this->Session->setFlash(__('O Dado foi salvo', true));
				$this->redirect(array('controller'=>'projetos','action'=>'view',$this->data['Dado']['projeto_id']));
                        }else{
				$this->Session->setFlash(__('O Dado não pode ser salvo. Por favor, tente novamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Dado->read(null, $id);
		}
		$conditions = array('Projeto.id' => $this->data['Projeto']['id']);
		$projetos = $this->Dado->Projeto->find('list', array('fields' => 'codigo', 'conditions' =>$conditions));
		$servicos = $this->Dado->Servico->find('list', array('fields' => 'descricao'));
		$this->set(compact('projetos','servicos'));
	}

	function delete($id = null) {
                $this->data = $this->Dado->read(null, $id);
		if (!$id) {
			$this->Session->setFlash(__('Id inválido para Dado', true));
			$this->redirect(array('controller'=>'projetos','action'=>'view','id'=>$this->data['Dado']['projeto_id']));
		}
		if ($this->Dado->del($id)) {
			$this->Session->setFlash(__('Dado excluído', true));
			$this->redirect(array('controller'=>'projetos','action'=>'view','id'=>$this->data['Dado']['projeto_id']));
		}
	}

}
?>