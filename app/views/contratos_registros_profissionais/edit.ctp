<?php
    $javascript->link(array('jquery', 'jquery.alphanumeric', 'valores', 'date', 'jquery.datePicker', 'cake.datePicker'), false);
    $dateFormat = array('dateFormat'=>'DMY','separator'=>'/','style'=>'width: 102px;text-align: right;','empty'=>true);
?>
<div class="contratosRegistrosProfissionais form">
    <?php echo $form->create('ContratosRegistrosProfissional');?>
    <fieldset>
        <legend><?php __('Editar Documento');?></legend>
        <?php
        echo $form->input('id');
        echo $form->input('contrato_id');
	echo $form->input('documento', array('type'=>'select','options'=>array('ART'=>'ART','CAT'=>'CAT')));
        echo $form->input('profissional');
        echo $datePicker->picker('data_de_pagamento', $dateFormat);
        echo $form->input('valor', array('label'=>'Valor','class'=>'valor'));
        ?>
    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', $form->value('ContratosRegistrosProfissional.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('ContratosRegistrosProfissional.id')), false, false).' '.$html->link(__('Excluir', true), array('action' => 'delete', $form->value('ContratosRegistrosProfissional.id')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $form->value('ContratosRegistrosProfissional.id')));
; ?></li>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Cancelar', true))), array('controller'=>'contratos','action' => 'view','id'=>$form->value('Contrato.id')), null, false, false).' '.$html->link(__('Cancelar', true), array('controller'=>'contratos','action' => 'view','id'=>$form->value('Contrato.id')));?></li>
    </ul>
</div>
