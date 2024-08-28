<?php
class ContatosController extends AppController {

	var $name = 'Contatos';
	var $helpers = array('Html', 'Form', 'Javascript');

	function index() {
		$this->Contato->recursive = 0;
		$this->set('contatos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Contato inválido.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('contato', $this->Contato->read(null, $id));
	}

	function add($id_cliente) {
		if (!empty($this->data)) {
			$this->Contato->create();
			if ($this->Contato->save($this->data)) {
				$this->Session->setFlash(__('O Contato foi salvo', true));
				$this->redirect(array('controller'=>'clientes','action'=>'view',$this->data['Contato']['cliente_id']));
			} else {
				$this->Session->setFlash(__('O Contato não pode ser salvo. Por favor, tente novamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Contato->Cliente->read(null, $id_cliente);
		}
		$conditions = array('Cliente.id' => $id_cliente);
		$clientes = $this->Contato->Cliente->find('list', array('fields' => 'nome', 'conditions' =>$conditions));

                $this->set('id_cliente', $id_cliente);
		$this->set(compact('clientes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Contato inválido', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Contato->save($this->data)) {
				$this->Session->setFlash(__('O Contato foi salvo', true));
				$this->redirect(array('controller'=>'clientes','action'=>'view',$this->data['Contato']['cliente_id']));
			} else {
				$this->Session->setFlash(__('O Contato não pode ser salvo. Por favor, tente novamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Contato->read(null, $id);
		}
		$clientes = $this->Contato->Cliente->find('list', array('fields' => 'nome'));
		$this->set(compact('clientes'));
	}

	function delete($id = null) {
                $this->data = $this->Contato->read(null, $id);
		if (!$id) {
			$this->Session->setFlash(__('Id inválido para Contato', true));
			$this->redirect(array('controller'=>'clientes','action'=>'view','id'=>$this->data['Contato']['cliente_id']));
		}
		if ($this->Contato->del($id)) {
			$this->Session->setFlash(__('Contato excluído', true));
			$this->redirect(array('controller'=>'clientes','action'=>'view','id'=>$this->data['Contato']['cliente_id']));
		}
	}

}
?>