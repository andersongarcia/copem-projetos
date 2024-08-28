<?php
class ProjetoTiposController extends AppController {

    var $name = 'ProjetoTipos';
    var $uses = array('ProjetoTipo','Cadastro');
    var $helpers = array('Html', 'Form', 'Javascript');

    function admin_index() {
        $this->ProjetoTipo->recursive = 0;
        $this->set('projetoTipos', $this->paginate());
    }

    function admin_view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Tipo de Projeto inválido.', true));
            $this->redirect(array('action'=>'index'));
        }
        $this->set('projetoTipo', $this->ProjetoTipo->read(null, $id));
    }

    function admin_add() {
        if (!empty($this->data)) {
            $this->ProjetoTipo->create();
            if ($this->ProjetoTipo->save($this->data)) {
                $this->Session->setFlash(__('O Tipo de Projeto foi salvo', true));
                $this->redirect(array('action'=>'view', 'id'=>$this->ProjetoTipo->id));
            } else {
                $this->Session->setFlash(__('O Tipo de Projeto não pode ser salvo. Por favor, tente novamente.', true));
            }
        }
    }

    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Tipo de Projeto inválido', true));
            $this->redirect(array('action'=>'index'));
        }
        if (!empty($this->data)) {
            if ($this->ProjetoTipo->save($this->data)) {
                $this->Session->setFlash(__('O Tipo de Projeto foi salvo', true));
                $this->redirect(array('action'=>'view', 'id'=>$this->ProjetoTipo->id));
            } else {
                $this->Session->setFlash(__('O Tipo de Projeto não pode ser salvo. Por favor, tente novamente.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->ProjetoTipo->read(null, $id);
        }
        //$cadastros = $this->ProjetoTipo->Cadastro->find('list');
        $infraestruturaTipos = $this->ProjetoTipo->InfraestruturaTipo->find('list', array('fields'=>'descricao'));
        $this->set(compact('infraestruturaTipos'));
    }

    function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Id inválido para Tipo de Projeto', true));
            $this->redirect(array('action'=>'index'));
        }
        if ($this->ProjetoTipo->del($id)) {
            $this->Session->setFlash(__('Tipo de Projeto excluído', true));
            $this->redirect(array('action'=>'index'));
        }
    }

    function admin_delete_infraestrutura_tipo($infraestrutura_tipo_id = null) {
        if (!$infraestrutura_tipo_id) {
            $this->Session->setFlash(__('Id inválido para Tipo de Infraestrutura', true));
            $this->redirect(array('action'=>'index'));
        }
        if ($this->ProjetoTipo->InfraestruturaTiposProjetoTipo->del($id)) {
            $this->Session->setFlash(__('Tipo de Infraestrutura excluído do formulário', true));
            $this->redirect(array('action'=>'view','id'=>$this->data['Projeto']['id']));
        }
    }
}
?>