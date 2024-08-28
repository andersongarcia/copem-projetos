<?php
?>
<div class="<?php echo $pluralVar;?> index">
    <h2><?php echo $pluralHumanName;?></h2>
    <p class="paginator_counter"><?php
        echo $paginator->counter(array(
        'format' => 'Página %page% de %pages%, registros de %start% a %end% / %count%'
        ));
        ?></p>
    <div class="actions">
        <ul>
            <li><?php echo $html->link($html->image('add.gif', array('alt' => __('Adicionar', true))), array('action' => 'add'), null, false, false).' '.$html->link(__('Adicionar', true), array('action' => 'add')); ?></li>
            <?php
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
    </div>    <table cellpadding="0" cellspacing="0">
        <tr>
            <?php foreach ($scaffoldFields as $_field):?>
            <th><?php echo $paginator->sort($_field);?></th>
            <?php endforeach;?>
            <th><?php __('Ações');?></th>
        </tr>
        <?php
        $i = 0;
        foreach (${$pluralVar} as ${$singularVar}):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            echo "\n";
            echo "\t<tr{$class}>\n";
            foreach ($scaffoldFields as $_field) {
                $isKey = false;
                if (!empty($associations['belongsTo'])) {
                    foreach ($associations['belongsTo'] as $_alias => $_details) {
                        if ($_field === $_details['foreignKey']) {
                            $isKey = true;
                            echo "\t\t<td>\n\t\t\t" . $html->link(${$singularVar}[$_alias][$_details['displayField']], array('controller' => $_details['controller'], 'action' => 'view', ${$singularVar}[$_alias][$_details['primaryKey']])) . "\n\t\t</td>\n";
                            break;
                        }
                    }
                }
                if ($isKey !== true) {
                    echo "\t\t<td>\n\t\t\t" . ${$singularVar}[$modelClass][$_field] . " \n\t\t</td>\n";
                }
            }

            echo "\t\t<td class=\"actions\">\n";
            echo "\t\t\t" . $html->link($html->image('show.jpg', array('alt' => __('Visualizar', true))), array('action' => 'view', ${$singularVar}[$modelClass][$primaryKey]), null, false, false) . "\n";
            echo "\t\t\t" . $html->link($html->image('edit.png', array('alt' => __('Editar', true))), array('action' => 'edit', ${$singularVar}[$modelClass][$primaryKey]), null, false, false) . "\n";
            echo "\t\t\t" . $html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', ${$singularVar}[$modelClass][$primaryKey]), null, __('Você tem certeza que deseja excluir', true).' #' . ${$singularVar}[$modelClass][$primaryKey], false, false) . "\n";
            echo "\t\t</td>\n";
            echo "\t</tr>\n";

        endforeach;
        echo "\n";
        ?>
    </table>
</div>
<div class="paging">
    <?php echo "\t" . $paginator->prev('<< ' . __('previous', true), array(), null, array('class' => 'disabled')) . "\n";?>
    | <?php echo $paginator->numbers() . "\n"?>
    <?php echo "\t ". $paginator->next(__('next', true) .' >>', array(), null, array('class' => 'disabled')) . "\n";?>
</div>
