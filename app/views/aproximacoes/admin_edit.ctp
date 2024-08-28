<div class="aproximacoes form">
    <?php echo $form->create('Aproximacao');?>
    <fieldset>
        <legend><?php __('Editar Aproximacao');?></legend>
        <?php
        echo $form->input('id');
        echo $form->input('descricao');
        ?>
    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', $form->value('Aproximacao.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('Aproximacao.id')), false, false).' '.$html->link(__('Excluir', true), array('action' => 'delete', $form->value('Aproximacao.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('Aproximacao.id')));
; ?></li>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Listar', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Listar', true), array('action' => 'index'));?></li>
    </ul>
</div>
