<div class="cadastrosProjetoTipos form">
    <?php echo $form->create('CadastrosProjetoTipo');?>
    <fieldset>
        <legend><?php __('Editar Campo');?></legend>
        <?php
        echo $form->input('id');
        echo $form->input('projeto_tipo_id');
        echo $form->input('cadastro_id');
        echo $form->input('formulario_id');
        ?>
    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', $form->value('CadastrosProjetoTipo.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('CadastrosProjetoTipo.id')), false, false).' '.$html->link(__('Excluir', true), array('action' => 'delete', $form->value('CadastrosProjetoTipo.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('CadastrosProjetoTipo.id')));
; ?></li>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Cancelar', true))), array('controller'=>'projeto_tipos','action' => 'view',$form->value('CadastrosProjetoTipo.projeto_tipo_id')), null, false, false).' '.$html->link(__('Cancelar', true), array('controller'=>'projeto_tipos','action' => 'view',$form->value('CadastrosProjetoTipo.projeto_tipo_id')));?></li>
    </ul>
</div>
