<?php
class AproximacoesController extends AppController {

    var $name = 'Aproximacoes';
    var $helpers = array('Html', 'Form');

    function admin_index() {
        $this->Aproximacao->recursive = 0;
        $this->set('aproximacoes', $this->paginate());
    }

    function admin_view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Aproximação Inválida.', true));
            $this->redirect(array('action'=>'index'));
        }
        $this->set('aproximacao', $this->Aproximacao->read(null, $id));
    }

    function admin_add() {
        if (!empty($this->data)) {
            $this->Aproximacao->create();
            if ($this->Aproximacao->save($this->data)) {
                $this->Session->setFlash(__('A Aproximação foi salva', true));
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('A Aproximação não pode ser salva. Por favor, tente novamente.', true));
            }
        }
    }

    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Aproximação Inválida', true));
            $this->redirect(array('action'=>'index'));
        }
        if (!empty($this->data)) {
            if ($this->Aproximacao->save($this->data)) {
                $this->Session->setFlash(__('A Aproximação foi salva', true));
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('A Aproximação não pode ser salva. Por favor, tente novamente.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Aproximacao->read(null, $id);
        }
    }

    function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Id inválido para Aproximação', true));
            $this->redirect(array('action'=>'index'));
        }
        if ($this->Aproximacao->del($id)) {
            $this->Session->setFlash(__('Aproximação excluída', true));
            $this->redirect(array('action'=>'index'));
        }
    }

}
?>