<div class="<?php echo $pluralVar;?> form">
    <?php echo "<?php echo \$form->create('{$modelClass}');?>\n";?>
    <fieldset>
        <legend><?php echo "<?php __('" . Inflector::humanize($action) . " {$singularHumanName}');?>";?></legend>
        <?php
        echo "\t<?php\n";
        foreach ($fields as $field) {
            if ($action == 'add' && $field == $primaryKey) {
                continue;
            } elseif (!in_array($field, array('created', 'modified', 'updated'))) {
                echo "\t\techo \$form->input('{$field}');\n";
            }
        }
        if (!empty($associations['hasAndBelongsToMany'])) {
            foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
                echo "\t\techo \$form->input('{$assocName}');\n";
            }
        }
        echo "\t?>\n";
        ?>
    </fieldset>
    <?php
    echo "<?php echo \$form->end('Salvar');?>\n";
    ?>
</div>
<div class="actions">
    <ul>
        <?php if ($action != 'add'):?>
        <li><?php echo "<?php echo \$html->link(\$html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', \$form->value('{$modelClass}.{$primaryKey}')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), \$form->value('{$modelClass}.{$primaryKey}')), false, false).' '.\$html->link(__('Excluir', true), array('action' => 'delete', \$form->value('{$modelClass}.{$primaryKey}')), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), \$form->value('{$modelClass}.{$primaryKey}')));; ?>";?></li>
        <?php endif;?>
        <li><?php echo "<?php echo \$html->link(\$html->image('list.png', array('alt' => __('Listar', true))), array('action' => 'index'), null, false, false).' '.\$html->link(__('Listar', true), array('action' => 'index'));?>";?></li>
        <?php
        $done = array();
        foreach ($associations as $type => $data) {
            foreach ($data as $alias => $details) {
                if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
                    echo "\t\t<li><?php echo \$html->link(\$html->image('list.png', array('alt' => __('Listar " . Inflector::humanize($details['controller']) . "', true))), array('controller' => '{$details['controller']}', 'action' => 'index'), null, false, false).' '.\$html->link(__('Listar " . Inflector::humanize($details['controller']) . "', true), array('controller' => '{$details['controller']}', 'action' => 'index')); ?> </li>\n";
                    echo "\t\t<li><?php echo \$html->link(\$html->image('add.png', array('alt' => __('Adicionar " . Inflector::humanize($details['controller']) . "', true))), array('controller' => '{$details['controller']}', 'action' => 'add'), null, false, false).' '.\$html->link(__('Adicionar " . Inflector::humanize($details['controller']) . "', true), array('controller' => '{$details['controller']}', 'action' => 'add')); ?> </li>\n";
                    $done[] = $details['controller'];
                }
            }
        }
        ?>
    </ul>
</div>
