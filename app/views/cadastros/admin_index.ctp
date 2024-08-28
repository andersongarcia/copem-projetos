<div class="cadastros index">
    <h2><?php __('Cadastros');?></h2>
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
                        <th><?php echo $paginator->sort('id');?></th>
                        <th><?php echo $paginator->sort('nome');?></th>
                        <th><?php echo $paginator->sort('modelo');?></th>
                        <th><?php echo $paginator->sort('tabela');?></th>
                        <th><?php echo $paginator->sort('campo_chave');?></th>
                        <th><?php echo $paginator->sort('admin');?></th>
                        <th><?php echo $paginator->sort('fixo');?></th>
                        <th><?php echo $paginator->sort('tipo');?></th>
                        <th><?php echo $paginator->sort('limite');?></th>
                        <th><?php echo $paginator->sort('unidade');?></th>
                        <th><?php echo $paginator->sort('infraestrutura');?></th>
                        <th class="actions"><?php __('Ações');?></th>
        </tr>
        <?php
$i = 0;
foreach ($cadastros as $cadastro):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $cadastro['Cadastro']['id']; ?>
		</td>
		<td>
			<?php echo $cadastro['Cadastro']['nome']; ?>
		</td>
		<td>
			<?php echo $cadastro['Cadastro']['modelo']; ?>
		</td>
		<td>
			<?php echo $cadastro['Cadastro']['tabela']; ?>
		</td>
		<td>
			<?php echo $cadastro['Cadastro']['campo_chave']; ?>
		</td>
		<td>
			<?php echo $cadastro['Cadastro']['admin']; ?>
		</td>
		<td>
			<?php echo $cadastro['Cadastro']['fixo']; ?>
		</td>
		<td>
			<?php echo $cadastro['Cadastro']['tipo']; ?>
		</td>
		<td>
			<?php echo $cadastro['Cadastro']['limite']; ?>
		</td>
		<td>
			<?php echo $cadastro['Cadastro']['unidade']; ?>
		</td>
		<td>
			<?php echo $cadastro['Cadastro']['infraestrutura']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link($html->image('show.jpg', array('alt' => __('Exibir', true))), array('action' => 'view', $cadastro['Cadastro']['id']), null, false, false); ?>
			<?php echo $html->link($html->image('edit.png', array('alt' => __('Editar', true))), array('action' => 'edit', $cadastro['Cadastro']['id']), null, false, false); ?>
			<?php echo $html->link($html->image('delete.png', array('alt' => __('Excluir', true))), array('action' => 'delete', $cadastro['Cadastro']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $cadastro['Cadastro']['id']), false, false); ?>
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
