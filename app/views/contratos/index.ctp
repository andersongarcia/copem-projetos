<div class="contratos index">
    <h2><?php __('Contratos');?></h2>
    <p>
        <?php
        echo $paginator->counter(array(
        'format' => __('Página %page% de %pages%, registros de %start% a %end% / %count%', true)
        ));
        ?>    </p>
    <div class="actions">
        <ul>
            <li><?php echo $html->link($html->image('add.gif', array('alt' => __('Adicionar', true))), array('action' => 'add'), null, false, false).' '.$html->link(__('Adicionar', true), array('action' => 'add')); ?></li>
        </ul>
    </div>    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $paginator->sort('Edital/Convite','edital');?></th>
            <th><?php echo $paginator->sort('contrato');?></th>
            <th><?php echo $paginator->sort('data_do_envio');?></th>
            <th><?php echo $paginator->sort('Data de Aprovação','data_de_aprovacao');?></th>
            <th class="actions"><?php __('Ações');?></th>
        </tr>
        <?php
        $i = 0;
        foreach ($contratos as $contrato):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            ?>
        <tr<?php echo $class;?>>
            <td>
                    <?php echo $contrato['Contrato']['edital']; ?>
            </td>
            <td>
                    <?php echo $contrato['Contrato']['contrato']; ?>
            </td>
            <td>
                    <?php if($contrato['Contrato']['data_do_envio']) echo $formatacao->data($contrato['Contrato']['data_do_envio']); ?>
            </td>
            <td>
                    <?php if($contrato['Contrato']['data_de_aprovacao']) echo $formatacao->data($contrato['Contrato']['data_de_aprovacao']); ?>
            </td>
            <td class="actions">
                    <?php echo $html->link($html->image('show.jpg', array('alt' => __('Exibir', true))), array('action' => 'view', $contrato['Contrato']['id']), null, false, false); ?>
                    <?php echo $html->link($html->image('edit.png', array('alt' => __('Editar', true))), array('action' => 'edit', $contrato['Contrato']['id']), null, false, false); ?>
                    <?php echo $html->link($html->image('delete.png', array('alt' => __('Excluir', true))), array('action' => 'delete', $contrato['Contrato']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $contrato['Contrato']['id']), false, false); ?>
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
