<div class="infraestruturaTipos form">
    <?php echo $form->create('InfraestruturaTipo');?>
    <fieldset>
        <legend><?php __('Editar Tipo de Infraestrutura');?></legend>
        <?php
        echo $form->input('id');
        echo $form->input('descricao');
        ?>
    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', $form->value('InfraestruturaTipo.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('InfraestruturaTipo.id')), false, false).' '.$html->link(__('Excluir', true), array('action' => 'delete', $form->value('InfraestruturaTipo.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('InfraestruturaTipo.id')));
; ?></li>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Cancelar', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Cancelar', true), array('action' => 'index'));?></li>
    </ul>
</div>
