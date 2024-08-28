<div class="aproximacoes form">
    <?php echo $form->create('Aproximacao');?>
    <fieldset>
        <legend><?php __('Adicionar Aproximação');?></legend>
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
