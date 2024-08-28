<div class="aproximacoes view">
    <h2><?php  __('Aproximação');?></h2>
    <dl><?php $i = 0; $class = ' class="altrow"';?>
        		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aproximacao['Aproximacao']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aproximacao['Aproximacao']['descricao']; ?>
			&nbsp;
		</dd>
    </dl>
</div>
<div class="actions">
    <ul>
        		<li><?php echo $html->link($html->image('edit.png', array('alt' => __('Editar', true))), array('action' => 'edit', $aproximacao['Aproximacao']['id']), null, false, false).' '.$html->link(__('Editar', true), array('action' => 'edit', $aproximacao['Aproximacao']['id'])); ?> </li>
		<li><?php echo $html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', $aproximacao['Aproximacao']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $aproximacao['Aproximacao']['id']), false, false).' '.$html->link(__('Excluir', true), array('action' => 'delete', $aproximacao['Aproximacao']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $aproximacao['Aproximacao']['id'])); ?> </li>
		<li><?php echo $html->link($html->image('list.png', array('alt' => __('Listar', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Listar', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link($html->image('add.gif', array('alt' => __('Adicionar', true))), array('action' => 'add'), null, false, false).' '.$html->link(__('Adicionar', true), array('action' => 'add')); ?> </li>
    </ul>
</div>
