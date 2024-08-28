<div class="projetoTipos view">
    <h2><?php  __('Tipo de Projeto');?></h2>
    <dl><?php $i = 0;
        $class = ' class="altrow"';?>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $projetoTipo['ProjetoTipo']['id']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Código'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $projetoTipo['ProjetoTipo']['codigo']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descrição'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $projetoTipo['ProjetoTipo']['descricao']; ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('edit.png', array('alt' => __('Editar', true))), array('action' => 'edit', $projetoTipo['ProjetoTipo']['id']), null, false, false).' '.$html->link(__('Editar', true), array('action' => 'edit', $projetoTipo['ProjetoTipo']['id'])); ?> </li>
        <li><?php echo $html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', $projetoTipo['ProjetoTipo']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $projetoTipo['ProjetoTipo']['id']), false, false).' '.$html->link(__('Excluir', true), array('action' => 'delete', $projetoTipo['ProjetoTipo']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $projetoTipo['ProjetoTipo']['id'])); ?> </li>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Listar', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Listar', true), array('action' => 'index')); ?> </li>
        <li><?php echo $html->link($html->image('add.gif', array('alt' => __('Novo Tipo de Projeto', true))), array('action' => 'add'), null, false, false).' '.$html->link(__('Novo Tipo de Projeto', true), array('action' => 'add')); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php __('Tipos de Infraestrutura');?></h3>
    <?php if (!empty($projetoTipo['InfraestruturaTipo'])):?>
    <table cellpadding = "0" cellspacing = "0" style="width: 300px;">
        <tr>
            <th><?php __('Tipo de Infraestrutura'); ?></th>
        </tr>
            <?php
            $i = 0;
            foreach ($projetoTipo['InfraestruturaTipo'] as $infraTipo):
                $class = null;
                if ($i++ % 2 == 0) {
                    $class = ' class="altrow"';
                }
                ?>
        <tr<?php echo $class;?>>
            <td><?php echo $infraTipo['descricao'];?></td>
        </tr>
            <?php endforeach; ?>
    </table>
    <?php endif; ?>
</div>
<div class="related">
    <h3><?php __('Campos Associados');?></h3>
    <?php if (!empty($projetoTipo['CadastrosProjetoTipo'])):?>
    <table cellpadding = "0" cellspacing = "0" style="width: 600px;">
        <tr>
            <th><?php __('Campo'); ?></th>
            <th><?php __('Formulário'); ?></th>
            <th class="actions"><?php __('Ações');?></th>
        </tr>
            <?php
            $i = 0;
            foreach ($projetoTipo['CadastrosProjetoTipo'] as $cadastrosProjetoTipos):
                $class = null;
                if ($i++ % 2 == 0) {
                    $class = ' class="altrow"';
                }
                ?>
        <tr<?php echo $class;?>>
            <td><?php echo $cadastrosProjetoTipos['Cadastro']['nome'];?></td>
            <td><?php echo $cadastrosProjetoTipos['Formulario']['nome'];?></td>
            <td class="actions">
			<?php echo $html->link($html->image('edit.png', array('alt' => __('Editar', true))), array('controller' => 'cadastros_projeto_tipos', 'action' => 'edit', $cadastrosProjetoTipos['id']), null, false, false); ?>
			<?php echo $html->link($html->image('delete.png', array('alt' => __('Excluir', true))), array('controller' => 'cadastros_projeto_tipos', 'action' => 'delete', $cadastrosProjetoTipos['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $cadastrosProjetoTipos['id']), false, false); ?>
            </td>
        </tr>
            <?php endforeach; ?>
    </table>
    <?php endif; ?>
    <div class="actions">
        <ul>
            <li><?php echo $html->link($html->image('add.gif', array('alt' => __('Adicionar Campo', true))), array('controller' => 'cadastros_projeto_tipos', 'action' => 'add', $projetoTipo['ProjetoTipo']['id']), null, false, false).' '.$html->link(__('Adicionar Campo', true), array('controller' => 'cadastros_projeto_tipos', 'action' => 'add', $projetoTipo['ProjetoTipo']['id'])); ?> </li>
        </ul>
    </div>
</div>
