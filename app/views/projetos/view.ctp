<?php

function AdicionaSubitem($nome_do_item,$label,$origem,$unidade){
    if($origem[$nome_do_item]){
        switch($unidade){
            case 'metros':
                $valor = number_format($origem[$nome_do_item], 2, ',', '.');
            break;
            default:
                $valor = $origem[$nome_do_item];
            break;
        }

        return array('label'=>$label,'valor'=>$valor,'unidade'=>$unidade);
    }
}
?>

<div class="projetos view">
    <h2><?php  __('Projeto');?></h2>
    <dl><?php $i = 0;
        $class = ' class="altrow"';?>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Código'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $projeto['Projeto']['codigo']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $projeto['Projeto']['nome']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo de Projeto'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $projeto['ProjetoTipo']['descricao']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Local'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $projeto['Projeto']['local']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cliente'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $html->link($projeto['Cliente']['nome'], array('controller' => 'clientes', 'action' => 'view', $projeto['Cliente']['id'])); ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Escopo'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $projeto['Escopo']['descricao']; ?>
            &nbsp;
        </dd>
        <?php
        foreach($projeto['ProjetoTipo']['Cadastro'] AS $campo) {
            if($campo['CadastrosProjetoTipo']['formulario_id']==1) {
                $valor = ($campo['modelo'])?$projeto[$campo['modelo']]['descricao']:$projeto['Projeto'][$campo['campo_chave']];
                if($valor){
                    if($campo['tipo']=='VALOR')
                        $valor = number_format($valor, 2, ',', '');
                ?>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __(str_replace('(texto)','',$campo['nome'])); ?></dt>
                <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo str_replace(',00','',$valor); if($campo['tipo']=='VALOR') echo ' '.$campo['unidade']; ?>
                    &nbsp;
                </dd>
                <?php
                }
            }
        }
        ?>
    </dl>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('edit.png', array('alt' => __('Editar', true))), array('action' => 'edit', $projeto['Projeto']['id']), null, false, false).' '.$html->link(__('Editar', true), array('action' => 'edit', $projeto['Projeto']['id'])); ?> </li>
        <li><?php echo $html->link($html->image('delete.png', array('alt' =>__('Excluir', true))), array('action' => 'delete', $projeto['Projeto']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $projeto['Projeto']['id']), false, false).' '.$html->link(__('Excluir', true), array('action' => 'delete', $projeto['Projeto']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $projeto['Projeto']['id'])); ?> </li>
        <li>|</li>
        <li><?php if($projeto['Quantitativo']['id'] == 0) echo $html->link($html->image('add.gif', array('alt' => __('Adicionar Quantitativo', true))), array('controller' => 'quantitativos', 'action' => 'add', $projeto['Projeto']['id']), null, false, false).' '.$html->link(__('Adicionar Quantitativo', true), array('controller' => 'quantitativos', 'action' => 'add', $projeto['Projeto']['id'])); ?> </li>
        <li>|</li>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Listar Projetos', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Listar Projetos', true), array('action' => 'index')); ?> </li>
        <li><?php echo $html->link($html->image('add.gif', array('alt' => __('Novo Projeto', true))), array('action' => 'add'), null, false, false).' '.$html->link(__('Novo Projeto', true), array('action' => 'add')); ?> </li>
    </ul>
    <ul>
        <li><?php if(($projeto['Superestrutura']['id'] == 0) && $projeto['ProjetoTipo']['superestrutura']) echo $html->link($html->image('add.gif', array('alt' => __('Adicionar Superestrutura', true))), array('controller' => 'superestruturas', 'action' => 'add', $projeto['Projeto']['id']), null, false, false).' '.$html->link(__('Adicionar Superestrutura', true), array('controller' => 'superestruturas', 'action' => 'add', $projeto['Projeto']['id'])); ?> </li>
        <li><?php if(($projeto['Mesoestrutura']['id'] == 0) && $projeto['ProjetoTipo']['mesoestrutura']) echo $html->link($html->image('add.gif', array('alt' => __('Adicionar Mesoestrutura', true))), array('controller' => 'mesoestruturas', 'action' => 'add', $projeto['Projeto']['id']), null, false, false).' '.$html->link(__('Adicionar Mesoestrutura', true), array('controller' => 'mesoestruturas', 'action' => 'add', $projeto['Projeto']['id'])); ?> </li>
        <li><?php if(($projeto['Infraestrutura']['id'] == 0) && $projeto['ProjetoTipo']['infraestrutura']) echo $html->link($html->image('add.gif', array('alt' => __('Adicionar Infraestrutura', true))), array('controller' => 'infraestruturas', 'action' => 'add', $projeto['Projeto']['id']), null, false, false).' '.$html->link(__('Adicionar Infraestrutura', true), array('controller' => 'infraestruturas', 'action' => 'add', $projeto['Projeto']['id'])); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php __('Dados') ?></h3>
