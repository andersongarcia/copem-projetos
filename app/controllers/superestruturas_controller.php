<?php
class SuperestruturasController extends AppController {

	var $name = 'Superestruturas';
        var $uses = array('Superestrutura','ProjetoTipo');
	var $helpers = array('Html', 'Form', 'Javascript');

	function index() {
		$this->Superestrutura->recursive = 2;
		$this->set('superestruturas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Superestrutura Inválida.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('superestrutura', $this->Superestrutura->read(null, $id));
	}

	function add($id_projeto) {
		if (!empty($this->data)) {
			$this->Superestrutura->create();
			if ($this->Superestrutura->saveAll($this->data)) {
				$this->Session->setFlash(__('A Superestrutura foi salva', true));
				$this->redirect(array('controller'=>'projetos','action'=>'view',$this->data['Superestrutura']['projeto_id']));
			} else {
				$this->Session->setFlash(__('A Superestrutura não pode ser salva. Por favor, tente novamente.', true));
			}
		}
		$conditions = array("Projeto.id" => $id_projeto);
		$projetos = $this->Superestrutura->Projeto->find('list', array('fields' => 'codigo', 'conditions' =>$conditions));
		$movimentacoes = $this->Superestrutura->Movimentacao->find('list', array('fields' => 'descricao'));
		$materiais = $this->Superestrutura->Material->find('list', array('fields' => 'descricao'));
		$moldagens = $this->Superestrutura->Moldagem->find('list', array('fields' => 'descricao'));
		$montagens = $this->Superestrutura->Montagem->find('list', array('fields' => 'descricao'));
		$obras = $this->Superestrutura->Obra->find('list', array('fields' => 'descricao'));

                $this->data = $this->Superestrutura->Projeto->read(null, $id_projeto);
                $this->data = $this->ProjetoTipo->read(null, $this->data['Projeto']['projeto_tipo_id']);

                $this->set('id_projeto', $id_projeto);
		$this->set(compact('projetos', 'movimentacoes', 'materiais', 'moldagens', 'montagens', 'obras'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Superestrutura Inválida', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Superestrutura->saveAll($this->data)) {
				$this->Session->setFlash(__('A Superestrutura foi salva', true));
				$this->redirect(array('controller'=>'projetos','action'=>'view',$this->data['Superestrutura']['projeto_id']));
			} else {
				$this->Session->setFlash(__('A Superestrutura não pode ser salva. Por favor, tente novamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Superestrutura->read(null, $id);
		}
                $projetoTipo = $this->ProjetoTipo->read(null, $this->data['Projeto']['projeto_tipo_id']);
		$conditions = array("Projeto.id" => $this->data['Projeto']['id']);
		$projetos = $this->Superestrutura->Projeto->find('list', array('fields'=>'codigo', 'conditions'=>$conditions));
		$movimentacoes = $this->Superestrutura->Movimentacao->find('list', array('fields' => 'descricao'));
		$materiais = $this->Superestrutura->Material->find('list', array('fields' => 'descricao'));
		$moldagens = $this->Superestrutura->Moldagem->find('list', array('fields' => 'descricao'));
		$montagens = $this->Superestrutura->Montagem->find('list', array('fields' => 'descricao'));
		$obras = $this->Superestrutura->Obra->find('list', array('fields' => 'descricao'));
		$this->set(compact('projetoTipo','projetos','movimentacoes','materiais','moldagens','montagens','obras'));
	}

	function delete($id = null) {
                $this->data = $this->Superestrutura->read(null, $id);
		if (!$id) {
			$this->Session->setFlash(__('Id inválido para Superestrutura', true));
			$this->redirect(array('controller'=>'projetos','action'=>'view','id'=>$this->data['Superestrutura']['projeto_id']));
		}
		if ($this->Superestrutura->del($id)) {
			$this->Session->setFlash(__('Superestrutura excluída', true));
			$this->redirect(array('controller'=>'projetos','action'=>'view','id'=>$this->data['Superestrutura']['projeto_id']));
		}
	}

}
?>