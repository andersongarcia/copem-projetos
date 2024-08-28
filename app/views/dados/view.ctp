<div class="dados view">
    <h2><?php  __('Dado');?></h2>
    <dl><?php $i = 0;
$class = ' class="altrow"';?>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Projeto'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
<?php echo $dado['Projeto']['codigo']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Serviço'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
<?php echo $dado['Servico']['descricao']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Empresa'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
<?php echo $dado['Dado']['empresa']; ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Voltar', true))), array('controller' => 'projetos','action' => 'view','id' => $dado['Dado']['projeto_id']), null, false, false).' '.$html->link(__('Voltar', true), array('controller' => 'projetos','action' => 'view','id' => $dado['Dado']['projeto_id']));?></li>
    </ul>
</div>
