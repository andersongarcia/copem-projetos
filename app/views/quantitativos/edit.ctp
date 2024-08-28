<div class="quantitativos form">
    <?php echo $form->create('Quantitativo');?>
    <fieldset>
        <legend><?php __('Editar Quantitativo');?></legend>
        	<?php
		echo $form->input('id');
		echo $form->input('projeto_id');
		echo $form->input('tpu_der');
		echo $form->input('preco_total');
		echo $form->input('concreto_vigas');
		echo $form->input('concreto_laje');
		echo $form->input('formas_vigas');
		echo $form->input('formas_laje');
		echo $form->input('aco_ca_vigas');
		echo $form->input('aco_ca_laje');
		echo $form->input('aco_cp_vigas');
		echo $form->input('aco_cp_laje');
		echo $form->input('ap_ancoragem_ativa');
		echo $form->input('ap_ancoragem_passiva');
		echo $form->input('concreto_travessas');
		echo $form->input('concreto_pilares');
		echo $form->input('formas_travessas');
		echo $form->input('formas_pilares');
		echo $form->input('aco_ca_travessas');
		echo $form->input('aco_ca_pilares');
		echo $form->input('neoprene_simples');
		echo $form->input('neoprene_fretado');
		echo $form->input('aparelho_metalico');
		echo $form->input('concreto_blocos');
		echo $form->input('concreto_tubuloes');
		echo $form->input('formas_blocos');
		echo $form->input('formas_tubuloes');
		echo $form->input('aco_ca_blocos');
		echo $form->input('aco_ca_tubuloes');
		echo $form->input('escavacao_ar_comprimido');
		echo $form->input('escavacao_ceu_aberto');
		echo $form->input('estacas_estacoes');
	?>
    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
                <li><?php echo $html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', $form->value('Quantitativo.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('Quantitativo.id')), false, false).' '.$html->link(__('Excluir', true), array('action' => 'delete', $form->value('Quantitativo.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('Quantitativo.id')));; ?></li>
                <li><?php echo $html->link($html->image('list.png', array('alt' => __('Listar', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Listar', true), array('action' => 'index'));?></li>
            </ul>
</div>
