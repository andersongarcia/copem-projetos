<div class="aparelhos form">
    <?php echo $form->create('Aparelho');?>
    <fieldset>
        <legend><?php __('Editar Aparelho de Apoio');?></legend>
        <?php
        echo $form->input('id');
        echo $form->input('descricao', array('label'=>'Descrição'));
        ?>
    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', $form->value('Aparelho.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('Aparelho.id')), false, false).' '.$html->link(__('Excluir', true), array('action' => 'delete', $form->value('Aparelho.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('Aparelho.id')));
; ?></li>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Listar', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Listar', true), array('action' => 'index'));?></li>
    </ul>
</div>
