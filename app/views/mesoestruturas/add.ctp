<?php $javascript->link(array('jquery', 'jquery.alphanumeric', 'valores'), false) ?>

<div class="mesoestruturas form">
    <?php echo $form->create('Mesoestrutura');?>
    <fieldset>
        <legend><?php __('Adicionar Mesoestrutura');?></legend>
        <?php
        echo $form->input('projeto_id');

            foreach($this->data['CadastrosProjetoTipo'] as $campo) {
                if($campo['formulario_id']==3) {
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
                                case 'travessa_do_encontro':
                                ?>
                                <div>
                                    <label>Travessa do Encontro</label>
                                    <table class="miniform">
                                        <tr>
                                            <td>
                                                <?php echo $form->input('travessa_do_encontro_vao', array('after' => ' metros', 'class'=>'valor', 'label'=>'Vão')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->input('travessa_do_encontro_altura', array('after' => ' metros', 'class'=>'valor', 'label'=>'Altura')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->input('travessa_do_encontro_largura', array('after' => ' metros', 'class'=>'valor', 'label'=>'Largura')); ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <?php
                                    break;
                                case 'travessa_interna':
                                    ?>
                                    <div><label>Travessa Interna</label>
                                        <table class="miniform">
                                            <tr>
                                                <td>
                                                    <?php echo $form->input('travessa_interna_vao', array('after' => ' metros', 'class'=>'valor', 'label'=>'Vão')); ?>
                                                </td>
                                                <td>
                                                    <?php echo $form->input('travessa_interna_altura', array('after' => ' metros', 'class'=>'valor', 'label'=>'Altura')); ?>
                                                </td>
                                                <td>
                                                    <?php echo $form->input('travessa_interna_largura', array('after' => ' metros', 'class'=>'valor', 'label'=>'Largura')); ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <?php
                                    break;
                            }
                            break;
                    }
                }
            }
        ?>
    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Cancelar', true))), array('controller' => 'projetos','action' => 'view','id' => $id_projeto), null, false, false).' '.$html->link(__('Cancelar', true), array('controller' => 'projetos','action' => 'view','id' => $id_projeto));?></li>
    </ul>
</div>

<script type="text/javascript">

$('.valor').numeric({allow:","});

</script>
