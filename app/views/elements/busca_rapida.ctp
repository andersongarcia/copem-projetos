    <div id="busca">
        <?php echo $form->create('Projeto',array('action'=>'busca'));?>
        <fieldset>
            <legend><?php __('Busca Rápida');?></legend>
            <?php
            echo $form->input('Search.q',array('label'=>false,'div'=>false,'style'=>'width: 200px; float: left; margin-right: 10px;'));
            echo $form->button("Buscar", array("type" => "submit"))
            ?>
        &nbsp;|&nbsp;
        <?php echo $html->link('Ir para busca avançada', array('controller'=>'projetos','action'=>'busca_avancada'));?>
        </fieldset>
        <?php echo $form->end();  ?>
    </div>
