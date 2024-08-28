<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Listar', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Listar', true), array('action' => 'index'));?></li>
    </ul>
</div>
<div class="aparelhos form">
    <?php echo $form->create('Aparelho');?>
    <fieldset>
        <legend><?php __('Adicionar Aparelho de Apoio');?></legend>
        <?php
        echo $form->input('descricao', array('label'=>'Descrição'));
        ?>
    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