<?php if ($dados):?>
    <table cellpadding="0" cellspacing="0" style="width: 500px;">
        <tr>
            <th><?php __('Serviço'); ?></th>
            <th><?php __('Empresa'); ?></th>
            <th class="actions"><?php __('Ações');?></th>
        </tr>
        <?php
        $i = 0;
        foreach ($dados as $dado):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            ?>
        <tr<?php echo $class;?>>
            <td>
                    <?php echo $dado['Servico']['descricao']; ?>
            </td>
            <td>
                    <?php echo $dado['Dado']['empresa']; ?>
            </td>
            <td class="actions">
                    <?php echo $html->link($html->image('show.jpg', array('alt' => __('Exibir', true))), array('controller'=>'dados','action' => 'view', $dado['Dado']['id']), null, false, false); ?>
                    <?php echo $html->link($html->image('edit.png', array('alt' => __('Editar', true))), array('controller'=>'dados','action' => 'edit', $dado['Dado']['id']), null, false, false); ?>
                    <?php echo $html->link($html->image('delete.png', array('alt' => __('Excluir', true))), array('controller'=>'dados','action' => 'delete', $dado['Dado']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $dado['Dado']['id']), false, false); ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
    <div class="actions">
        <ul>
            <li><?php echo $html->link($html->image('add.gif', array('alt' => __('Adicionar Dado', true))), array('controller' => 'dados', 'action' => 'add', $projeto['Projeto']['id']), null, false, false).' '.$html->link(__('Adicionar Dado', true), array('controller' => 'dados', 'action' => 'add', $projeto['Projeto']['id'])); ?> </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php __('Subcontratados') ?></h3>
<?php if ($subcontratados):?>
    <table cellpadding="0" cellspacing="0" style="width: 500px;">
        <tr>
            <th><?php __('Serviço'); ?></th>
            <th><?php __('Empresa'); ?></th>
            <th class="actions"><?php __('Ações');?></th>
        </tr>
        <?php
        $i = 0;
        foreach ($subcontratados as $subcontratado):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            ?>
        <tr<?php echo $class;?>>
            <td>
                    <?php echo $subcontratado['Servico']['descricao']; ?>
            </td>
            <td>
                    <?php echo $subcontratado['Subcontratado']['empresa']; ?>
            </td>
            <td class="actions">
                    <?php echo $html->link($html->image('show.jpg', array('alt' => __('Exibir', true))), array('controller'=>'subcontratados','action' => 'view', $subcontratado['Subcontratado']['id']), null, false, false); ?>
                    <?php echo $html->link($html->image('edit.png', array('alt' => __('Editar', true))), array('controller'=>'subcontratados','action' => 'edit', $subcontratado['Subcontratado']['id']), null, false, false); ?>
                    <?php echo $html->link($html->image('delete.png', array('alt' => __('Excluir', true))), array('controller'=>'subcontratados','action' => 'delete', $subcontratado['Subcontratado']['id']), null, sprintf(__('Você tem certeza que deseja excluir # %s?', true), $subcontratado['Subcontratado']['id']), false, false); ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
    <div class="actions">
        <ul>
            <li><?php echo $html->link($html->image('add.gif', array('alt' => __('Adicionar Subcontratado', true))), array('controller' => 'subcontratados', 'action' => 'add', $projeto['Projeto']['id']), null, false, false).' '.$html->link(__('Adicionar Subcontratado', true), array('controller' => 'subcontratados', 'action' => 'add', $projeto['Projeto']['id'])); ?> </li>
        </ul>
    </div>
