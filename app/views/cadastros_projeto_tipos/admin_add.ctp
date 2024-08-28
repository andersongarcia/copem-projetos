<div class="cadastrosProjetoTipos form">
    <?php echo $form->create('CadastrosProjetoTipo');?>
    <fieldset>
        <legend><?php __('Adicionar Campo');?></legend>
        <?php
        echo $form->input('projeto_tipo_id');
        echo $form->input('cadastro_id', array('label'=>'Campo'));
        echo $form->input('formulario_id');
        ?>
    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Cancelar', true))), array('controller'=>'projeto_tipos','action' => 'view',$id_projeto_tipo), null, false, false).' '.$html->link(__('Cancelar', true), array('controller'=>'projeto_tipos','action' => 'view',$id_projeto_tipo));?></li>
    </ul>
</div>
