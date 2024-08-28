<div class="obras view">
    <h2><?php  __('Obra');?></h2>
    <dl><?php $i = 0; $class = ' class="altrow"';?>
        		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $obra['Obra']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $obra['Obra']['descricao']; ?>
			&nbsp;
		</dd>
    </dl>
</div>
<div class="actions">
    <ul>
        		<li><?php echo $html->link($html->image('edit.png', array('alt' => __('Editar', true))), array('action' => 'edit', $obra['Obra']['id']), null, false, false).' '.$html->link(__('Editar', true), array('action' => 'edit', $obra['Obra']['id'])); ?> </li>
		<li><?php echo $html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', $obra['Obra']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $obra['Obra']['id']), false, false).' '.$html->link(__('Excluir', true), array('action' => 'delete', $obra['Obra']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $obra['Obra']['id'])); ?> </li>
		<li><?php echo $html->link($html->image('list.png', array('alt' => __('Listar', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Listar', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link($html->image('add.gif', array('alt' => __('Adicionar', true))), array('action' => 'add'), null, false, false).' '.$html->link(__('Adicionar', true), array('action' => 'add')); ?> </li>
    </ul>
</div>
