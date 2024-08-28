<?php
$javascript->link(array('jquery', 'jquery.alphanumeric', 'valores', 'date', 'jquery.datePicker', 'cake.datePicker'), false);

$dateFormat = array('dateFormat'=>'DMY','separator'=>'/','style'=>'width: 102px;text-align: right;','empty'=>true);
?>

<div class="contratos form">
    <?php echo $form->create('Contrato');?>
    <fieldset>
        <legend><?php __('Adicionar Contrato');?></legend>
        <?php
        echo $form->input('edital', array('label'=>'Edital/Convite'));
        echo $form->input('contrato');
        echo $form->input('objeto');
        ?>
        <table class="minform">
            <tr>
                <td class="rotulo"><label><?php __('Orçamento') ?></label></td>
                <td style="text-align: left;">
                    <?php
                    echo $form->input('orcamento_valor', array('label'=>'Valor','class'=>'valor'));
                    echo $datePicker->picker('data_do_envio', $dateFormat);
                    echo $datePicker->picker('data_de_aprovacao', array_merge($dateFormat, array('label'=>'Data De Aprovação')));
                    ?>
                </td>
            </tr>
        </table>
        <?php
        echo $form->input('numero_de_parcelas', array('label'=>'Número De Parcelas','class'=>'valor'));
        echo $datePicker->picker('prazo_final', $dateFormat);
        echo $datePicker->picker('data_primeira_nota', array_merge($dateFormat, array('label'=>'Data Da Primeira Nota')));
        echo $form->input('descricao_nota', array('label'=>'Descrição da Nota'));
        echo $datePicker->picker('data_assinatura_do_contrato', array_merge($dateFormat, array('label'=>'Data De Assinatura Do Contrato')));
        ?>
        <table class="minform">
            <tr>
                <td class="rotulo"><label><?php __('Caução') ?></label></td>
                <td style="text-align: left;">
                    <?php
                    echo $form->input('caucao_valor', array('label'=>'Valor','class'=>'valor'));
                    echo $datePicker->picker('caucao_data_do_pagamento', array_merge($dateFormat, array('label'=>'Data Do Pagamento')));
                    echo $datePicker->picker('caucao_data_do_ressarcimento', array_merge($dateFormat, array('label'=>'Data Do Ressarcimento')));
                    ?>
                </td>
            </tr>
        </table>
        <table class="minform">
            <td class="rotulo"><label><?php __('Termo Aditivo Modificativo') ?></label></td>
            <td style="text-align: left;">
                <?php
                echo $datePicker->picker('tam_data_de_solicitacao', array_merge($dateFormat, array('label'=>'Data De Solicitação')));
                echo $datePicker->picker('tam_data_de_emissao', array_merge($dateFormat, array('label'=>'Data De Emissão')));
                ?>
            </td>
        </table>
        <table class="minform">
            <tr>
                <td class="rotulo"><label><?php __('Termo De Conclusão') ?></label></td>
                <td style="text-align: left;">
                    <?php
                    echo $datePicker->picker('tc_data_de_solicitacao', array_merge($dateFormat, array('label'=>'Data De Solicitação')));
                    echo $datePicker->picker('tc_data_de_emissao', array_merge($dateFormat, array('label'=>'Data De Emissão')));
                    ?>
                </td>
            </tr>
        </table>
        <table class="minform">
            <tr>
                <td class="rotulo"><label><?php __('Atestado') ?></label></td>
                <td style="text-align: left;">
                    <?php
                    echo $datePicker->picker('atestado_data_de_solicitacao', array_merge($dateFormat, array('label'=>'Data De Solicitação')));
                    echo $datePicker->picker('atestado_data_de_emissao', array_merge($dateFormat, array('label'=>'Data De Emissão')));
                    ?>
                </td></tr>
        </table>
        <table class="minform">
            <tr>
                <td class="rotulo"><label><?php __('Caixa Arquivo') ?></label></td>
                <td style="text-align: left;">
                    <?php
                    echo $form->input('caixa_arquivo_projeto', array('class'=>'valor'));
                    echo $form->input('caixa_arquivo_estudo', array('class'=>'valor'));
                    ?>
                </td>
            </tr>
        </table>
    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Cancelar', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Cancelar', true), array('action' => 'index'));?></li>
    </ul>
</div>

<script type="text/javascript">

    $('.valor').numeric({allow:","});

</script>