<?php $javascript->link(array('jquery', 'jquery.alphanumeric', 'valores', 'superestrutura/edit'), false) ?>

<div class="superestruturas form">
    <?php echo $form->create('Superestrutura');?>
    <fieldset>
        <legend><?php __('Adicionar Superestrutura');?></legend>
        <?php
        //echo $form->input('projeto_id', array('disabled' => 'true'));
        echo $form->input('projeto_id');


        foreach($this->data['CadastrosProjetoTipo'] as $campo) {
            if($campo['formulario_id']==2) {
                $campo['Cadastro']['nome'] = str_replace('(texto)', '', $campo['Cadastro']['nome']);
                $options = array('label'=>$campo['Cadastro']['nome']);
                switch ($campo['Cadastro']['tipo']) {
                    case "COMBO":
                        $options['empty'] = 'Selecione...';
                        echo $form->input($campo['Cadastro']['campo_chave'], $options);
                        break;
                    case "TEXTO":
                        if($campo['Cadastro']['unidade'] > 0)
                            $options['style'] = 'width:'.$campo['Cadastro']['unidade'].'px;';
                        if($campo['Cadastro']['limite'] > 0)
                            $options['maxlength'] = $campo['Cadastro']['limite'];
                        echo $form->input($campo['Cadastro']['campo_chave'], $options);
                        break;
                    case "VALOR":
                        $options['class'] = 'valor';
                        $options['after'] = ' '.$campo['Cadastro']['unidade'];
                        echo $form->input($campo['Cadastro']['campo_chave'], $options);
                        break;
                    default:
                        switch ($campo['Cadastro']['campo_chave']){
                            case 'projeto_padrao':
                            ?>
                                <table class="miniform">
                                    <tr>
                                        <td style="width: 200px;"><?php echo $form->input('projeto_padrao', array('div' => false, 'label' => 'Projeto Padrão')); ?></td>
                                        <td>
                                            <div id="ProjetoPadraoDados">
                                            <?php
                                                echo $form->input('projeto_padrao_vao', array('after' => ' metros', 'class'=>'valor', 'label'=>'Vão'));
                                                echo $form->input('projeto_padrao_largura', array('after' => ' metros', 'class'=>'valor', 'label'=>'Largura'));
                                            ?>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            <?php
                            break;
                        }
                        break;
                }
            }
        }
        ?>
        <div class="subform">
            <div id="ObraEmViga">
                <?php
                    echo $form->hidden('ObraEmViga.id');
                    echo $form->input('ObraEmViga.numero_de_vigas', array('label'=>'Número de Vigas','class'=>'valor'));
                    echo $form->input('ObraEmViga.altura_da_viga_isolada', array('class'=>'valor','after'=>' metros'));
                    echo $form->input('ObraEmViga.altura_da_laje', array('class'=>'valor','after'=>' metros'));
                    echo $form->input('ObraEmViga.altura_da_viga_completa', array('class'=>'valor','after'=>' metros'));
                    echo $form->input('ObraEmViga.entre_eixos_de_vigas', array('class'=>'valor','after'=>' metros'));
                    echo $form->input('ObraEmViga.balanco_transversal', array('label'=>'Balanço Transversal','class'=>'valor','after'=>' metros'));
                    echo $form->input('ObraEmViga.largura_alma', array('class'=>'valor','after'=>' metros'));
                    echo $form->input('ObraEmViga.largura_flange', array('class'=>'valor','after'=>' metros'));
                    echo $form->input('ObraEmViga.largura_talao', array('label'=>'Largura Talão','class'=>'valor','after'=>' metros'));
                ?>
            </div>
            <div id="ObraEmLaje">
                <?php
                    echo $form->hidden('ObraEmLaje.id');
                    echo $form->input('ObraEmLaje.tipo', array('options'=>array('Maciça','Alveolar','Outros'),'empty'=>'Selecione...'));
                    echo $form->input('ObraEmLaje.altura_da_laje_no_vao', array('label'=>'Altura da Laje no Vão','class'=>'valor','after'=>' metros'));
                    echo $form->input('ObraEmLaje.altura_da_laje_no_apoio', array('class'=>'valor','after'=>' metros'));
                    echo $form->input('ObraEmLaje.balanco_transversal', array('label'=>'Balanço Transversal','class'=>'valor','after'=>' metros'));
                ?>
            </div>
            <div id="ObraEmCaixao">
                <?php
                    echo $form->hidden('ObraEmCaixao.id');
                    echo $form->input('ObraEmCaixao.numero_de_almas', array('label'=>'Número de Almas','class'=>'valor'));
                    echo $form->input('ObraEmCaixao.altura_do_vao', array('label'=>'Altura no Vão','class'=>'valor','after'=>' metros'));
                    echo $form->input('ObraEmCaixao.altura_no_apoio', array('class'=>'valor','after'=>' metros'));
                    echo $form->input('ObraEmCaixao.altura_da_laje_superior', array('class'=>'valor','after'=>' metros'));
                    echo $form->input('ObraEmCaixao.altura_da_laje_inferior', array('class'=>'valor','after'=>' metros'));
                    echo $form->input('ObraEmCaixao.balanco_transversal', array('label'=>'Balanço Transversal','class'=>'valor','after'=>' metros'));
                ?>
            </div>
        </div>
    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Cancelar', true))), array('controller' => 'projetos','action' => 'view','id' => $id_projeto), null, false, false).' '.$html->link(__('Cancelar', true), array('controller' => 'projetos','action' => 'view','id' => $id_projeto));?></li>
    </ul>
</div>