</div>
<div class="related">
<?php if ($projeto['Superestrutura']['id'] > 0):?>
    <h3><?php  __('Superestrutura');?></h3>
    <dl>	<?php $i = 0;
    $class = ' class="altrow"';?>
        <!-- Busca campos associados -->
        <?php
        foreach($projeto['ProjetoTipo']['Cadastro'] AS $campo) {
            $subdados = array();
            if($campo['CadastrosProjetoTipo']['formulario_id']==2) {
                if($campo['modelo']){
                    if($projeto['Superestrutura'][$campo['modelo']])
                        $valor = $projeto['Superestrutura'][$campo['modelo']]['descricao'];
                    else
                        $valor = null;

                    if($campo['modelo']=='Obra'){
                        switch($projeto['Superestrutura']['Obra']['id']){
                            case '1':
                                $subdados['numero_de_vigas'] =
                                    AdicionaSubitem('numero_de_vigas', 'Número de Vigas', $projeto['Superestrutura']['ObraEmViga'], '');
                                $subdados['altura_da_viga_isolada'] =
                                    AdicionaSubitem('altura_da_viga_isolada', 'Altura da Viga Isolada', $projeto['Superestrutura']['ObraEmViga'], 'metros');
                                $subdados['altura_da_laje'] =
                                    AdicionaSubitem('altura_da_laje', 'Altura da Laje', $projeto['Superestrutura']['ObraEmViga'], 'metros');
                                $subdados['altura_da_viga_completa'] =
                                    AdicionaSubitem('altura_da_viga_completa', 'Altura da Viga Completa', $projeto['Superestrutura']['ObraEmViga'], 'metros');
                                $subdados['entre_eixos_de_vigas'] =
                                    AdicionaSubitem('entre_eixos_de_vigas', 'Entre Eixos de Vigas', $projeto['Superestrutura']['ObraEmViga'], 'metros');
                                $subdados['balanco_transversal'] =
                                    AdicionaSubitem('balanco_transversal', 'Balanço Transversal', $projeto['Superestrutura']['ObraEmViga'], 'metros');
                                if($projeto['Superestrutura']['ObraEmViga']['altura_da_viga_completa'] && $projeto['Superestrutura']['vao_maior']){
                                    $relacao_vao_altura = $projeto['Superestrutura']['vao_maior']/$projeto['Superestrutura']['ObraEmViga']['altura_da_viga_completa'];
                                    $relacao_vao_altura = number_format($relacao_vao_altura, 2, ',', ' ');
                                    $subdados['relacao_vao_altura'] = array('label'=>'Relação Vão/Altura','valor'=>$relacao_vao_altura,'unidade'=>'');
                                }
                                $subdados['largura_alma'] =
                                    AdicionaSubitem('largura_alma', 'Largura Alma', $projeto['Superestrutura']['ObraEmViga'], 'metros');
                                $subdados['largura_flange'] =
                                    AdicionaSubitem('largura_flange', 'Largura Flange', $projeto['Superestrutura']['ObraEmViga'], 'metros');
                                $subdados['largura_talao'] =
                                    AdicionaSubitem('largura_talao', 'Largura Talão', $projeto['Superestrutura']['ObraEmViga'], 'metros');
                                break;
                            case '2':
                                $subdados['tipo'] =
                                    AdicionaSubitem('tipo', 'Tipo', $projeto['Superestrutura']['ObraEmLaje'], '');
                                $subdados['altura_da_laje_no_vao'] =
                                    AdicionaSubitem('altura_da_laje_no_vao', 'Altura da Laje no Vão', $projeto['Superestrutura']['ObraEmLaje'], 'metros');
                                $subdados['altura_da_laje_no_apoio'] =
                                    AdicionaSubitem('altura_da_laje_no_apoio', 'Altura da Laje no Apoio', $projeto['Superestrutura']['ObraEmLaje'], 'metros');
                                $subdados['balanco_transversal'] =
                                    AdicionaSubitem('balanco_transversal', 'Balanço Transversal', $projeto['Superestrutura']['ObraEmLaje'], 'metros');
                                // Relação Vão/Altura No Vão
                                if($projeto['Superestrutura']['ObraEmLaje']['altura_da_laje_no_vao'] && $projeto['Superestrutura']['vao_maior']){
                                    $relacao_vao_altura_no_vao = $projeto['Superestrutura']['vao_maior']/$projeto['Superestrutura']['ObraEmLaje']['altura_da_laje_no_vao'];
                                    $relacao_vao_altura_no_vao = number_format($relacao_vao_altura_no_vao, 2, ',', ' ');
                                    $subdados['relacao_vao_altura_no_vao'] = array('label'=>'Vão/Altura No Vão','valor'=>$relacao_vao_altura_no_vao,'unidade'=>'');
                                }
                                // Relação Vão/Altura No Apoio
                                if($projeto['Superestrutura']['ObraEmLaje']['altura_da_laje_no_apoio'] && $projeto['Superestrutura']['vao_maior']){
                                    $relacao_vao_altura_no_apoio = $projeto['Superestrutura']['vao_maior']/$projeto['Superestrutura']['ObraEmLaje']['altura_da_laje_no_apoio'];
                                    $relacao_vao_altura_no_apoio = number_format($relacao_vao_altura_no_apoio, 2, ',', ' ');
                                    $subdados['relacao_vao_altura_no_apoio'] = array('label'=>'Vão/Altura No Apoio','valor'=>$relacao_vao_altura_no_apoio,'unidade'=>'');
                                }
                                break;
                            case '3':
                                $subdados['numero_de_almas'] =
                                    AdicionaSubitem('numero_de_almas', 'Número de Almas', $projeto['Superestrutura']['ObraEmCaixao'], '');
                                $subdados['altura_do_vao'] =
                                    AdicionaSubitem('altura_do_vao', 'Altura no Vão', $projeto['Superestrutura']['ObraEmCaixao'], 'metros');
                                $subdados['altura_no_apoio'] =
                                    AdicionaSubitem('altura_no_apoio', 'Altura no Apoio', $projeto['Superestrutura']['ObraEmCaixao'], 'metros');
                                $subdados['altura_da_laje_superior'] =
                                    AdicionaSubitem('altura_da_laje_superior', 'Altura da Laje Superior', $projeto['Superestrutura']['ObraEmCaixao'], 'metros');
                                $subdados['altura_da_laje_inferior'] =
                                    AdicionaSubitem('altura_da_laje_inferior', 'Altura da Laje Inferior', $projeto['Superestrutura']['ObraEmCaixao'], 'metros');
                                $subdados['balanco_transversal'] =
                                    AdicionaSubitem('balanco_transversal', 'Balanço Transversal', $projeto['Superestrutura']['ObraEmCaixao'], 'metros');
                                // Relação Vão/Altura No Vão
                                if($projeto['Superestrutura']['ObraEmCaixao']['altura_do_vao'] && $projeto['Superestrutura']['vao_maior']){
                                    $relacao_vao_altura_no_vao = $projeto['Superestrutura']['vao_maior']/$projeto['Superestrutura']['ObraEmCaixao']['altura_do_vao'];
                                    $relacao_vao_altura_no_vao = number_format($relacao_vao_altura_no_vao, 2, ',', ' ');
                                    $subdados['relacao_vao_altura_no_vao'] = array('label'=>'Vão/Altura No Vão','valor'=>$relacao_vao_altura_no_vao,'unidade'=>'');
                                }
                                // Relação Vão/Altura No Apoio
                                if($projeto['Superestrutura']['ObraEmCaixao']['altura_no_apoio'] && $projeto['Superestrutura']['vao_maior']){
                                    $relacao_vao_altura_no_apoio = $projeto['Superestrutura']['vao_maior']/$projeto['Superestrutura']['ObraEmCaixao']['altura_no_apoio'];
                                    $relacao_vao_altura_no_apoio = number_format($relacao_vao_altura_no_apoio, 2, ',', ' ');
                                    $subdados['relacao_vao_altura_no_apoio'] = array('label'=>'Vão/Altura No Apoio','valor'=>$relacao_vao_altura_no_apoio,'unidade'=>'');
                                }
                                break;
                        }
                    }
                }else{
                    if($campo['campo_chave']=='projeto_padrao'){
                        $valor = $projeto['Superestrutura']['projeto_padrao']?'Sim':'Não';
                        if($projeto['Superestrutura']['projeto_padrao']){
                            if($projeto['Superestrutura']['projeto_padrao_vao'])
                                $valor .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Vão:</b> '.$projeto['Superestrutura']['projeto_padrao_vao'].' metros';
                            if($projeto['Superestrutura']['projeto_padrao_largura'])
                                $valor .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Largura:</b> '.$projeto['Superestrutura']['projeto_padrao_largura'].' metros';
                        }
                    }else
                        $valor = $projeto['Superestrutura'][$campo['campo_chave']];
                }
                if($campo['tipo']=='VALOR')
                    $valor = number_format($valor, 2, ',', '');
                if($valor){
                ?>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __(str_replace('(texto)','',$campo['nome'])); ?></dt>
                <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo str_replace(',00','',$valor);; if($campo['tipo']=='VALOR')echo ' '.$campo['unidade']; ?>
                    &nbsp;
                </dd>
                <?php
                }
                foreach($subdados as $subitem){
                    if($subitem['label']):
                    ?>
                    <dt<?php if ($i % 2 == 0) echo $class;?>>&nbsp;&nbsp;&nbsp;<?php echo $subitem['label'] ?></dt>
                    <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                    <?php echo $subitem['valor']; ?>&nbsp;<?php echo $subitem['unidade']; ?>
                    </dd>
                    <?php
                    endif;
                }
            }
        }
        ?>
    </dl>
    <div class="actions">
        <ul>
            <li><?php echo $html->link($html->image('edit.png', array('alt' => __('Editar Superestrutura', true))), array('controller' => 'superestruturas', 'action' => 'edit', $projeto['Superestrutura']['id']), null, false, false).' '.$html->link(__('Editar Superestrutura', true), array('controller' => 'superestruturas', 'action' => 'edit', $projeto['Superestrutura']['id'])); ?></li>
        </ul>
    </div>
