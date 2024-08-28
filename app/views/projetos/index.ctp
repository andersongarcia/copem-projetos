<div class="projetos index">
    <h2><?php __('Projetos');?></h2>
    <p>
        <?php
        $paginator->options(array('url' => $this->passedArgs));
        echo $paginator->counter(array(
        'format' => __('Página %page% de %pages%, registros de %start% a %end% / %count%', true)
        ));
        ?>    </p>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $paginator->sort('codigo');?></th>
            <th><?php echo $paginator->sort('nome');?></th>
            <th><?php echo $paginator->sort('Tipo de Projeto', 'ProjetoTipo.descricao');?></th>
            <th><?php echo $paginator->sort('local');?></th>
            <th><?php echo $paginator->sort('Cliente', 'Cliente.nome');?></th>
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
            <td style="text-align: left;">
                    <?php echo $projeto['Projeto']['nome']; ?>
            </td>
            <td>
                    <?php echo $projeto['ProjetoTipo']['descricao']; ?>
            </td>
            <td>
                    <?php echo $projeto['Projeto']['local']; ?>
            </td>
            <td>
                    <?php echo $html->link($projeto['Cliente']['nome'], array('controller' => 'clientes', 'action' => 'view', $projeto['Cliente']['id'])); ?>
            </td>
            <td class="actions">
                    <?php echo $html->link($html->image('show.jpg', array('alt' => __('Exibir', true))), array('action' => 'view', $projeto['Projeto']['id']), null, false, false); ?>
                    <?php echo $html->link($html->image('edit.png', array('alt' => __('Editar', true))), array('action' => 'edit', $projeto['Projeto']['id']), null, false, false); ?>
                    <?php echo $html->link($html->image('delete.png', array('alt' => __('Excluir', true))), array('action' => 'delete', $projeto['Projeto']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $projeto['Projeto']['id']), false, false); ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
<div class="paging">
    <?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
    | 	<?php echo $paginator->numbers();?>
    <?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('add.gif', array('alt' => __('Novo Projeto', true))), array('action' => 'add'), null, false, false).' '.$html->link(__('Novo Projeto', true), array('action' => 'add')); ?></li>
    </ul>
</div>