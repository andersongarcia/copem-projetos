<?php $javascript->link(array('jquery', 'jquery.alphanumeric', 'valores', 'projeto/edit.js'), false) ?>

<div class="projetos form">
    <?php echo $form->create('Projeto');?>
    <fieldset>
        <legend><?php __('Editar Projeto');?></legend>
        <?php
        echo $form->input('id');
        echo $form->input('codigo', array('label' => 'Código', 'style'=>'width: 150px;'));
        echo $form->input('nome');
        echo $form->input('projeto_tipo_id');
        echo $form->input('local');
        echo $form->input('cliente_id', array('empty' => 'Selecione...'));
        echo $form->input('escopo_id', array('empty' => 'Selecione...'));

        foreach($cadastros as $campo) {
            if($campo['CadastrosProjetoTipo']['formulario_id']==1) {
                $campo['nome'] = str_replace('(texto)', '', $campo['nome']);
                $options = array('label'=>$campo['nome']);
                switch ($campo['tipo']) {
                    case "COMBO":
                        $options['empty'] = 'Selecione...';
                        echo $form->input($campo['campo_chave'], $options);
                        break;
                    case "TEXTO":
                        if($campo['unidade'] > 0)
                            $options['style'] = 'width:'.$campo['unidade'].'px;';
                        if($campo['limite'] > 0)
                        $options['maxlength'] = $campo['limite'];
                        echo $form->input($campo['campo_chave'], $options);
                        break;
                    case "VALOR":
                        $options['class'] = 'valor';
                        $options['after'] = ' '.$campo['unidade'];
                        echo $form->input($campo['campo_chave'], $options);
                        break;
                }
            }
        }
//        echo $form->input('local_especifico');
//        echo $form->input('rodovia');
//        echo $form->input('estaca');
//        echo $form->input('km');
//        echo $form->input('transposicao_id');
//        echo $form->input('classe_id');
//        echo $form->input('movimentacao_id');
//        echo $form->input('curva');
//        echo $form->input('esconsidade');
//        echo $form->input('finalidade_id');
//        echo $form->input('talude_id');
//        echo $form->input('terrapleno_id');
//        echo $form->input('material_id');
//        echo $form->input('moldagem_id');
//        echo $form->input('area');
        ?>
    </fieldset>
<?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', $form->value('Projeto.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('Projeto.id')), false, false).' '.$html->link(__('Excluir', true), array('action' => 'delete', $form->value('Projeto.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('Projeto.id')));
; ?></li>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Cancelar', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Cancelar', true), array('action' => 'index'));?></li>
    </ul>
</div>
