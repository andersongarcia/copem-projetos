<div class="infraestruturaTipos view">
    <h2><?php  __('Tipo de Infraestrutura');?></h2>
    <dl><?php $i = 0;
        $class = ' class="altrow"';?>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $infraestruturaTipo['InfraestruturaTipo']['id']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $infraestruturaTipo['InfraestruturaTipo']['descricao']; ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('edit.png', array('alt' => __('Editar', true))), array('action' => 'edit', $infraestruturaTipo['InfraestruturaTipo']['id']), null, false, false).' '.$html->link(__('Editar', true), array('action' => 'edit', $infraestruturaTipo['InfraestruturaTipo']['id'])); ?> </li>
        <li><?php echo $html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', $infraestruturaTipo['InfraestruturaTipo']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $infraestruturaTipo['InfraestruturaTipo']['id']), false, false).' '.$html->link(__('Excluir', true), array('action' => 'delete', $infraestruturaTipo['InfraestruturaTipo']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $infraestruturaTipo['InfraestruturaTipo']['id'])); ?> </li>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Listar', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Listar', true), array('action' => 'index')); ?> </li>
        <li><?php echo $html->link($html->image('add.gif', array('alt' => __('Adicionar', true))), array('action' => 'add'), null, false, false).' '.$html->link(__('Adicionar', true), array('action' => 'add')); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php __('Campos Associados');?></h3>
    <?php if (!empty($projetoTipo['CadastrosInfraestruturaTipos'])):?>
    <table cellpadding = "0" cellspacing = "0">
        <tr>
            <th><?php __('Campo'); ?></th>
            <th class="actions"><?php __('Ações');?></th>
        </tr>
            <?php
            $i = 0;
            foreach ($projetoTipo['CadastrosInfraestruturaTipos'] as $cadastrosInfraestruturaTipos):
                $class = null;
                if ($i++ % 2 == 0) {
                    $class = ' class="altrow"';
                }
                ?>
        <tr<?php echo $class;?>>
            <td><?php echo $cadastrosInfraestruturaTipos['Cadastro']['nome'];?></td>
            <td class="actions">
                <?php echo $html->link($html->image('delete.png', array('alt' => __('Excluir', true))), array('controller' => 'cadastros_projeto_tipos', 'action' => 'delete', $cadastrosInfraestruturaTipos['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $cadastrosInfraestruturaTipos['id']), false, false); ?>
            </td>
        </tr>
            <?php endforeach; ?>
    </table>
    <?php endif; ?>
</div>
