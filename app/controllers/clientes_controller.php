<?php
class ClientesController extends AppController {

    var $name = 'Clientes';
    var $helpers = array('Html', 'Form', 'Javascript');

    function index() {
        $this->Cliente->recursive = 0;
        $this->set('clientes', $this->paginate());
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Cliente Inválido.', true));
            $this->redirect(array('action'=>'index'));
        }
        $this->set('cliente', $this->Cliente->read(null, $id));

        $contatos = $this->Cliente->Contato->find('all', array('conditions'=>array('cliente_id'=>$id)));
        $projetos = $this->Cliente->Projeto->find('all', array('conditions'=>array('cliente_id'=>$id)));

        $this->set(compact('contatos','projetos'));
    }

    function add() {
        if (!empty($this->data)) {
            $this->Cliente->create();
            if ($this->Cliente->save($this->data)) {
                $this->Session->setFlash(__('O Cliente foi salvo', true));
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('O Cliente não pode ser salvo. Por favor, tente novamente.', true));
            }
        }
        $estados = $estados = array(
                ''      => 'Selecione...',
                'AC'    => 'Acre',
                'AL'    => 'Alagoas',
                'AP'    => 'Amapá',
                'AM'    => 'Amazonas',
                'BA'    => 'Bahia',
                'CE'    => 'Ceará',
                'DF'    => 'Distrito Federal',
                'ES'    => 'Espírito Santo',
                'GO'    => 'Goiás',
                'MA'    => 'Maranhão',
                'MT'    => 'Mato Grosso',
                'MS'    => 'Mato Grosso do Sul',
                'MG'    => 'Minas Gerais',
                'PA'    => 'Pará',
                'PB'    => 'Paraíba',
                'PR'    => 'Paraná',
                'PE'    => 'Pernambuco',
                'PI'    => 'Piauí',
                'RJ'    => 'Rio de Janeiro',
                'RN'    => 'Rio Grande do Norte',
                'RS'    => 'Rio Grande do Sul',
                'RO'    => 'Rondônia',
                'RR'    => 'Roraima',
                'SC'    => 'Santa Catarina',
                'SP'    => 'São Paulo',
                'SE'    => 'Sergipe',
                'TO'    => 'Tocantins'
        );
        $this->set(compact('estados'));
    }

    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Cliente Inválido', true));
            $this->redirect(array('action'=>'index'));
        }
        if (!empty($this->data)) {
            if ($this->Cliente->save($this->data)) {
                $this->Session->setFlash(__('O Cliente foi salvo', true));
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('O Cliente não pode ser salvo. Por favor, tente novamente.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Cliente->read(null, $id);
        }
        $estados = $estados = array(
                ''      => 'Selecione...',
                'AC'    => 'Acre',
                'AL'    => 'Alagoas',
                'AP'    => 'Amapá',
                'AM'    => 'Amazonas',
                'BA'    => 'Bahia',
                'CE'    => 'Ceará',
                'DF'    => 'Distrito Federal',
                'ES'    => 'Espírito Santo',
                'GO'    => 'Goiás',
                'MA'    => 'Maranhão',
                'MT'    => 'Mato Grosso',
                'MS'    => 'Mato Grosso do Sul',
                'MG'    => 'Minas Gerais',
                'PA'    => 'Pará',
                'PB'    => 'Paraíba',
                'PR'    => 'Paraná',
                'PE'    => 'Pernambuco',
                'PI'    => 'Piauí',
                'RJ'    => 'Rio de Janeiro',
                'RN'    => 'Rio Grande do Norte',
                'RS'    => 'Rio Grande do Sul',
                'RO'    => 'Rondônia',
                'RR'    => 'Roraima',
                'SC'    => 'Santa Catarina',
                'SP'    => 'São Paulo',
                'SE'    => 'Sergipe',
                'TO'    => 'Tocantins'
        );
        $this->set(compact('estados'));
    }

    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Id inválido para Cliente', true));
            $this->redirect(array('action'=>'index'));
        }
        if ($this->Cliente->del($id)) {
            $this->Session->setFlash(__('Cliente excluído', true));
            $this->redirect(array('action'=>'index'));
        }
    }

}
?>