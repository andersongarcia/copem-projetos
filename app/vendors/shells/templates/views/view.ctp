<div class="<?php echo $pluralVar;?> view">
    <h2><?php echo "<?php  __('{$singularHumanName}');?>";?></h2>
    <dl><?php echo "<?php \$i = 0; \$class = ' class=\"altrow\"';?>\n";?>
        <?php
        foreach ($fields as $field) {
            $isKey = false;
            if (!empty($associations['belongsTo'])) {
                foreach ($associations['belongsTo'] as $alias => $details) {
                    if ($field === $details['foreignKey']) {
                        $isKey = true;
                        echo "\t\t<dt<?php if (\$i % 2 == 0) echo \$class;?>><?php __('" . Inflector::humanize(Inflector::underscore($alias)) . "'); ?></dt>\n";
                        echo "\t\t<dd<?php if (\$i++ % 2 == 0) echo \$class;?>>\n\t\t\t<?php echo \$html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t\t&nbsp;\n\t\t</dd>\n";
                        break;
                    }
                }
            }
            if ($isKey !== true) {
                echo "\t\t<dt<?php if (\$i % 2 == 0) echo \$class;?>><?php __('" . Inflector::humanize($field) . "'); ?></dt>\n";
                echo "\t\t<dd<?php if (\$i++ % 2 == 0) echo \$class;?>>\n\t\t\t<?php echo \${$singularVar}['{$modelClass}']['{$field}']; ?>\n\t\t\t&nbsp;\n\t\t</dd>\n";
            }
        }
        ?>
    </dl>
</div>
<div class="actions">
    <ul>
        <?php
        echo "\t\t<li><?php echo \$html->link(\$html->image('edit.png', array('alt' => __('Editar', true))), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']), null, false, false).' '.\$html->link(__('Editar', true), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?> </li>\n";
        echo "\t\t<li><?php echo \$html->link(\$html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), \${$singularVar}['{$modelClass}']['{$primaryKey}']), false, false).' '.\$html->link(__('Excluir', true), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?> </li>\n";
        echo "\t\t<li><?php echo \$html->link(\$html->image('list.png', array('alt' => __('Listar', true))), array('action' => 'index'), null, false, false).' '.\$html->link(__('Listar', true), array('action' => 'index')); ?> </li>\n";
        echo "\t\t<li><?php echo \$html->link(\$html->image('add.gif', array('alt' => __('Adicionar', true))), array('action' => 'add'), null, false, false).' '.\$html->link(__('Adicionar', true), array('action' => 'add')); ?> </li>\n";

        $done = array();
        foreach ($associations as $type => $data) {
            foreach ($data as $alias => $details) {
                if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
                    echo "\t\t<li><?php echo \$html->link(__('Listar " . Inflector::humanize($details['controller']) . "', true), array('controller' => '{$details['controller']}', 'action' => 'index')); ?> </li>\n";
                    echo "\t\t<li><?php echo \$html->link(__('Adicionar " . Inflector::humanize(Inflector::underscore($alias)) . "', true), array('controller' => '{$details['controller']}', 'action' => 'add')); ?> </li>\n";
                    $done[] = $details['controller'];
                }
            }
        }
        ?>
    </ul>
</div>
<?php
if (!empty($associations['hasOne'])) :
    foreach ($associations['hasOne'] as $alias => $details): ?>
<div class="related">
    <h3><?php echo "<?php  __('Related " . Inflector::humanize($details['controller']) . "');?>";?></h3>
            <?php echo "<?php if (!empty(\${$singularVar}['{$alias}'])):?>\n";?>
    <dl><?php echo "\t<?php \$i = 0; \$class = ' class=\"altrow\"';?>\n";?>
                <?php
                foreach ($details['fields'] as $field) {
                    echo "\t\t<dt<?php if (\$i % 2 == 0) echo \$class;?>><?php __('" . Inflector::humanize($field) . "');?></dt>\n";
                    echo "\t\t<dd<?php if (\$i++ % 2 == 0) echo \$class;?>>\n\t<?php echo \${$singularVar}['{$alias}']['{$field}'];?>\n&nbsp;</dd>\n";
                }
                ?>
    </dl>
            <?php echo "<?php endif; ?>\n";?>
    <div class="actions">
        <ul>
            <li><?php echo "<?php echo \$html->link(__('Edit " . Inflector::humanize(Inflector::underscore($alias)) . "', true), array('controller' => '{$details['controller']}', 'action' => 'edit', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?></li>\n";?>
        </ul>
    </div>
</div>
    <?php
    endforeach;
endif;
if (empty($associations['hasMany'])) {
    $associations['hasMany'] = array();
}
if (empty($associations['hasAndBelongsToMany'])) {
    $associations['hasAndBelongsToMany'] = array();
}
$relations = array_merge($associations['hasMany'], $associations['hasAndBelongsToMany']);
$i = 0;
foreach ($relations as $alias => $details):
    $otherSingularVar = Inflector::variable($alias);
    $otherPluralHumanName = Inflector::humanize($details['controller']);
    ?>
<div class="related">
    <h3><?php echo "<?php __('Related {$otherPluralHumanName}');?>";?></h3>
        <?php echo "<?php if (!empty(\${$singularVar}['{$alias}'])):?>\n";?>
    <table cellpadding = "0" cellspacing = "0">
        <tr>
                <?php
                foreach ($details['fields'] as $field) {
                    echo "\t\t<th><?php __('" . Inflector::humanize($field) . "'); ?></th>\n";
                }
                ?>
            <th class="actions"><?php echo "<?php __('Actions');?>";?></th>
        </tr>
            <?php
            echo "\t<?php
		\$i = 0;
		foreach (\${$singularVar}['{$alias}'] as \${$otherSingularVar}):
			\$class = null;
			if (\$i++ % 2 == 0) {
				\$class = ' class=\"altrow\"';
			}
		?>\n";
            echo "\t\t<tr<?php echo \$class;?>>\n";

            foreach ($details['fields'] as $field) {
                echo "\t\t\t<td><?php echo \${$otherSingularVar}['{$field}'];?></td>\n";
            }

            echo "\t\t\t<td class=\"actions\">\n";
            echo "\t\t\t\t<?php echo \$html->link(__('View', true), array('controller' => '{$details['controller']}', 'action' => 'view', \${$otherSingularVar}['{$details['primaryKey']}'])); ?>\n";
            echo "\t\t\t\t<?php echo \$html->link(__('Edit', true), array('controller' => '{$details['controller']}', 'action' => 'edit', \${$otherSingularVar}['{$details['primaryKey']}'])); ?>\n";
            echo "\t\t\t\t<?php echo \$html->link(__('Delete', true), array('controller' => '{$details['controller']}', 'action' => 'delete', \${$otherSingularVar}['{$details['primaryKey']}']), null, sprintf(__('Are you sure you want to delete # %s?', true), \${$otherSingularVar}['{$details['primaryKey']}'])); ?>\n";
            echo "\t\t\t</td>\n";
            echo "\t\t</tr>\n";

            echo "\t<?php endforeach; ?>\n";
            ?>
    </table>
        <?php echo "<?php endif; ?>\n\n";?>
    <div class="actions">
        <ul>
            <li><?php echo "<?php echo \$html->link(__('Adicionar " . Inflector::humanize(Inflector::underscore($alias)) . "', true), array('controller' => '{$details['controller']}', 'action' => 'add'));?>";?> </li>
        </ul>
    </div>
</div>
<?php endforeach;?>