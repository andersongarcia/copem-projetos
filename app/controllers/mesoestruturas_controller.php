<?php
class MesoestruturasController extends AppController {

	var $name = 'Mesoestruturas';
        var $uses = array('Mesoestrutura','ProjetoTipo');
	var $helpers = array('Html', 'Form', 'Javascript');

	function index() {
		$this->Mesoestrutura->recursive = 0;
		$this->set('mesoestruturas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Mesoestrutura Inválida.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('mesoestrutura', $this->Mesoestrutura->read(null, $id));
	}

	function add($id_projeto) {
		if (!empty($this->data)) {
			$this->Mesoestrutura->create();
			if ($this->Mesoestrutura->save($this->data)) {
				$this->Session->setFlash(__('A Mesoestrutura foi salva.', true));
				$this->redirect(array('controller'=>'projetos','action'=>'view',$this->data['Mesoestrutura']['projeto_id']));
			} else {
				$this->Session->setFlash(__('A Mesoestrutura não pode ser salva. Por favor, tente novamente.', true));
			}
		}
		$conditions = array("Projeto.id" => $id_projeto);
		$projetos = $this->Mesoestrutura->Projeto->find('list', array('fields' => 'codigo', 'conditions' =>$conditions));
		$pilares = $this->Mesoestrutura->Pilar->find('list', array('fields' => 'descricao'));
		$aparelhos = $this->Mesoestrutura->Aparelho->find('list', array('fields' => 'descricao'));
		$aproximacoes = $this->Mesoestrutura->Aproximacao->find('list', array('fields' => 'descricao'));

                $this->data = $this->Mesoestrutura->Projeto->read(null, $id_projeto);
                $this->data = $this->ProjetoTipo->read(null, $this->data['Projeto']['projeto_tipo_id']);

                $this->set('id_projeto', $id_projeto);
		$this->set(compact('projetos', 'pilares', 'aparelhos', 'aproximacoes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Mesoestrutura Inválida', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Mesoestrutura->save($this->data)) {
				$this->Session->setFlash(__('A Mesoestrutura foi salva', true));
				$this->redirect(array('controller'=>'projetos','action'=>'view',$this->data['Mesoestrutura']['projeto_id']));
			} else {
				$this->Session->setFlash(__('A Mesoestrutura não pode ser salva. Por favor, tente novamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Mesoestrutura->read(null, $id);
		}
                $projetoTipo = $this->ProjetoTipo->read(null, $this->data['Projeto']['projeto_tipo_id']);
		$conditions = array('Projeto.id'=>$this->data['Projeto']['id']);
		$projetos = $this->Mesoestrutura->Projeto->find('list', array('fields'=>'codigo', 'conditions'=>$conditions));
		$pilares = $this->Mesoestrutura->Pilar->find('list', array('fields' => 'descricao'));
		$aparelhos = $this->Mesoestrutura->Aparelho->find('list', array('fields' => 'descricao'));
		$aproximacoes = $this->Mesoestrutura->Aproximacao->find('list', array('fields' => 'descricao'));
		$this->set(compact('projetoTipo','projetos','pilares','aparelhos','aproximacoes'));
	}

	function delete($id = null) {
                $this->data = $this->Mesoestrutura->read(null, $id);
		if (!$id) {
			$this->Session->setFlash(__('Id inválido para Mesoestrutura', true));
			$this->redirect(array('controller'=>'projetos','action'=>'view','id'=>$this->data['Mesoestrutura']['projeto_id']));
		}
		if ($this->Mesoestrutura->del($id)) {
			$this->Session->setFlash(__('Mesoestrutura excluída', true));
			$this->redirect(array('controller'=>'projetos','action'=>'view','id'=>$this->data['Mesoestrutura']['projeto_id']));
		}
	}

}
?>