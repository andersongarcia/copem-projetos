<?php $javascript->link(array('jquery', 'jquery.maskedinput', 'cliente/edit'), false) ?>

<div class="clientes form">
    <?php echo $form->create('Cliente');?>
    <fieldset>
        <legend><?php __('Editar Cliente');?></legend>
        <?php
        echo $form->input('id');
        echo $form->input('nome');
        ?>
        <table class="miniform">
            <tr>
                <td><?php echo $form->input('logradouro', array('div'=>false)); ?></td>
                <td style="width: 10%;"><?php echo $form->input('numero',
                    array('label'=>'Número','div'=>false,'style'=>'width: 70px;')); ?></td>
            </tr>
        </table>
        <?php
        echo $form->input('complemento');
        echo $form->input('bairro');
        ?>
        <table class="miniform">
            <tr>
                <td style="width: 80%;"><?php echo $form->input('cidade', array('div'=>false)); ?></td>
                <td><?php echo $form->input('estado', array('div'=>false,'style'=>'width: 200px;')); ?></td>
            </tr>
        </table>
        <?php
        echo $form->input('cep', array('label'=>'CEP','style'=>'width: 200px;'));
        ?>
        <table class="miniform">
            <tr>
                <td><?php echo $form->input('cnpj', array('label'=>'CNPJ','div'=>false)); ?></td>
                <td><?php echo $form->input('inscricao_estadual', array('label'=>'Inscrição Estadual','div'=>false)); ?></td>
            </tr>
        </table>
        <?php
        echo $form->input('email');
        ?>
    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', $form->value('Cliente.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('Cliente.id')), false, false).' '.$html->link(__('Excluir', true), array('action' => 'delete', $form->value('Cliente.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('Cliente.id')));
; ?></li>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Cancelar', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Cancelar', true), array('action' => 'index'));?></li>
    </ul>
</div>
