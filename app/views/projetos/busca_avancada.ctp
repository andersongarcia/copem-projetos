<?php
$javascript->link(array('jquery', 'jquery.ui', 'jquery.alphanumeric', 'valores', 'projeto/busca_avancada'), false);
echo $html->css(array('jquery.ui'));

echo $form->create('Projeto',array('action'=>'busca'));?>
<fieldset>
    <legend><?php __('Busca Avançada de Projetos');?></legend>
    <div id="tabs">
        <ul>
            <li><a href="#projeto">Projeto</a></li>
            <li><a href="#superestrutura">Superestrutura</a></li>
            <li><a href="#mesoestrutura">Mesoestrutura</a></li>
            <li><a href="#infraestrutura">Infraestrutura</a></li>
        </ul>
        <div id="projeto">
            <?php
                echo $form->input('Search.codigo', array('label' => 'Código', 'style'=>'width: 150px; background-color: #FFF;'));
                echo $form->input('Search.nome', array('style'=>'background-color: #FFF;'));
                echo $form->input('Search.projeto_tipo_id', array('empty' => 'Selecione...', 'label' => 'Tipo de Projeto'));
                echo $form->input('Search.local');
                echo $form->input('Search.cliente_id', array('empty' => 'Selecione...'));
                echo $form->input('Search.escopo_id', array('empty' => 'Selecione...'));
                echo $form->input('Search.local_especifico', array('label'=>'Local Específico'));
                echo $form->input('Search.rodovia', array('style'=>'width: 100px;'));
                echo $form->input('Search.estaca_texto', array('style'=>'width: 100px;'));
                echo $form->input('Search.km', array('label'=>'Kilômetro', 'class'=>'valor'));
                echo $form->input('Search.transposicao_id', array('label'=>'Transposição', 'empty'=>'Selecione...'));
                echo $form->input('Search.classe_id', array('empty' => 'Selecione...'));
                echo $form->input('Search.movimentacao_id', array('empty' => 'Selecione...','label'=>'Movimentação de Terra'));
                echo $this->element('busca_intervalo_valores',
                    array('label'=>'Curva','campo'=>'curva','unidade'=>'RAIO (m)'));
                echo $this->element('busca_intervalo_valores',
                    array('label'=>'Esconsidade','campo'=>'esconsidade','unidade'=>'graus'));
                echo $form->input('Search.finalidade_id', array('empty' => 'Selecione...'));
                echo $form->input('Search.talude_id', array('empty' => 'Selecione...'));
                echo $form->input('Search.terrapleno_id', array('empty' => 'Selecione...'));
                echo $form->input('Search.material_id', array('empty' => 'Selecione...'));
                echo $form->input('Search.moldagem_id', array('empty' => 'Selecione...'));
                echo $this->element('busca_intervalo_valores',
                    array('label'=>'Área','campo'=>'area','unidade'=>'m²'));
            ?>
        </div>
        <div id="superestrutura">
            <table class="subform">
                <tr>
                    <td class="rotulo" style="width: 200px;">
                        <?php echo $form->input('Search.projeto_padrao', array('type'=>'checkbox','label' => 'Projeto Padrão')); ?>
                    </td>
                    <td>
                        <div id="ProjetoPadrao">
                        <?php
                        echo $this->element('busca_intervalo_valores',
                            array('label'=>'Vão','campo'=>'projeto_padrao_vao','unidade'=>'metros'));
                        echo $this->element('busca_intervalo_valores',
                            array('label'=>'Largura','campo'=>'projeto_padrao_largura','unidade'=>'metros'));
                        ?>
                        </div>
                    </td>
                </tr>
            </table><br />
            <?php
                echo $form->input('Search.s_movimentacao_id', array('empty' => 'Selecione...','label'=>'Movimentação de Terra'));
                echo $this->element('busca_intervalo_valores',
                    array('label'=>'Comprimento','campo'=>'comprimento','unidade'=>'metros'));
                echo $this->element('busca_intervalo_valores',
                    array('label'=>'Número de Células','campo'=>'numero_de_celulas','unidade'=>''));
                echo $this->element('busca_intervalo_valores',
                    array('label'=>'Número de Vãos','campo'=>'numero_de_vaos','unidade'=>''));
                echo $this->element('busca_intervalo_valores',
                    array('label'=>'Vão','campo'=>'vao','unidade'=>'metros'));
                echo $this->element('busca_intervalo_valores',
                    array('label'=>'Vão Livre','campo'=>'vao_livre','unidade'=>'metros'));
                echo $this->element('busca_intervalo_valores',
                    array('label'=>'Vão Maior','campo'=>'vao_maior','unidade'=>'metros'));
                echo $this->element('busca_intervalo_valores',
                    array('label'=>'Vão Menor','campo'=>'vao_menor','unidade'=>'metros'));
                echo $this->element('busca_intervalo_valores',
                    array('label'=>'Altura','campo'=>'altura','unidade'=>'metros'));
                echo $this->element('busca_intervalo_valores',
                    array('label'=>'Espessura','campo'=>'espessura','unidade'=>'metros'));
                echo $this->element('busca_intervalo_valores',
                    array('label'=>'Espessura da Laje','campo'=>'espessura_da_laje','unidade'=>'metros'));
                echo $this->element('busca_intervalo_valores',
                    array('label'=>'Balanço','campo'=>'balanco','unidade'=>'metros'));
                echo $this->element('busca_intervalo_valores',
                    array('label'=>'Largura','campo'=>'largura','unidade'=>'metros'));
                echo $this->element('busca_intervalo_valores',
                    array('label'=>'Curva','campo'=>'curva','unidade'=>'RAIO (m)'));
                echo $this->element('busca_intervalo_valores',
                    array('label'=>'Esconsidade','campo'=>'s_esconsidade','unidade'=>'graus'));
                echo $form->input('Search.s_material_id', array('empty' => 'Selecione...', 'label'=>'Material'));
                echo $form->input('Search.s_moldagem_id', array('empty' => 'Selecione...', 'label'=>'Moldagem'));
                echo $form->input('Search.montagem_id', array('empty' => 'Selecione...'));
                echo $form->input('Search.obra_id', array('empty' => 'Selecione...', 'label'=>'Tipo de Obra'));
            ?>
        </div>
        <div id="mesoestrutura">
            <?php
                echo $form->input('Search.pilar_id', array('empty' => 'Selecione...'));
                echo $form->input('Search.aparelho_id', array('empty' => 'Selecione...', 'label'=>'Aparelho de Apoio'));
            ?>
        <table class="minform">
            <tr>
            <td class="rotulo"><label><?php __('Travessa do Encontro') ?></label></td>
            <td style="text-align: left;">
                <?php
                    echo $this->element('busca_intervalo_valores',
                        array('label'=>'Vão','campo'=>'travessa_do_encontro_vao','unidade'=>'metros'));
                    echo $this->element('busca_intervalo_valores',
                        array('label'=>'Altura','campo'=>'travessa_do_encontro_altura','unidade'=>'metros'));
                    echo $this->element('busca_intervalo_valores',
                        array('label'=>'Largura','campo'=>'travessa_do_encontro_largura','unidade'=>'metros'));
                ?>
            </td>
            </tr>
        </table>
        <table class="minform">
            <tr>
            <td class="rotulo"><label><?php __('Travessa Interna') ?></label></td>
            <td style="text-align: left;">
                <?php
                    echo $this->element('busca_intervalo_valores',
                        array('label'=>'Vão','campo'=>'travessa_interna_vao','unidade'=>'metros'));
                    echo $this->element('busca_intervalo_valores',
                        array('label'=>'Altura','campo'=>'travessa_interna_altura','unidade'=>'metros'));
                    echo $this->element('busca_intervalo_valores',
                        array('label'=>'Largura','campo'=>'travessa_interna_largura','unidade'=>'metros'));
                ?>
            </td>
            </tr>
        </table>
            <?php
                echo $form->input('Search.aproximacao_id', array('empty' => 'Selecione...', 'label'=>'Aproximação'));
                echo $this->element('busca_intervalo_valores',
                    array('label'=>'Espessura da Parede','campo'=>'espessura_da_parede','unidade'=>'metros'));
            ?>
        </div>
        <div id="infraestrutura">
            <?php
                echo $form->input('Search.infraestrutura_tipo_id', array('empty' => 'Selecione...', 'label'=>'Tipo de Infraestrutura'));
                echo $form->input('Search.tubulao_id', array('empty' => 'Selecione...', 'label'=>'Tubulão'));
                echo $form->input('Search.estacao_id', array('empty' => 'Selecione...', 'label'=>'Estacão'));
                echo $form->input('Search.estaca_id', array('empty' => 'Selecione...'));
                echo $form->input('Search.sapata_id', array('empty' => 'Selecione...'));
                echo $form->input('Search.i_talude_id', array('empty' => 'Selecione...'));
            ?>
        <table class="minform">
            <tr>
            <td class="rotulo"><label><?php __('Alas') ?></label></td>
            <td style="text-align: left;">
                <?php
                    echo $this->element('busca_intervalo_valores',
                        array('label'=>'Altura','campo'=>'alas_altura','unidade'=>'metros'));
                    echo $this->element('busca_intervalo_valores',
                        array('label'=>'Comprimento','campo'=>'alas_comprimento','unidade'=>'metros'));
                    echo $this->element('busca_intervalo_valores',
                        array('label'=>'Ângulo','campo'=>'alas_angulo','unidade'=>'metros'));
                ?>
            </td>
            </tr>
        </table>
            <?php echo $form->input('Search.terreno_id', array('empty' => 'Selecione...')); ?>
        </div>
    </div>
</fieldset>
<?php echo $form->end('Buscar');?>
