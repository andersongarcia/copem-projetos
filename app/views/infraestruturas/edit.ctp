<?php $javascript->link(array('jquery', 'jquery.alphanumeric', 'valores'), false) ?>

<div class="infraestruturas form">
    <?php echo $form->create('Infraestrutura');?>
    <fieldset>
        <legend><?php __('Editar Infraestrutura');?></legend>
        <?php
        echo $form->input('id');
        echo $form->input('projeto_id');
        echo $form->input('infraestrutura_tipo_id', array('disabled'=>true));

        $options = array('label'=>$form->value('InfraestruturaTipo.descricao'),'empty'=>'Selecione...');
        switch ($form->value('Infraestrutura.infraestrutura_tipo_id'))
        {
            case '1':
                echo $form->input('tubulao_id', $options);
                break;
            case '2':
                echo $form->input('estacao_id', $options);
                break;
            case '3':
                echo $form->input('sapata_id', $options);
                break;
            case '4':
                echo $form->input('estaca_id', $options);
                break;
        }


        foreach($projetoTipo['Cadastro'] as $campo) {
            if($campo['CadastrosProjetoTipo']['formulario_id']==4) {
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
        ?>
    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', $form->value('Infraestrutura.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('Infraestrutura.id')), false, false).' '.$html->link(__('Excluir', true), array('action' => 'delete', $form->value('Infraestrutura.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('Infraestrutura.id')));
; ?></li>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Cancelar', true))), array('controller' => 'projetos','action' => 'view','id' => $form->value('Projeto.id')), null, false, false).' '.$html->link(__('Cancelar', true), array('controller' => 'projetos','action' => 'view','id' => $form->value('Projeto.id')));?></li>
    </ul>
</div>

<script type="text/javascript">

$('.valor').numeric({allow:","});

</script>
