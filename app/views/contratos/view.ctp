<div class="contratos view">
    <h2><?php  __('Contrato');?></h2>
    <dl><?php $i = 0;
        $class = ' class="altrow"';?>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Edital'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $contrato['Contrato']['edital']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contrato'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $contrato['Contrato']['contrato']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Objeto'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $contrato['Contrato']['objeto']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Valor do Orçamento'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $formatacao->moeda($contrato['Contrato']['orcamento_valor']); ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data do Envio'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php if($contrato['Contrato']['data_do_envio']) echo $formatacao->data($contrato['Contrato']['data_do_envio']); ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data de Aprovação'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php if($contrato['Contrato']['data_de_aprovacao']) echo $formatacao->data($contrato['Contrato']['data_de_aprovacao']); ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Número de Parcelas'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $contrato['Contrato']['numero_de_parcelas']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Prazo Final'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php if($contrato['Contrato']['prazo_final']) echo $formatacao->data($contrato['Contrato']['prazo_final']); ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Primeira Nota de Serviço'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php if($contrato['Contrato']['data_primeira_nota']) echo $formatacao->data($contrato['Contrato']['data_primeira_nota']); ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descrição da Nota'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $contrato['Contrato']['descricao_nota']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Assinatura do Contrato'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php if($contrato['Contrato']['data_assinatura_do_contrato']) echo $formatacao->data($contrato['Contrato']['data_assinatura_do_contrato']); ?>
            &nbsp;
        </dd>
        <?php if($contrato['Contrato']['caucao_valor']): ?>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Caução'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <b><?php __('Valor') ?>: </b><?php echo $formatacao->moeda($contrato['Contrato']['caucao_valor']); ?>
            &nbsp;&nbsp;&nbsp;
            <b><?php __('Data do Pagamento') ?>: </b>
            <?php if($contrato['Contrato']['caucao_data_do_pagamento']) echo $formatacao->data($contrato['Contrato']['caucao_data_do_pagamento']); ?>
            &nbsp;&nbsp;&nbsp;
            <b><?php __('Data do Ressarcimento') ?>: </b>
            <?php if($contrato['Contrato']['caucao_data_do_ressarcimento']) echo $formatacao->data($contrato['Contrato']['caucao_data_do_ressarcimento']); ?>
            &nbsp;
        </dd>
        <?php endif ?>
        <?php if($contrato['Contrato']['tam_data_de_solicitacao'] || $contrato['Contrato']['tam_data_de_emissao']): ?>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Termo Aditivo Modificativo'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <b><?php __('Data de Solicitação'); ?>: </b>
            <?php if($contrato['Contrato']['tam_data_de_solicitacao']) echo $formatacao->data($contrato['Contrato']['tam_data_de_solicitacao']); ?>
            &nbsp;&nbsp;&nbsp;
            <b><?php __('Data de Emissão'); ?>: </b>
            <?php if($contrato['Contrato']['tam_data_de_emissao']) echo $formatacao->data($contrato['Contrato']['tam_data_de_emissao']); ?>
        </dd>
        <?php endif ?>
        <?php if($contrato['Contrato']['tc_data_de_solicitacao'] || $contrato['Contrato']['tc_data_de_emissao']): ?>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Termo de Conclusão'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <b><?php __('Data de Solicitação'); ?>: </b>
            <?php if($contrato['Contrato']['tc_data_de_solicitacao']) echo $formatacao->data($contrato['Contrato']['tc_data_de_solicitacao']); ?>
            &nbsp;&nbsp;&nbsp;
            <b><?php __('Data de Emissão'); ?>: </b>
            <?php if($contrato['Contrato']['tc_data_de_emissao']) echo $formatacao->data($contrato['Contrato']['tc_data_de_emissao']); ?>
        </dd>
        <?php endif ?>
        <?php if($contrato['Contrato']['atestado_data_de_solicitacao'] || $contrato['Contrato']['atestado_data_de_emissao']): ?>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Atestado'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <b><?php __('Data de Solicitação'); ?>: </b>
            <?php if($contrato['Contrato']['atestado_data_de_solicitacao']) echo $formatacao->data($contrato['Contrato']['atestado_data_de_solicitacao']); ?>
            &nbsp;&nbsp;&nbsp;
            <b><?php __('Data de Emissão'); ?>: </b>
            <?php if($contrato['Contrato']['atestado_data_de_emissao']) echo $formatacao->data($contrato['Contrato']['atestado_data_de_emissao']); ?>
        </dd>
        <?php endif ?>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Caixa Arquivo Projeto'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $contrato['Contrato']['caixa_arquivo_projeto']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Caixa Arquivo Estudo'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $contrato['Contrato']['caixa_arquivo_estudo']; ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('edit.png', array('alt' => __('Editar', true))), array('action' => 'edit', $contrato['Contrato']['id']), null, false, false).' '.$html->link(__('Editar', true), array('action' => 'edit', $contrato['Contrato']['id'])); ?> </li>
        <li><?php echo $html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', $contrato['Contrato']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $contrato['Contrato']['id']), false, false).' '.$html->link(__('Excluir', true), array('action' => 'delete', $contrato['Contrato']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $contrato['Contrato']['id'])); ?> </li>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Listar', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Listar', true), array('action' => 'index')); ?> </li>
        <li><?php echo $html->link($html->image('add.gif', array('alt' => __('Novo Contrato', true))), array('action' => 'add'), null, false, false).' '.$html->link(__('Novo Contrato', true), array('action' => 'add')); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php __('Documentos');?></h3>
    <?php if (!empty($contrato['ContratosRegistrosProfissional'])):?>
    <table cellpadding = "0" cellspacing = "0">
        <tr>
            <th><?php __('Id'); ?></th>
            <th><?php __('Documento'); ?></th>
            <th><?php __('Profissional'); ?></th>
            <th><?php __('Data De Pagamento'); ?></th>
            <th><?php __('Valor'); ?></th>
            <th class="actions"><?php __('Ações');?></th>
        </tr>
            <?php
            $i = 0;
            foreach ($contrato['ContratosRegistrosProfissional'] as $contratosRegistrosProfissional):
                $class = null;
                if ($i++ % 2 == 0) {
                    $class = ' class="altrow"';
                }
                ?>
        <tr<?php echo $class;?>>
            <td><?php echo $contratosRegistrosProfissional['id'];?></td>
            <td><?php echo $contratosRegistrosProfissional['documento'];?></td>
            <td><?php echo $contratosRegistrosProfissional['profissional'];?></td>
            <td><?php echo $contratosRegistrosProfissional['data_de_pagamento'];?></td>
            <td><?php echo $formatacao->moeda($contratosRegistrosProfissional['valor']);?></td>
            <td class="actions">
                <?php echo $html->link($html->image('edit.png', array('alt' => __('Editar', true))), array('controller'=>'contratos_registros_profissionais','action' => 'edit', $contratosRegistrosProfissional['id']), null, false, false); ?>
                <?php echo $html->link($html->image('delete.png', array('alt' => __('Excluir', true))), array('controller'=>'contratos_registros_profissionais','action' => 'delete', $contratosRegistrosProfissional['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $contratosRegistrosProfissional['id']), false, false); ?>
            </td>
        </tr>
            <?php endforeach; ?>
    </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $html->link(__('Adicionar Documento', true), array('controller' => 'contratos_registros_profissionais', 'action' => 'add', $contrato['Contrato']['id']));?> </li>
        </ul>
    </div>
</div>