<?php endif; ?>
</div>
<div class="related">
<?php if ($projeto['Mesoestrutura']['id'] > 0):?>
    <h3><?php  __('Mesoestrutura');?></h3>
    <dl>	<?php $i = 0;
    $class = ' class="altrow"';?>
        <?php
        foreach($projeto['ProjetoTipo']['Cadastro'] AS $campo) {
            if($campo['CadastrosProjetoTipo']['formulario_id']==3) {
                if($campo['modelo']){
                    if($projeto['Mesoestrutura'][$campo['modelo']])
                        $valor = $projeto['Mesoestrutura'][$campo['modelo']]['descricao'];
                    else
                        $valor = null;
                }else{
                    switch ($campo['campo_chave'])
                    {
                        case 'travessa_do_encontro':
                            $valor = '<b>Vão:</b> '.$projeto['Mesoestrutura']['travessa_do_encontro_vao'].' metros';
                            $valor .= '&nbsp;&nbsp;&nbsp;<b>Altura:</b> '.$projeto['Mesoestrutura']['travessa_do_encontro_altura'].' metros';
                            $valor .= '&nbsp;&nbsp;&nbsp;<b>Largura:</b> '.$projeto['Mesoestrutura']['travessa_do_encontro_largura'].' metros';
                            break;
                        case 'travessa_interna':
                            $valor = '<b>Vão:</b> '.$projeto['Mesoestrutura']['travessa_interna_vao'].' metros';
                            $valor .= '&nbsp;&nbsp;&nbsp;<b>Altura:</b> '.$projeto['Mesoestrutura']['travessa_interna_altura'].' metros';
                            $valor .= '&nbsp;&nbsp;&nbsp;<b>Largura:</b> '.$projeto['Mesoestrutura']['travessa_interna_largura'].' metros';
                            break;
                        default:
                            $valor = $projeto['Mesoestrutura'][$campo['campo_chave']];
                            break;
                    }
                }
                if($valor){
                    if($campo['tipo']=='VALOR')
                        $valor = number_format($valor, 2, ',', '');
                ?>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __(str_replace('(texto)','',$campo['nome'])); ?></dt>
                <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo str_replace(',00','',$valor);; if($campo['tipo']=='VALOR')echo ' '.$campo['unidade']; ?>
                    &nbsp;
                </dd>
                <?php
                }
            }
        }
        ?>
    </dl>
    <div class="actions">
        <ul>
            <li><?php echo $html->link($html->image('edit.png', array('alt' => __('Editar Mesoestrutura', true))), array('controller' => 'mesoestruturas', 'action' => 'edit', $projeto['Mesoestrutura']['id']), null, false, false).' '.$html->link(__('Editar Mesoestrutura', true), array('controller' => 'mesoestruturas', 'action' => 'edit', $projeto['Mesoestrutura']['id'])); ?></li>
        </ul>
    </div>
