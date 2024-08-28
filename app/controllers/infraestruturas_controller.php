<?php
class InfraestruturasController extends AppController {

	var $name = 'Infraestruturas';
        var $uses = array('Infraestrutura','ProjetoTipo','InfraestruturaTiposProjetoTipo');
	var $helpers = array('Html', 'Form', 'Javascript');

	function index() {
		$this->Infraestrutura->recursive = 0;
		$this->set('infraestruturas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Infraestrutura inválida.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('infraestrutura', $this->Infraestrutura->read(null, $id));
	}

	function add($id_projeto) {
		if (!empty($this->data)) {
			$this->Infraestrutura->create();
			if ($this->Infraestrutura->save($this->data)) {
				$this->Session->setFlash(__('A Infraestrutura foi salva', true));
				$this->redirect(array('action'=>'edit', 'id'=>$this->Infraestrutura->id));
			} else {
				$this->Session->setFlash(__('A Infraestrutura não pode ser salva. Por favor, tente novamente.', true));
			}
		}
		$conditions = array('Projeto.id' => $id_projeto);
		$projetos = $this->Infraestrutura->Projeto->find('list', array('fields' => 'codigo', 'conditions' =>$conditions));

                $this->data = $this->Infraestrutura->Projeto->read(null, $id_projeto);

                $options['joins'] = array(
                    array('table' => 'infraestrutura_tipos_projeto_tipos',
                        'alias' => 'InfraestruturaTiposProjetoTipo',
                        'type' => 'inner',
                        'conditions' => array(
                            'InfraestruturaTipo.id = InfraestruturaTiposProjetoTipo.infraestrutura_tipo_id'
                        )
                    ),
                    array('table' => 'projeto_tipos',
                        'alias' => 'ProjetoTipo',
                        'type' => 'inner',
                        'conditions' => array(
                            'InfraestruturaTiposProjetoTipo.projeto_tipo_id = ProjetoTipo.id'
                        )
                    )
                );
                $options['conditions'] = array('ProjetoTipo.id' => $this->data['Projeto']['projeto_tipo_id']);
                $options['fields'] = 'descricao';

                $infraestruturaTipos = $this->Infraestrutura->InfraestruturaTipo->find('list', $options);


                $this->set('id_projeto', $id_projeto);
                $this->set(compact('projetos', 'infraestruturaTipos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Infraestrutura inválida', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Infraestrutura->save($this->data)) {
				$this->Session->setFlash(__('A Infraestrutura foi salva', true));
				$this->redirect(array('controller'=>'projetos','action'=>'view',$this->data['Infraestrutura']['projeto_id']));
			} else {
				$this->Session->setFlash(__('A Infraestrutura não pode ser salva. Por favor, tente novamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Infraestrutura->read(null, $id);
		}
                $projetoTipo = $this->ProjetoTipo->read(null, $this->data['Projeto']['projeto_tipo_id']);
		$conditions = array("Projeto.id" => $this->data['Projeto']['id']);
		$projetos = $this->Infraestrutura->Projeto->find('list', array('fields'=>'codigo', 'conditions'=>$conditions));
		$infraestruturaTipos = $this->Infraestrutura->InfraestruturaTipo->find('list', array('fields' => 'descricao'));
		$tubuloes = $this->Infraestrutura->Tubulao->find('list', array('fields' => 'descricao'), true);
		$estacoes = $this->Infraestrutura->Estacao->find('list', array('fields' => 'descricao'), true);
		$estacas = $this->Infraestrutura->Estaca->find('list', array('fields' => 'descricao'), true);
		$sapatas = $this->Infraestrutura->Sapata->find('list', array('fields' => 'descricao'), true);
		$taludes = $this->Infraestrutura->Talude->find('list', array('fields' => 'descricao'), true);
		$terrenos = $this->Infraestrutura->Terreno->find('list', array('fields' => 'descricao'), true);
		$this->set(compact('projetoTipo','projetos','infraestruturaTipos','tubuloes','estacoes','estacas','sapatas','taludes','terrenos'));
	}

	function delete($id = null) {
                $this->data = $this->Infraestrutura->read(null, $id);
		if (!$id) {
			$this->Session->setFlash(__('Id inválido para Infraestrutura', true));
			$this->redirect(array('controller'=>'projetos','action'=>'view','id'=>$this->data['Infraestrutura']['projeto_id']));
		}
		if ($this->Infraestrutura->del($id)) {
			$this->Session->setFlash(__('Infraestrutura excluída', true));
			$this->redirect(array('controller'=>'projetos','action'=>'view','id'=>$this->data['Infraestrutura']['projeto_id']));
		}
	}

}
?>