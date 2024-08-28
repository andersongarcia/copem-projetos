<div class="subcontratados form">
    <?php echo $form->create('Subcontratado');?>
    <fieldset>
        <legend><?php __('Editar Subcontratado');?></legend>
        <?php
        echo $form->input('id');
        echo $form->input('projeto_id');
        echo $form->input('servico_id');
        echo $form->input('empresa');
        ?>
    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', $form->value('Subcontratado.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('Subcontratado.id')), false, false).' '.$html->link(__('Excluir', true), array('action' => 'delete', $form->value('Subcontratado.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('Subcontratado.id')));
; ?></li>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Cancelar', true))), array('controller' => 'projetos','action' => 'view','id' => $form->value('Projeto.id')), null, false, false).' '.$html->link(__('Cancelar', true), array('controller' => 'projetos','action' => 'view','id' => $form->value('Projeto.id')));?></li>
    </ul>
</div>
