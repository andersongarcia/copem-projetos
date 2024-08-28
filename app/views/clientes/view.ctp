<div class="clientes view">
    <h2><?php  __('Cliente');?></h2>
    <dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['nome']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Endereço'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php
                            echo $cliente['Cliente']['logradouro'];
                            if($cliente['Cliente']['numero'])
                                echo ', '.$cliente['Cliente']['numero'];
                        ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Complemento'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['complemento']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bairro'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['bairro']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cidade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['cidade']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Estado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['estado']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('CEP'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['cep']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('CNPJ'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['cnpj']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inscrição Estadual'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['inscricao_estadual']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php
                            if($cliente['Cliente']['email'])
                                echo '<a href="mailto:'.$cliente['Cliente']['email'].'">'.$cliente['Cliente']['email'].'</a>';
                        ?>
			&nbsp;
		</dd>
    </dl>
</div>
<div class="actions">
    <ul>
        	<li><?php echo $html->link($html->image('edit.png', array('alt' => __('Editar', true))), array('action' => 'edit', $cliente['Cliente']['id']), null, false, false).' '.$html->link(__('Editar', true), array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', $cliente['Cliente']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $cliente['Cliente']['id']), false, false).' '.$html->link(__('Excluir', true), array('action' => 'delete', $cliente['Cliente']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $html->link($html->image('list.png', array('alt' => __('Listar', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Listar', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link($html->image('add.gif', array('alt' => __('Adicionar', true))), array('action' => 'add'), null, false, false).' '.$html->link(__('Adicionar', true), array('action' => 'add')); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php __('Contatos') ?></h3>
<?php if ($contatos):?>
    <table cellpadding="0" cellspacing="0" style="width: 100%;">
        <tr>
            <th><?php __('Nome'); ?></th>
            <th><?php __('Email'); ?></th>
            <th><?php __('Telefone'); ?></th>
            <th class="actions"><?php __('Ações');?></th>
        </tr>
        <?php
        $i = 0;
        foreach ($contatos as $contato):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            ?>
        <tr<?php echo $class;?>>
            <td>
                    <?php echo $contato['Contato']['nome']; ?>
            </td>
            <td>
                    <?php echo $contato['Contato']['email']; ?>
            </td>
            <td>
                    <?php 
                        if($contato['Contato']['telefone_profissional'])
                            echo $contato['Contato']['telefone_profissional'];
                        elseif($contato['Contato']['telefone_residencial'])
                            echo $contato['Contato']['telefone_residencial'];
                        else
                            echo $contato['Contato']['celular'];
                    ?>
            </td>
            <td class="actions">
                    <?php echo $html->link($html->image('show.jpg', array('alt' => __('Exibir', true))), array('controller'=>'contatos','action' => 'view', $contato['Contato']['id']), null, false, false); ?>
                    <?php echo $html->link($html->image('edit.png', array('alt' => __('Editar', true))), array('controller'=>'contatos','action' => 'edit', $contato['Contato']['id']), null, false, false); ?>
                    <?php echo $html->link($html->image('delete.png', array('alt' => __('Excluir', true))), array('controller'=>'contatos','action' => 'delete', $contato['Contato']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $contato['Contato']['id']), false, false); ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
    <div class="actions">
        <ul>
            <li><?php echo $html->link($html->image('add.gif', array('alt' => __('Adicionar Contato', true))), array('controller' => 'contatos', 'action' => 'add', $cliente['Cliente']['id']), null, false, false).' '.$html->link(__('Adicionar Contato', true), array('controller' => 'contatos', 'action' => 'add', $cliente['Cliente']['id'])); ?> </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php __('Projetos') ?></h3>
<?php if ($projetos):?>
    <table cellpadding="0" cellspacing="0" style="width: 100%;">
        <tr>
            <th><?php __('Código'); ?></th>
            <th><?php __('Nome'); ?></th>
            <th><?php __('Tipo de Projeto'); ?></th>
            <th><?php __('Local'); ?></th>
            <th class="actions"><?php __('Ações');?></th>
        </tr>
        <?php
        $i = 0;
        foreach ($projetos as $projeto):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            ?>
        <tr<?php echo $class;?>>
            <td>
                    <?php echo $projeto['Projeto']['codigo']; ?>
            </td>
            <td>
                    <?php echo $projeto['Projeto']['nome']; ?>
            </td>
            <td>
                    <?php echo $html->link($projeto['ProjetoTipo']['descricao'], array('controller' => 'projeto_tipos', 'action' => 'view', $projeto['ProjetoTipo']['id'])); ?>
            </td>
            <td>
                    <?php echo $projeto['Projeto']['local']; ?>
            </td>
            <td class="actions">
                    <?php echo $html->link($html->image('show.jpg', array('alt' => __('Exibir', true))), array('controller'=>'projetos','action' => 'view', $projeto['Projeto']['id']), null, false, false); ?>
                    <?php echo $html->link($html->image('edit.png', array('alt' => __('Editar', true))), array('controller'=>'projetos','action' => 'edit', $projeto['Projeto']['id']), null, false, false); ?>
                    <?php echo $html->link($html->image('delete.png', array('alt' => __('Excluir', true))), array('controller'=>'projetos','action' => 'delete', $projeto['Projeto']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $projeto['Projeto']['id']), false, false); ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
</div>