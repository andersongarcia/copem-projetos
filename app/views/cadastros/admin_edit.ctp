<div class="cadastros form">
    <?php echo $form->create('Cadastro');?>
    <fieldset>
        <legend><?php __('Editar Cadastro');?></legend>
        <?php
        echo $form->input('id');
        echo $form->input('nome');
        echo $form->input('modelo');
        echo $form->input('tabela');
        echo $form->input('campo_chave');
        echo $form->input('admin');
        echo $form->input('fixo');
        echo $form->input('tipo');
        echo $form->input('limite');
        echo $form->input('unidade');
        echo $form->input('infraestrutura');
        ?>
    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', $form->value('Cadastro.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('Cadastro.id')), false, false).' '.$html->link(__('Excluir', true), array('action' => 'delete', $form->value('Cadastro.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('Cadastro.id')));
; ?></li>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Listar', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Listar', true), array('action' => 'index'));?></li>
    </ul>
</div>
