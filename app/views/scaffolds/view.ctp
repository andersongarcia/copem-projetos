<?php
?>
<div class="<?php echo $pluralVar;?> view">
    <h2><?php echo sprintf(__("View %s", true), $singularHumanName);?></h2>
    <dl>
        <?php
        $i = 0;
        foreach ($scaffoldFields as $_field) {
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            $isKey = false;
            if (!empty($associations['belongsTo'])) {
                foreach ($associations['belongsTo'] as $_alias => $_details) {
                    if ($_field === $_details['foreignKey']) {
                        $isKey = true;
                        echo "\t\t<dt{$class}>" . Inflector::humanize($_alias) . "</dt>\n";
                        echo "\t\t<dd{$class}>\n\t\t\t" . $html->link(${$singularVar}[$_alias][$_details['displayField']], array('controller' => $_details['controller'], 'action' => 'view', ${$singularVar}[$_alias][$_details['primaryKey']])) . "\n\t\t&nbsp;</dd>\n";
                        break;
                    }
                }
            }
            if ($isKey !== true) {
                echo "\t\t<dt{$class}>" . Inflector::humanize($_field) . "</dt>\n";
                echo "\t\t<dd{$class}>\n\t\t\t{${$singularVar}[$modelClass][$_field]}\n&nbsp;\t\t</dd>\n";
            }
        }
        ?>
    </dl>
</div>
<div class="actions">
    <ul>
        <?php
        echo "\t\t<li>" .$html->link($html->image('edit.png', array('alt' => __('Editar', true))), array('action' => 'edit', ${$singularVar}[$modelClass][$primaryKey]), null, false, false).' '.$html->link(sprintf(__('Editar', true), $singularHumanName),   array('action' => 'edit', ${$singularVar}[$modelClass][$primaryKey])). " </li>\n";
        echo "\t\t<li>" .$html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', ${$singularVar}[$modelClass][$primaryKey]), null, __('Você tem certeza que deseja excluir', true).' #' . ${$singularVar}[$modelClass][$primaryKey], false, false).' '.$html->link(sprintf(__('Excluir', true), $singularHumanName), array('action' => 'delete', ${$singularVar}[$modelClass][$primaryKey]), null, __('Are you sure you want to delete', true).' #' . ${$singularVar}[$modelClass][$primaryKey] . '?'). " </li>\n";
        echo "\t\t<li>" .$html->link($html->image('list.png', array('alt' => __('Listar', true))), array('action' => 'index', ${$singularVar}[$modelClass][$primaryKey]), null, false, false).' '.$html->link(sprintf(__('Listar', true), $pluralHumanName), array('action' => 'index')). " </li>\n";
        echo "\t\t<li>" .$html->link($html->image('add.gif', array('alt' => __('Adicionar', true))), array('action' => 'add', ${$singularVar}[$modelClass][$primaryKey]), null, false, false).' '.$html->link(sprintf(__('Adicionar', true), $pluralHumanName), array('action' => 'add')). " </li>\n";

        $done = array();
        foreach ($associations as $_type => $_data) {
            foreach ($_data as $_alias => $_details) {
                if ($_details['controller'] != $this->name && !in_array($_details['controller'], $done)) {
                    echo "\t\t<li>" . $html->link(sprintf(__('Listar %s', true), Inflector::humanize($_details['controller'])), array('controller' => $_details['controller'], 'action' => 'index')) . "</li>\n";
                    echo "\t\t<li>" . $html->link(sprintf(__('Adicionar %s', true), Inflector::humanize(Inflector::underscore($_alias))), array('controller' => $_details['controller'], 'action' => 'add')) . "</li>\n";
                    $done[] = $_details['controller'];
                }
            }
        }
        ?>
    </ul>
</div>
<?php
if (!empty($associations['hasOne'])) :
    foreach ($associations['hasOne'] as $_alias => $_details): ?>
<div class="related">
    <h3><?php echo sprintf(__("Related %s", true), Inflector::humanize($_details['controller']));?></h3>
            <?php if (!empty(${$singularVar}[$_alias])):?>
    <dl>
                    <?php
                    $i = 0;
                    $otherFields = array_keys(${$singularVar}[$_alias]);
                    foreach ($otherFields as $_field) {
                        $class = null;
                        if ($i++ % 2 == 0) {
                            $class = ' class="altrow"';
                        }
                        echo "\t\t<dt{$class}>" . Inflector::humanize($_field) . "</dt>\n";
                        echo "\t\t<dd{$class}>\n\t" . ${$singularVar}[$_alias][$_field] . "\n&nbsp;</dd>\n";
                    }
                    ?>
    </dl>
            <?php endif; ?>
    <div class="actions">
        <ul>
            <li><?php echo $html->link(sprintf(__('Editar %s', true), Inflector::humanize(Inflector::underscore($_alias))), array('controller' => $_details['controller'], 'action' => 'edit', ${$singularVar}[$_alias][$_details['primaryKey']]))."</li>\n";?>
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
foreach ($relations as $_alias => $_details):
    $otherSingularVar = Inflector::variable($_alias);
    ?>
<div class="related">
    <h3><?php echo sprintf(__("Related %s", true), Inflector::humanize($_details['controller']));?></h3>
        <?php if (!empty(${$singularVar}[$_alias])):?>
    <table cellpadding="0" cellspacing="0">
        <tr>
                    <?php
                    $otherFields = array_keys(${$singularVar}[$_alias][0]);
                    foreach ($otherFields as $_field) {
                        echo "\t\t<th>" . Inflector::humanize($_field) . "</th>\n";
                    }
                    ?>
            <th class="actions">Actions</th>
        </tr>
                <?php
                $i = 0;
                foreach (${$singularVar}[$_alias] as ${$otherSingularVar}):
                    $class = null;
                    if ($i++ % 2 == 0) {
                        $class = ' class="altrow"';
                    }
                    echo "\t\t<tr{$class}>\n";

                    foreach ($otherFields as $_field) {
                        echo "\t\t\t<td>" . ${$otherSingularVar}[$_field] . "</td>\n";
                    }

                    echo "\t\t\t<td class=\"actions\">\n";
                    echo "\t\t\t\t" . $html->link(__('Visualizar', true), array('controller' => $_details['controller'], 'action' => 'view', ${$otherSingularVar}[$_details['primaryKey']])). "\n";
                    echo "\t\t\t\t" . $html->link(__('Editar', true), array('controller' => $_details['controller'], 'action' => 'edit', ${$otherSingularVar}[$_details['primaryKey']])). "\n";
                    echo "\t\t\t\t" . $html->link(__('Excluir', true), array('controller' => $_details['controller'], 'action' => 'delete', ${$otherSingularVar}[$_details['primaryKey']]), null, __('Você tem certeza que deseja excluir', true).' #' . ${$otherSingularVar}[$_details['primaryKey']] . '?'). "\n";
                    echo "\t\t\t</td>\n";
                    echo "\t\t</tr>\n";
                endforeach;
                ?>
    </table>
        <?php endif; ?>
    <div class="actions">
        <ul>
            <li><?php echo $html->link(sprintf(__("Adicionar %s", true), Inflector::humanize(Inflector::underscore($_alias))), array('controller' => $_details['controller'], 'action' => 'add'));?> </li>
        </ul>
    </div>
</div>
<?php endforeach;?>