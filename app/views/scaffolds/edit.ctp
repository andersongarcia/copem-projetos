<?php
?>
<div class="<?php echo $pluralVar;?> form">

    <?php
    echo $form->create();
    echo $form->inputs($scaffoldFields, array('created', 'modified', 'updated'));
    echo $form->end(__('Salvar', true));
    ?>
</div>
<div class="actions">
    <ul>
        <?php if ($this->action != 'add'):?>
        <li><?php echo $html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', $form->value($modelClass.'.'.$primaryKey)), null, __('Você tem certeza que deseja excluir', true).' #' . $form->value($modelClass.'.'.$primaryKey), false, false).' '.$html->link(__('Excluir', true), array('action' => 'delete', $form->value($modelClass.'.'.$primaryKey)), null, __('Você tem certeza que deseja excluir', true).' #' . $form->value($modelClass.'.'.$primaryKey)); ?></li>
        <?php endif;?>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Listar', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Listar', true), array('action' => 'index')); ?></li>
        <?php
        $done = array();
        foreach ($associations as $_type => $_data) {
            foreach ($_data as $_alias => $_details) {
                if ($_details['controller'] != $this->name && !in_array($_details['controller'], $done)) {
                    echo "\t\t<li>" . $html->link(sprintf(__('Listar %s', true), Inflector::humanize($_details['controller'])), array('controller' => $_details['controller'], 'action' =>'index')) . "</li>\n";
                    echo "\t\t<li>" . $html->link(sprintf(__('Adicionar %s', true), Inflector::humanize(Inflector::underscore($_alias))), array('controller' => $_details['controller'], 'action' =>'add')) . "</li>\n";
                    $done[] = $_details['controller'];
                }
            }
        }
        ?>
    </ul>
</div>
