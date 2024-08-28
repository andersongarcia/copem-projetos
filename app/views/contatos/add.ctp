<?php $javascript->link(array('jquery', 'jquery.maskedinput', 'contato/edit'), false) ?>

<div class="contatos form">
    <?php echo $form->create('Contato');?>
    <fieldset>
        <legend><?php __('Adicionar Contato');?></legend>
        <?php
        echo $form->input('cliente_id');
        echo $form->input('nome');
        echo $form->input('email');
        echo $form->input('telefone_profissional', array('style'=>'width: 200px;'));
        echo $form->input('telefone_residencial', array('style'=>'width: 200px;'));
        echo $form->input('celular', array('style'=>'width: 200px;'));
        ?>
    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
        <li><?php
            echo $html->link($html->image('list.png', array('alt' => __('Cancelar', true))),
                    array('controller'=>'clientes','action' => 'view','id'=>$id_cliente), null, false, false).' '.
                    $html->link(__('Cancelar', true), array('controller'=>'clientes','action' => 'view','id'=>$id_cliente));?></li>
    </ul>
</div>
