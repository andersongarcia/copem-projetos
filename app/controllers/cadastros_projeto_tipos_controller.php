<?php
class CadastrosProjetoTiposController extends AppController {

	var $name = 'CadastrosProjetoTipos';
	var $helpers = array('Html', 'Form', 'Javascript');

	function admin_add($id_projeto_tipo) {
		if (!empty($this->data)) {
			$this->CadastrosProjetoTipo->create();
			if ($this->CadastrosProjetoTipo->save($this->data)) {
				$this->Session->setFlash(__('O Campo foi salvo', true));
				$this->redirect(array('controller'=>'projeto_tipos', 'action'=>'view', $this->data['CadastrosProjetoTipo']['projeto_tipo_id']));
			} else {
				$this->Session->setFlash(__('O Campo não pode ser salvo. Por favor, tente novamente.', true));
			}
		}
		$conditions = array('AND'=>array('Cadastro.fixo'=>false,'Cadastro.infraestrutura'=>false));
		$cadastros = $this->CadastrosProjetoTipo->Cadastro->find('list', array('order' => array('Cadastro.nome ASC'),'fields'=>'nome', 'conditions'=>$conditions));
		$conditions = array("ProjetoTipo.id" => $id_projeto_tipo);
		$projetoTipos = $this->CadastrosProjetoTipo->ProjetoTipo->find('list', array('fields' => 'codigo', 'conditions' =>$conditions));
		$formularios = $this->CadastrosProjetoTipo->Formulario->find('list', array('fields'=>'nome'));
                $this->set('id_projeto_tipo', $id_projeto_tipo);
		$this->set(compact('cadastros', 'projetoTipos', 'formularios'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Campo inválido', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->CadastrosProjetoTipo->save($this->data)) {
				$this->Session->setFlash(__('O Campo foi salvo', true));
				$this->redirect(array('controller'=>'projeto_tipos', 'action'=>'view', $this->data['CadastrosProjetoTipo']['projeto_tipo_id']));
			} else {
				$this->Session->setFlash(__('O Campo não pode ser salvo. Por favor, tente novamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CadastrosProjetoTipo->read(null, $id);
		}
		$conditions = array('Cadastro.fixo'=>false);
		$cadastros = $this->CadastrosProjetoTipo->Cadastro->find('list', array('fields'=>'nome', 'conditions'=>$conditions));
		$conditions = array("ProjetoTipo.id" => $this->data['CadastrosProjetoTipo']['projeto_tipo_id']);
		$projetoTipos = $this->CadastrosProjetoTipo->ProjetoTipo->find('list', array('fields' => 'codigo', 'conditions' =>$conditions));
		$formularios = $this->CadastrosProjetoTipo->Formulario->find('list', array('fields'=>'nome'));
		$this->set(compact('cadastros','projetoTipos','formularios'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id inválido para Campo', true));
			$this->redirect(array('action'=>'index'));
		}
                $this->CadastrosProjetoTipo->read();
                $id_projeto_tipo = $this->CadastrosProjetoTipo->data["CadastrosProjetoTipo"]['projeto_tipo_id'];
		if ($this->CadastrosProjetoTipo->del($id)) {
			$this->Session->setFlash(__('Campo excluído do formulário', true));
			$this->redirect(array('controller'=>'projeto_tipos', 'action'=>'view', 'id'=>$id_projeto_tipo));
		}
	}

}
?>