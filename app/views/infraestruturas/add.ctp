<?php $javascript->link(array('jquery', 'jquery.alphanumeric'), false) ?>

<div class="infraestruturas form">
    <?php echo $form->create('Infraestrutura');?>
    <fieldset>
        <legend><?php __('Adicionar Infraestrutura');?></legend>
        <?php
        echo $form->input('projeto_id');
        echo $form->input('infraestrutura_tipo_id');
        ?>
    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Cancelar', true))), array('controller' => 'projetos','action' => 'view','id' => $id_projeto), null, false, false).' '.$html->link(__('Cancelar', true), array('controller' => 'projetos','action' => 'view','id' => $id_projeto));?></li>
    </ul>
</div>

<script type="text/javascript">

$('.valor').numeric({allow:","});

</script>
