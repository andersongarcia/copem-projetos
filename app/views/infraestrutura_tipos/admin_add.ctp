<div class="infraestruturaTipos form">
    <?php echo $form->create('InfraestruturaTipo');?>
    <fieldset>
        <legend><?php __('Adicionar Tipo de Infraestrutura');?></legend>
        <?php
        echo $form->input('descricao');
        ?>
    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Cancelar', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Cancelar', true), array('action' => 'index'));?></li>
    </ul>
</div>
