<div class="obras form">
    <?php echo $form->create('Obra');?>
    <fieldset>
        <legend><?php __('Add Obra');?></legend>
        	<?php
		echo $form->input('descricao');
	?>
    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
                <li><?php echo $html->link($html->image('list.png', array('alt' => __('Listar', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Listar', true), array('action' => 'index'));?></li>
            </ul>
</div>
