<div class="aparelhos index">
    <h2><?php __('Aparelhos de Apoio');?></h2>
    <p class="paginator_counter">
        <?php
        echo $paginator->counter(array(
        'format' => __('Página %page% de %pages%, registros de %start% a %end% / %count%', true)
        ));
        ?></p>
    <div class="actions">
        <ul>
            <li><?php echo $html->link($html->image('add.gif', array('alt' => __('Adicionar', true))), array('action' => 'add'), null, false, false).' '.$html->link(__('Adicionar', true), array('action' => 'add')); ?></li>
        </ul>
    </div>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $paginator->sort('id');?></th>
            <th><?php echo $paginator->sort('Descrição', 'descricao');?></th>
            <th class="actions"><?php __('Ações');?></th>
        </tr>
        <?php
        $i = 0;
        foreach ($aparelhos as $aparelho):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            ?>
        <tr<?php echo $class;?>>
            <td>
                    <?php echo $aparelho['Aparelho']['id']; ?>
            </td>
            <td>
                    <?php echo $aparelho['Aparelho']['descricao']; ?>
            </td>
            <td class="actions">
                    <?php echo $html->link($html->image('show.jpg', array('alt' => __('Exibir', true))), array('action' => 'view', $aparelho['Aparelho']['id']), null, false, false); ?>
                    <?php echo $html->link($html->image('edit.png', array('alt' => __('Editar', true))), array('action' => 'edit', $aparelho['Aparelho']['id']), null, false, false); ?>
                    <?php echo $html->link($html->image('delete.png', array('alt' => __('Excluir', true))), array('action' => 'delete', $aparelho['Aparelho']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $aparelho['Aparelho']['id']), false, false); ?>
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