<?php endif; ?>
</div>
<div class="related">
<?php if ($projeto['Infraestrutura']['id'] > 0):?>
    <h3><?php  __('Infraestrutura');?></h3>
    <dl>	<?php $i = 0;
    $class = ' class="altrow"';?>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo');?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
    <?php echo $projeto['Infraestrutura']['InfraestruturaTipo']['descricao'];?>
            &nbsp;</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __($projeto['Infraestrutura']['InfraestruturaTipo']['descricao']);?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
    <?php
        switch ($projeto['Infraestrutura']['InfraestruturaTipo']['id'])
        {
            case '1':
                if($projeto['Infraestrutura']['Tubulao'])
                    echo $projeto['Infraestrutura']['Tubulao']['descricao'];
                break;
            case '2':
                if($projeto['Infraestrutura']['Estacao'])
                    echo $projeto['Infraestrutura']['Estacao']['descricao'];
                break;
            case '3':
                if($projeto['Infraestrutura']['Sapata'])
                    echo $projeto['Infraestrutura']['Sapata']['descricao'];
                break;
            case '4':
                if($projeto['Infraestrutura']['Estaca'])
                    echo $projeto['Infraestrutura']['Estaca']['descricao'];
                break;
        }

    ?>
            &nbsp;</dd>
        <?php
        foreach($projeto['ProjetoTipo']['Cadastro'] AS $campo) {
            if($campo['CadastrosProjetoTipo']['formulario_id']==4) {
                if($campo['modelo']){
                    if($projeto['Infraestrutura'][$campo['modelo']])
                        $valor = $projeto['Infraestrutura'][$campo['modelo']]['descricao'];
                    else
                        $valor = null;
                }else{
                    $valor = $projeto['Infraestrutura'][$campo['campo_chave']];
                }
                if($valor){
                    if($campo['tipo']=='VALOR')
                        $valor = number_format($valor, 2, ',', '');
                ?>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __(str_replace('(texto)','',$campo['nome'])); ?></dt>
                <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo str_replace(',00','',$valor);; if($campo['tipo']=='VALOR')echo ' '.$campo['unidade']; ?>
                    &nbsp;
                </dd>
                <?php
                }
            }
        }
        ?>
    </dl>
    <div class="actions">
        <ul>
            <li><?php echo $html->link($html->image('edit.png', array('alt' => __('Editar Infraestrutura', true))), array('controller' => 'infraemesostruturas', 'action' => 'edit', $projeto['Infraestrutura']['id']), null, false, false).' '.$html->link(__('Editar Infraestrutura', true), array('controller' => 'infraestruturas', 'action' => 'edit', $projeto['Infraestrutura']['id'])); ?></li>
        </ul>
    </div>
<?php endif; ?>
</div>