<div class="subcontratados form">
    <?php echo $form->create('Subcontratado');?>
    <fieldset>
        <legend><?php __('Adicionar Subcontratado');?></legend>
        <?php
        echo $form->input('projeto_id');
        echo $form->input('servico_id');
        echo $form->input('empresa');
        ?>
    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Cancelar', true))), array('controller' => 'projetos','action' => 'view','id' => $id_projeto), null, false, false).' '.$html->link(__('Cancelar', true), array('controller' => 'projetos','action' => 'view','id' => $id_projeto));?></li>
    </ul>
</div>
