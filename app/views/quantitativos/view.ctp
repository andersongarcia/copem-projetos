<div class="quantitativos view">
    <h2><?php  __('Quantitativo');?></h2>
    <dl><?php $i = 0; $class = ' class="altrow"';?>
        		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Projeto Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['projeto_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tpu Der'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['tpu_der']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Preco Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['preco_total']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Concreto Vigas'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['concreto_vigas']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Concreto Laje'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['concreto_laje']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Formas Vigas'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['formas_vigas']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Formas Laje'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['formas_laje']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aco Ca Vigas'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['aco_ca_vigas']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aco Ca Laje'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['aco_ca_laje']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aco Cp Vigas'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['aco_cp_vigas']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aco Cp Laje'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['aco_cp_laje']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ap Ancoragem Ativa'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['ap_ancoragem_ativa']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ap Ancoragem Passiva'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['ap_ancoragem_passiva']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Concreto Travessas'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['concreto_travessas']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Concreto Pilares'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['concreto_pilares']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Formas Travessas'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['formas_travessas']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Formas Pilares'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['formas_pilares']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aco Ca Travessas'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['aco_ca_travessas']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aco Ca Pilares'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['aco_ca_pilares']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Neoprene Simples'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['neoprene_simples']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Neoprene Fretado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['neoprene_fretado']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aparelho Metalico'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['aparelho_metalico']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Concreto Blocos'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['concreto_blocos']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Concreto Tubuloes'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['concreto_tubuloes']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Formas Blocos'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['formas_blocos']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Formas Tubuloes'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['formas_tubuloes']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aco Ca Blocos'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['aco_ca_blocos']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aco Ca Tubuloes'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['aco_ca_tubuloes']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Escavacao Ar Comprimido'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['escavacao_ar_comprimido']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Escavacao Ceu Aberto'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['escavacao_ceu_aberto']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Estacas Estacoes'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $quantitativo['Quantitativo']['estacas_estacoes']; ?>
			&nbsp;
		</dd>
    </dl>
</div>
<div class="actions">
    <ul>
        		<li><?php echo $html->link($html->image('edit.png', array('alt' => __('Editar', true))), array('action' => 'edit', $quantitativo['Quantitativo']['id']), null, false, false).' '.$html->link(__('Editar', true), array('action' => 'edit', $quantitativo['Quantitativo']['id'])); ?> </li>
		<li><?php echo $html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', $quantitativo['Quantitativo']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $quantitativo['Quantitativo']['id']), false, false).' '.$html->link(__('Excluir', true), array('action' => 'delete', $quantitativo['Quantitativo']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $quantitativo['Quantitativo']['id'])); ?> </li>
		<li><?php echo $html->link($html->image('list.png', array('alt' => __('Listar', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Listar', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link($html->image('add.gif', array('alt' => __('Adicionar', true))), array('action' => 'add'), null, false, false).' '.$html->link(__('Adicionar', true), array('action' => 'add')); ?> </li>
    </ul>
</div>
