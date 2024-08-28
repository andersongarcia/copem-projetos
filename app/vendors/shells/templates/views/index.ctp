<div class="<?php echo $pluralVar;?> index">
    <h2><?php echo "<?php __('{$pluralHumanName}');?>";?></h2>
    <p>
        <?php echo "<?php
echo \$paginator->counter(array(
'format' => __('Página %page% de %pages%, registros de %start% a %end% / %count%', true)
));
?>";?>
    </p>
    <div class="actions">
        <ul>
            <li><?php echo "<?php echo \$html->link(\$html->image('add.gif', array('alt' => __('Adicionar', true))), array('action' => 'add'), null, false, false).' '.\$html->link(__('Adicionar', true), array('action' => 'add')); ?>";?></li>
        </ul>
    </div>    <table cellpadding="0" cellspacing="0">
        <tr>
            <?php  foreach ($fields as $field):?>
            <th><?php echo "<?php echo \$paginator->sort('{$field}');?>";?></th>
            <?php endforeach;?>
            <th class="actions"><?php echo "<?php __('Ações');?>";?></th>
        </tr>
        <?php
        echo "<?php
\$i = 0;
foreach (\${$pluralVar} as \${$singularVar}):
	\$class = null;
	if (\$i++ % 2 == 0) {
		\$class = ' class=\"altrow\"';
	}
?>\n";
        echo "\t<tr<?php echo \$class;?>>\n";
        foreach ($fields as $field) {
            $isKey = false;
            if (!empty($associations['belongsTo'])) {
                foreach ($associations['belongsTo'] as $alias => $details) {
                    if ($field === $details['foreignKey']) {
                        $isKey = true;
                        echo "\t\t<td>\n\t\t\t<?php echo \$html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
                        break;
                    }
                }
            }
            if ($isKey !== true) {
                echo "\t\t<td>\n\t\t\t<?php echo \${$singularVar}['{$modelClass}']['{$field}']; ?>\n\t\t</td>\n";
            }
        }

        echo "\t\t<td class=\"actions\">\n";
        echo "\t\t\t<?php echo \$html->link(\$html->image('show.jpg', array('alt' => __('Exibir', true))), array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}']), null, false, false); ?>\n";
        echo "\t\t\t<?php echo \$html->link(\$html->image('edit.png', array('alt' => __('Editar', true))), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']), null, false, false); ?>\n";
        echo "\t\t\t<?php echo \$html->link(\$html->image('delete.png', array('alt' => __('Excluir', true))), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), \${$singularVar}['{$modelClass}']['{$primaryKey}']), false, false); ?>\n";
        echo "\t\t</td>\n";
        echo "\t</tr>\n";

        echo "<?php endforeach; ?>\n";
        ?>
    </table>
</div>
<div class="paging">
    <?php echo "\t<?php echo \$paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>\n";?>
    | <?php echo "\t<?php echo \$paginator->numbers();?>\n"?>
    <?php echo "\t<?php echo \$paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>\n";?>
</div>
