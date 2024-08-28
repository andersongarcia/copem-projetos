<div class="contatos view">
    <h2><?php  __('Contato');?></h2>
    <dl><?php $i = 0; $class = ' class="altrow"';?>
        		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contato['Contato']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cliente'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contato['Contato']['Cliente']['nome']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contato['Contato']['nome']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contato['Contato']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Telefone Profissional'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contato['Contato']['telefone_profissional']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Telefone Residencial'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contato['Contato']['telefone_residencial']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Celular'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contato['Contato']['celular']; ?>
			&nbsp;
		</dd>
    </dl>
</div>
<div class="actions">
    <ul>
        		<li><?php echo $html->link($html->image('edit.png', array('alt' => __('Editar', true))), array('action' => 'edit', $contato['Contato']['id']), null, false, false).' '.$html->link(__('Editar', true), array('action' => 'edit', $contato['Contato']['id'])); ?> </li>
		<li><?php echo $html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', $contato['Contato']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $contato['Contato']['id']), false, false).' '.$html->link(__('Excluir', true), array('action' => 'delete', $contato['Contato']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $contato['Contato']['id'])); ?> </li>
		<li><?php echo $html->link($html->image('list.png', array('alt' => __('Listar', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Listar', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link($html->image('add.gif', array('alt' => __('Adicionar', true))), array('action' => 'add'), null, false, false).' '.$html->link(__('Adicionar', true), array('action' => 'add')); ?> </li>
    </ul>
</div>
