<?php $javascript->link(array('jquery','projeto_tipos/admin_edit'), false) ?>

<div class="projetoTipos form">
    <?php echo $form->create('ProjetoTipo');?>
    <fieldset>
        <legend><?php __('Editar Tipo de Projeto');?></legend>
        <?php
        echo $form->input('id');
        echo $form->input('codigo');
        echo $form->input('descricao');
        ?>
        <table class="miniform">
            <tr>
                <td><?php echo $form->input('superestrutura'); ?></td>
                <td><?php echo $form->input('mesoestrutura'); ?></td>
                <td><?php echo $form->input('infraestrutura'); ?></td>
            </tr>
        </table>
        <div id="divInfraestruturaTipo">
        <?php
        echo $form->input('InfraestruturaTipo', array('label'=>'Tipo de Infraestrutura'))
        ?>
        </div>
    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', $form->value('ProjetoTipo.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('ProjetoTipo.id')), false, false).' '.$html->link(__('Excluir', true), array('action' => 'delete', $form->value('ProjetoTipo.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('ProjetoTipo.id')));
; ?></li>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Cancelar', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Cancelar', true), array('action' => 'index'));?></li>
    </ul>
</div>