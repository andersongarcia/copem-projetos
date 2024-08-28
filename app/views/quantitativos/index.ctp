<div class="quantitativos index">
    <h2><?php __('Quantitativos');?></h2>
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
                        <th><?php echo $paginator->sort('projeto_id');?></th>
                        <th><?php echo $paginator->sort('tpu_der');?></th>
                        <th><?php echo $paginator->sort('preco_total');?></th>
                        <th><?php echo $paginator->sort('concreto_vigas');?></th>
                        <th><?php echo $paginator->sort('concreto_laje');?></th>
                        <th><?php echo $paginator->sort('formas_vigas');?></th>
                        <th><?php echo $paginator->sort('formas_laje');?></th>
                        <th><?php echo $paginator->sort('aco_ca_vigas');?></th>
                        <th><?php echo $paginator->sort('aco_ca_laje');?></th>
                        <th><?php echo $paginator->sort('aco_cp_vigas');?></th>
                        <th><?php echo $paginator->sort('aco_cp_laje');?></th>
                        <th><?php echo $paginator->sort('ap_ancoragem_ativa');?></th>
                        <th><?php echo $paginator->sort('ap_ancoragem_passiva');?></th>
                        <th><?php echo $paginator->sort('concreto_travessas');?></th>
                        <th><?php echo $paginator->sort('concreto_pilares');?></th>
                        <th><?php echo $paginator->sort('formas_travessas');?></th>
                        <th><?php echo $paginator->sort('formas_pilares');?></th>
                        <th><?php echo $paginator->sort('aco_ca_travessas');?></th>
                        <th><?php echo $paginator->sort('aco_ca_pilares');?></th>
                        <th><?php echo $paginator->sort('neoprene_simples');?></th>
                        <th><?php echo $paginator->sort('neoprene_fretado');?></th>
                        <th><?php echo $paginator->sort('aparelho_metalico');?></th>
                        <th><?php echo $paginator->sort('concreto_blocos');?></th>
                        <th><?php echo $paginator->sort('concreto_tubuloes');?></th>
                        <th><?php echo $paginator->sort('formas_blocos');?></th>
                        <th><?php echo $paginator->sort('formas_tubuloes');?></th>
                        <th><?php echo $paginator->sort('aco_ca_blocos');?></th>
                        <th><?php echo $paginator->sort('aco_ca_tubuloes');?></th>
                        <th><?php echo $paginator->sort('escavacao_ar_comprimido');?></th>
                        <th><?php echo $paginator->sort('escavacao_ceu_aberto');?></th>
                        <th><?php echo $paginator->sort('estacas_estacoes');?></th>
                        <th class="actions"><?php __('Ações');?></th>
        </tr>
        <?php
$i = 0;
foreach ($quantitativos as $quantitativo):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $quantitativo['Quantitativo']['id']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['projeto_id']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['tpu_der']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['preco_total']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['concreto_vigas']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['concreto_laje']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['formas_vigas']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['formas_laje']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['aco_ca_vigas']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['aco_ca_laje']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['aco_cp_vigas']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['aco_cp_laje']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['ap_ancoragem_ativa']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['ap_ancoragem_passiva']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['concreto_travessas']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['concreto_pilares']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['formas_travessas']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['formas_pilares']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['aco_ca_travessas']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['aco_ca_pilares']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['neoprene_simples']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['neoprene_fretado']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['aparelho_metalico']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['concreto_blocos']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['concreto_tubuloes']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['formas_blocos']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['formas_tubuloes']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['aco_ca_blocos']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['aco_ca_tubuloes']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['escavacao_ar_comprimido']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['escavacao_ceu_aberto']; ?>
		</td>
		<td>
			<?php echo $quantitativo['Quantitativo']['estacas_estacoes']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link($html->image('show.jpg', array('alt' => __('Exibir', true))), array('action' => 'view', $quantitativo['Quantitativo']['id']), null, false, false); ?>
			<?php echo $html->link($html->image('edit.png', array('alt' => __('Editar', true))), array('action' => 'edit', $quantitativo['Quantitativo']['id']), null, false, false); ?>
			<?php echo $html->link($html->image('delete.png', array('alt' => __('Excluir', true))), array('action' => 'delete', $quantitativo['Quantitativo']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $quantitativo['Quantitativo']['id']), false, false); ?>
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
