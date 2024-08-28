<?php
class ProjetosController extends AppController {

	var $name = 'Projetos';
        var $uses = array('Projeto');
	var $helpers = array('Html', 'Form', 'Javascript', 'Number');

	function index() {
                $this->setar_filtros();

                $this->Projeto->recursive = 0;

                $projetos = $this->paginate();

                $this->set(compact('projetos','title'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Projeto Inválido.', true));
			$this->redirect(array('action'=>'index'));
		}
                $projeto = $this->Projeto->read(null, $id);
                $infraestrutura = $this->Projeto->Infraestrutura->read(null, $projeto['Infraestrutura']['id']);
                $dados = $this->Projeto->Dado->find('all', array('conditions'=>array('projeto_id'=>$id)));
                $subcontratados = $this->Projeto->Subcontratado->find('all', array('conditions'=>array('projeto_id'=>$id)));
		$this->set(compact('projeto', 'infraestrutura', 'dados', 'subcontratados'));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Projeto->create();
			if ($this->Projeto->save($this->data)) {
                                // Salva dados
                                foreach($this->data['Dado'] AS $dado){
                                    if($dado['Servico']){
                                        $this->Projeto->Dado->create();
                                        $this->Projeto->Dado->set(
                                                array(
                                                    'projeto_id'=>$this->Projeto->id,
                                                    'servico_id'=>$dado['Servico'],
                                                    'empresa'=>$dado['Empresa']
                                                    )
                                                );
                                        $this->Projeto->Dado->save();
                                    }
                                }

                                // Salva subcontratados
                                foreach($this->data['Subcontratado'] AS $dado){
                                    if($dado['Servico']){
                                        $this->Projeto->Subcontratado->create();
                                        $this->Projeto->Subcontratado->set(
                                                array(
                                                    'projeto_id'=>$this->Projeto->id,
                                                    'servico_id'=>$dado['Servico'],
                                                    'empresa'=>$dado['Empresa']
                                                    )
                                                );
                                        $this->Projeto->Subcontratado->save();
                                    }
                                }

                                $this->Session->setFlash(__('O Projeto foi salvo', true));
				$this->redirect(array('action'=>'edit', 'id'=>$this->Projeto->id));
			} else {
				$this->Session->setFlash(__('O Projeto não pode ser salvo. Por favor, tente novamente.', true));
			}
		}
		$projetoTipos = $this->Projeto->ProjetoTipo->find('list', array('fields' => 'descricao'));
		$clientes = $this->Projeto->Cliente->find('list', array('fields' => 'nome'));
		$escopos = $this->Projeto->Escopo->find('list', array('fields' => 'descricao'));
		$servicos = $this->Projeto->Dado->Servico->find('all');
		$this->set(compact('projetoTipos', 'clientes', 'escopos', 'servicos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Projeto Inválido', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Projeto->save($this->data)) {
				$this->Session->setFlash(__('O Projeto foi salvo', true));
				$this->redirect(array('action'=>'view','id'=>$this->Projeto->id));
			} else {
				$this->Session->setFlash(__('O Projeto não pode ser salvo. Por favor, tente novamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Projeto->read(null, $id);
		}
		$projetoTipos = $this->Projeto->ProjetoTipo->find('list', array('fields' => 'descricao'));
		$clientes = $this->Projeto->Cliente->find('list', array('fields' => 'nome'));
		$escopos = $this->Projeto->Escopo->find('list', array('fields' => 'descricao'));
		//$servicos = $this->Projeto->Servico->find('list', array('fields' => 'descricao'));
		$transposicoes = $this->Projeto->Transposicao->find('list', array('fields' => 'descricao'));
		$classes = $this->Projeto->Classe->find('list', array('fields' => 'descricao'));
		$movimentacoes = $this->Projeto->Movimentacao->find('list', array('fields' => 'descricao'));
		$finalidades = $this->Projeto->Finalidade->find('list', array('fields' => 'descricao'));
		$taludes = $this->Projeto->Talude->find('list', array('fields' => 'descricao'));
		$terraplenos = $this->Projeto->Terrapleno->find('list', array('fields' => 'descricao'));
		$materiais = $this->Projeto->Material->find('list', array('fields' => 'descricao'));
		$moldagens = $this->Projeto->Moldagem->find('list', array('fields' => 'descricao'));

                /*$conditions = array('AND' => array(
                    'CadastrosProjetoTipo.projeto_tipo_id'=>$this->data['ProjetoTipo']['id'],
                    'Cadastros.tipo'=>''
                    )
                );
                $this->Projeto->ProjetoTipo->bindModel(array('hasOne' => array('CadastrosProjetoTipo')));
                $cadastros = $this->Projeto->ProjetoTipo->find('all',
                        array('conditions'=>$conditions));*/

                $cadastros = $this->data['ProjetoTipo']['Cadastro'];
		$this->set(compact('projetoTipos','clientes','escopos','transposicoes','classes','movimentacoes','finalidades','taludes','terraplenos','materiais','moldagens','cadastros'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id inválido para Projeto', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Projeto->del($id)) {
			$this->Session->setFlash(__('Projeto excluído', true));
			$this->redirect(array('action'=>'index'));
		}
	}

        function busca($criterios = null){
            // the page we will redirect to
                $url['action'] = 'index';

                // build a URL will all the search elements in it
                // the resulting URL will be
                // example.com/cake/posts/index/Search.keywords:mykeyword/Search.tag_id:3
                foreach ($this->data as $k=>$v){
                        foreach ($v as $kk=>$vv){
                            if(($kk=='projeto_padrao') && ($vv=='0'))
                                continue;
                                $url[$k.'.'.$kk]=$vv;
                        }
                }

                // redirect the user to the url
                $this->redirect($url, null, true);
        }

        function busca_avancada(){
		$projetoTipos = $this->Projeto->ProjetoTipo->find('list', array('fields' => 'descricao'));
		$clientes = $this->Projeto->Cliente->find('list', array('fields' => 'nome'));
		$escopos = $this->Projeto->Escopo->find('list', array('fields' => 'descricao'));
		//$servicos = $this->Projeto->Dado->Servico->find('list', array('fields' => 'descricao'));
		$transposicoes = $this->Projeto->Transposicao->find('list', array('fields' => 'descricao'));
		$classes = $this->Projeto->Classe->find('list', array('fields' => 'descricao'));
		$movimentacoes = $this->Projeto->Movimentacao->find('list', array('fields' => 'descricao'));
		$finalidades = $this->Projeto->Finalidade->find('list', array('fields' => 'descricao'));
		$taludes = $this->Projeto->Talude->find('list', array('fields' => 'descricao'));
		$terraplenos = $this->Projeto->Terrapleno->find('list', array('fields' => 'descricao'));
		$materiais = $this->Projeto->Material->find('list', array('fields' => 'descricao'));
		$moldagens = $this->Projeto->Moldagem->find('list', array('fields' => 'descricao'));

                $this->set(compact('projetoTipos','clientes','escopos','servicos','transposicoes','classes','movimentacoes','finalidades','taludes','terraplenos','materiais','moldagens'));

                // Superestrutura
                $s_movimentacoes = $movimentacoes;
                $s_materiais = $materiais;
                $s_moldagens = $moldagens;
                $montagens = $this->Projeto->Superestrutura->Montagem->find('list', array('fields' => 'descricao'));
                $obras = $this->Projeto->Superestrutura->Obra->find('list', array('fields' => 'descricao'));

                $this->set(compact('s_movimentacoes','s_materiais','s_moldagens','montagens','obras'));

                // Mesoestrutura
                $pilares = $this->Projeto->Mesoestrutura->Pilar->find('list', array('fields'=>'descricao'));
                $aparelhos = $this->Projeto->Mesoestrutura->Aparelho->find('list', array('fields'=>'descricao'));
                $aproximacoes = $this->Projeto->Mesoestrutura->Aproximacao->find('list', array('fields'=>'descricao'));

                $this->set(compact('pilares','aparelhos','aproximacoes'));

                // Infraestrutura
                $infraestruturaTipos = $this->Projeto->Infraestrutura->InfraestruturaTipo->find('list', array('fields'=>'descricao'));
                $tubuloes = $this->Projeto->Infraestrutura->Tubulao->find('list', array('fields'=>'descricao'));
                $estacoes = $this->Projeto->Infraestrutura->Estacao->find('list', array('fields'=>'descricao'));
                $estacas = $this->Projeto->Infraestrutura->Estaca->find('list', array('fields'=>'descricao'));
                $sapatas = $this->Projeto->Infraestrutura->Sapata->find('list', array('fields'=>'descricao'));
                $i_taludes = $this->Projeto->Infraestrutura->Talude->find('list', array('fields'=>'descricao'));
                $terrenos = $this->Projeto->Infraestrutura->Terreno->find('list', array('fields'=>'descricao'));

                $this->set(compact('infraestruturaTipos','tubuloes','estacoes','estacas','sapatas','i_taludes','terrenos'));
        }

        function setar_filtros(){
            // filtro rápido
            if(isset($this->passedArgs['Search.q'])) {
                    $this->paginate['conditions']['OR']['Projeto.codigo LIKE'] =
                            '%'.$this->passedArgs['Search.q'].'%';
                    $this->paginate['conditions']['OR']['Projeto.nome LIKE'] =
                            '%'.$this->passedArgs['Search.q'].'%';
                    $this->data['Search']['q'] = $this->passedArgs['Search.q'];
            }else{
                // filtro por codigo
                $this->filtro_por_texto('Projeto','codigo');

                // filtro por nome
                $this->filtro_por_texto('Projeto','nome');

                // filtro por local
                $this->filtro_por_texto('Projeto','local');

                // filtro por tipo de projeto
                $this->filtro_por_id('ProjetoTipo','projeto_tipo_id');

                // filtro por cliente
                $this->filtro_por_id('Cliente','cliente_id');

                // filtro por escopo
                $this->filtro_por_id('Escopo', 'escopo_id');

                // filtro por local especifico
                $this->filtro_por_texto('Projeto', 'local_especifico');

                // filtro por rodovia
                $this->filtro_por_texto('Projeto', 'rodovia');

                // filtro por estaca
                $this->filtro_por_texto('Projeto', 'estaca');

                // filtro por km
                $this->filtro_por_texto('Projeto', 'km');

                // filtro por transposicao
                $this->filtro_por_id('Transposicao', 'transposicao_id');

                // filtro por classe
                $this->filtro_por_id('Classe', 'classe_id');

                // filtro por movimentacao
                $this->filtro_por_id('Movimentacao', 'movimentacao_id');

                // filtro por curva
                $this->filtro_por_intervalo('Projeto', 'curva');

                // filtro por esconsidade
                $this->filtro_por_intervalo('Projeto', 'esconsidade');

                // filtro por finalidade
                $this->filtro_por_id('Finalidade', 'finalidade_id');

                // filtro por talude
                $this->filtro_por_id('Talude', 'talude_id');

                // filtro por terrapleno
                $this->filtro_por_id('Terrapleno', 'terrapleno_id');

                // filtro por material
                $this->filtro_por_id('Material', 'material_id');

                // filtro por moldagem
                $this->filtro_por_id('Moldagem', 'moldagem_id');

                // filtro por area
                $this->filtro_por_intervalo('Projeto', 'area');

                /***** Superestrutura *****/

                // filtro por projeto padrão
                $this->filtro_simples('Superestrutura', 'projeto_padrao');

                // filtro por movimentacao
                $this->filtro_simples_com_prefixo('Superestrutura', 'movimentacao_id', 's');

                // filtro por comprimento
                $this->filtro_por_intervalo('Superestrutura', 'comprimento');

                // filtro por numero de celulas
                $this->filtro_por_intervalo('Superestrutura', 'numero_de_celulas');

                // filtro por numero de vaos
                $this->filtro_por_intervalo('Superestrutura', 'numero_de_vaos');

                // filtro por vao
                $this->filtro_por_intervalo('Superestrutura', 'vao');

                // filtro por vao livre
                $this->filtro_por_intervalo('Superestrutura', 'vao_livre');

                // filtro por vao maior
                $this->filtro_por_intervalo('Superestrutura', 'vao_maior');

                // filtro por vao menor
                $this->filtro_por_intervalo('Superestrutura', 'vao_menor');

                // filtro por altura
                $this->filtro_por_intervalo('Superestrutura', 'altura');

                // filtro por espessura
                $this->filtro_por_intervalo('Superestrutura', 'espessura');

                // filtro por espessura da laje
                $this->filtro_por_intervalo('Superestrutura', 'espessura_da_laje');

                // filtro por balanco
                $this->filtro_por_intervalo('Superestrutura', 'balanco');

                // filtro por largura
                $this->filtro_por_intervalo('Superestrutura', 'largura');

                // filtro por curva
                $this->filtro_por_intervalo_com_prefixo('Superestrutura', 'curva', 's');

                // filtro por esconsidade
                $this->filtro_por_intervalo_com_prefixo('Superestrutura', 'esconsidade', 's');

                // filtro por material
                $this->filtro_simples_com_prefixo('Superestrutura', 'material_id', 's');

                // filtro por moldagem
                $this->filtro_simples_com_prefixo('Superestrutura', 'moldagem_id', 's');

                // filtro por montagem
                $this->filtro_simples('Superestrutura', 'montagem_id');

                // filtro por montagem
                $this->filtro_simples('Superestrutura', 'obra_id');

                /***** Mesoestrutura *****/

                // filtro por pilar
                $this->filtro_simples('Mesoestrutura', 'pilar_id');

                // filtro por aparelho de apoio
                $this->filtro_simples('Mesoestrutura', 'aparelho_id');

                // filtro por travessa do encontro
                $this->filtro_por_intervalo('Mesoestrutura', 'travessa_do_encontro_vao');
                $this->filtro_por_intervalo('Mesoestrutura', 'travessa_do_encontro_altura');
                $this->filtro_por_intervalo('Mesoestrutura', 'travessa_do_encontro_largura');

                // filtro por travessa do encontro
                $this->filtro_por_intervalo('Mesoestrutura', 'travessa_interna_vao');
                $this->filtro_por_intervalo('Mesoestrutura', 'travessa_interna_altura');
                $this->filtro_por_intervalo('Mesoestrutura', 'travessa_interna_largura');

                // filtro por aproximacao
                $this->filtro_simples('Mesoestrutura', 'aproximacao_id');

                // filtro por espessura da parede
                $this->filtro_por_intervalo('Mesoestrutura', 'espessura_da_parede');

                /***** Infraestrutura *****/

                // filtro por tipo de infraestrutura
                $this->filtro_simples('Infraestrutura', 'infraestrutura_tipo_id');

                // filtro por tipo de tubulao
                $this->filtro_simples('Infraestrutura', 'tubulao_id');

                // filtro por tipo de estacao
                $this->filtro_simples('Infraestrutura', 'estacao_id');

                // filtro por tipo de estaca
                $this->filtro_simples('Infraestrutura', 'estaca_id');

                // filtro por tipo de sapata
                $this->filtro_simples('Infraestrutura', 'sapata_id');

                // filtro por tipo de talude
                $this->filtro_simples('Infraestrutura', 'talude_id');

                // filtro por travessa do encontro
                $this->filtro_por_intervalo('Infraestrutura', 'alas_altura');
                $this->filtro_por_intervalo('Infraestrutura', 'alas_comprimento');
                $this->filtro_por_intervalo('Infraestrutura', 'alas_angulo');

                // filtro por tipo de terreno
                $this->filtro_simples('Infraestrutura', 'terreno_id');
            }
        }

        function filtro_por_id($modelo, $campo){
            if(isset($this->passedArgs['Search.'.$campo])) {
                    $this->paginate['conditions'][][$modelo.'.id'] =
                            $this->passedArgs['Search.'.$campo];
                    $this->data['Search'][$campo] = $this->passedArgs['Search.'.$campo];
            }
        }

        function filtro_simples($modelo, $campo){
            if(isset($this->passedArgs['Search.'.$campo])) {
                    $this->paginate['conditions'][][$modelo.'.'.$campo] =
                            $this->passedArgs['Search.'.$campo];
                    $this->data['Search'][$campo] = $this->passedArgs['Search.'.$campo];
            }
        }

        function filtro_simples_com_prefixo($modelo, $campo, $prefixo){
            if(isset($this->passedArgs['Search.'.$prefixo.'_'.$campo])) {
                    $this->paginate['conditions'][][$modelo.'.'.$campo] =
                            $this->passedArgs['Search.'.$prefixo.'_'.$campo];
                    $this->data['Search'][$prefixo.'_'.$campo] = $this->passedArgs['Search.'.$prefixo.'_'.$campo];
            }
        }
        
        function filtro_por_texto($modelo, $campo){
            if(isset($this->passedArgs['Search.'.$campo])) {
                    $this->paginate['conditions'][][$modelo.'.'.$campo.' LIKE'] =
                            '%'.$this->passedArgs['Search.'.$campo].'%';
                    $this->data['Search'][$campo] = $this->passedArgs['Search.'.$campo];
            }
        }

        function filtro_por_intervalo($modelo, $campo){
            if(isset($this->passedArgs['Search.'.$campo.'_inicio'])) {
                    $this->paginate['conditions'][][$modelo.'.'.$campo.' >='] =
                            $this->passedArgs['Search.'.$campo.'_inicio'];
                    $this->data['Search'][$campo.'_inicio'] = $this->passedArgs['Search.'.$campo.'_inicio'];
            }
            if(isset($this->passedArgs['Search.'.$campo.'_fim'])) {
                    $this->paginate['conditions'][][$modelo.'.'.$campo.' <='] =
                            $this->passedArgs['Search.'.$campo.'_fim'];
                    $this->data['Search'][$campo.'_fim'] = $this->passedArgs['Search.'.$campo.'_fim'];
            }
        }

        function filtro_por_intervalo_com_prefixo($modelo, $campo, $prefixo){
            $campo_chave = $campo;
            $campo = $prefixo.'_'.$campo;
            if(isset($this->passedArgs['Search.'.$campo.'_inicio'])) {
                    $this->paginate['conditions'][][$modelo.'.'.$campo_chave.' >='] =
                            $this->passedArgs['Search.'.$campo.'_inicio'];
                    $this->data['Search'][$campo.'_inicio'] = $this->passedArgs['Search.'.$campo.'_inicio'];
            }
            if(isset($this->passedArgs['Search.'.$campo.'_fim'])) {
                    $this->paginate['conditions'][][$modelo.'.'.$campo_chave.' <='] =
                            $this->passedArgs['Search.'.$campo.'_fim'];
                    $this->data['Search'][$campo.'_fim'] = $this->passedArgs['Search.'.$campo.'_fim'];
            }
        }
}
?>