<div class="projetoTipos form">
    <?php echo $form->create('ProjetoTipo');?>
    <fieldset>
        <legend><?php __('Adicionar Tipo de Projeto');?></legend>
        <?php
        echo $form->input('codigo', array('label'=>'Código'));
        echo $form->input('descricao', array('label'=>'Descrição'));
        echo $form->input('superestrutura', array('type'=>'checkbox'));
        echo $form->input('mesoestrutura', array('type'=>'checkbox'));
        echo $form->input('infraestrutura', array('type'=>'checkbox'));
        ?>
    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Cancelar', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Cancelar', true), array('action' => 'index'));?></li>
    </ul>
</div>
