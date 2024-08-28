<?php
class InfraestruturaTiposController extends AppController {

	var $name = 'InfraestruturaTipos';
	var $helpers = array('Html', 'Form');

	function admin_index() {
		$this->InfraestruturaTipo->recursive = 0;
		$this->set('infraestruturaTipos', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Tipo de Infraestrutura inválido.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('infraestruturaTipo', $this->InfraestruturaTipo->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->InfraestruturaTipo->create();
			if ($this->InfraestruturaTipo->save($this->data)) {
				$this->Session->setFlash(__('O Tipo de Infraestrutura foi salvo', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('O Tipo de Infraestrutura não pode ser salvo. Por favor, tente novamente.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Tipo de Infraestrutura inválido', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->InfraestruturaTipo->save($this->data)) {
				$this->Session->setFlash(__('O Tipo de Infraestrutura foi salvo', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('O Tipo de Infraestrutura não pode ser salvo. Por favor, tente novamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->InfraestruturaTipo->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id inválido para Tipo de Infraestrutura', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->InfraestruturaTipo->del($id)) {
			$this->Session->setFlash(__('Tipo de Infraestrutura excluído', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>