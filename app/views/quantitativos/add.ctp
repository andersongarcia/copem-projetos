<?php
$javascript->link(array('jquery', 'jquery.ui', 'jquery.alphanumeric', 'valores', 'quantitativo/edit'), false);
echo $html->css(array('jquery.ui'));
?>

<div class="quantitativos form">
    <?php echo $form->create('Quantitativo');?>
    <fieldset>
        <legend><?php __('Adicionar Quantitativo');?></legend>
        <?php echo $form->input('projeto_id'); ?>
        <div class="date">
            <label for="QuantitativoTpuDerMonth">TPU/DER</label>
            <?php echo $form->month('tpu_der', null, array('style'=>'width: 175px;'), true).' / '.
                    $form->year('tpu_der', null, null, null, array('style'=>'width: 80px;'), true); ?>
        </div>
        <?php echo $form->input('preco_total', array('label'=>'Preço Total', 'class'=>'valor')); ?>
        <div id="tabs">
            <ul>
                <li><a href="#superestrutura">Superestrutura</a></li>
                <li><a href="#mesoestrutura">Mesoestrutura</a></li>
                <li><a href="#infraestrutura">Infraestrutura</a></li>
            </ul>
            <div id="superestrutura">
                <table class="minform">
                    <tr>
                        <td class="rotulo"><label><?php __('Concreto') ?></label></td>
                        <td style="text-align: left;">
                            <?php
                            echo $form->input('concreto_vigas', array('label'=>'Vigas', 'class'=>'valor'));
                            echo $form->input('concreto_laje', array('label'=>'Laje, etc.', 'class'=>'valor'));
                            ?>
                        </td>
                    </tr>
                </table>
                <table class="minform">
                    <tr>
                        <td class="rotulo"><label><?php __('Formas') ?></label></td>
                        <td style="text-align: left;">
                            <?php
                            echo $form->input('formas_vigas', array('label'=>'Vigas', 'class'=>'valor'));
                            echo $form->input('formas_laje', array('label'=>'Laje, etc.', 'class'=>'valor'));
                            ?>
                        </td>
                    </tr>
                </table>
                <table class="minform">
                    <tr>
                        <td class="rotulo"><label><?php __('Aço CA') ?></label></td>
                        <td style="text-align: left;">
                            <?php
                            echo $form->input('aco_ca_vigas', array('label'=>'Vigas', 'class'=>'valor'));
                            echo $form->input('aco_ca_laje', array('label'=>'Laje, etc.', 'class'=>'valor'));
                            ?>
                        </td>
                    </tr>
                </table>
                <table class="minform">
                    <tr>
                        <td class="rotulo"><label><?php __('Aço CP') ?></label></td>
                        <td style="text-align: left;">
                            <?php
                            echo $form->input('aco_cp_vigas', array('label'=>'Vigas', 'class'=>'valor'));
                            echo $form->input('aco_cp_laje', array('label'=>'Laje, etc.', 'class'=>'valor'));
                            ?>
                        </td>
                    </tr>
                </table>
                <table class="minform">
                    <tr>
                        <td class="rotulo"><label><?php __('AP Ancoragem') ?></label></td>
                        <td style="text-align: left;">
                            <?php
                            echo $form->input('ap_ancoragem_ativa', array('label'=>'Ativa', 'class'=>'valor'));
                            echo $form->input('ap_ancoragem_passiva', array('label'=>'Passiva', 'class'=>'valor'));
                            ?>
                        </td>
                    </tr>
                </table>
                <?php
                ?>
            </div>
            <div id="mesoestrutura">
                <table class="minform">
                    <tr>
                        <td class="rotulo"><label><?php __('Concreto') ?></label></td>
                        <td style="text-align: left;">
                            <?php
                            echo $form->input('concreto_travessas', array('label'=>'Travessas, alas, cortinas, etc', 'class'=>'valor'));
                            echo $form->input('concreto_pilares', array('label'=>'Pilares', 'class'=>'valor'));
                            ?>
                        </td>
                    </tr>
                </table>
                <table class="minform">
                    <tr>
                        <td class="rotulo"><label><?php __('Formas') ?></label></td>
                        <td style="text-align: left;">
                            <?php
                            echo $form->input('formas_travessas', array('label'=>'Travessas, alas, cortinas, etc', 'class'=>'valor'));
                            echo $form->input('formas_pilares', array('label'=>'Pilares', 'class'=>'valor'));
                            ?>
                        </td>
                    </tr>
                </table>
                <table class="minform">
                    <tr>
                        <td class="rotulo"><label><?php __('Aço CA') ?></label></td>
                        <td style="text-align: left;">
                            <?php
                            echo $form->input('aco_ca_travessas', array('label'=>'Travessas, alas, cortinas, etc', 'class'=>'valor'));
                            echo $form->input('aco_ca_pilares', array('label'=>'Pilares', 'class'=>'valor'));
                            ?>
                        </td>
                    </tr>
                </table>
                <?php
                echo $form->input('neoprene_simples', array('class'=>'valor'));
                echo $form->input('neoprene_fretado', array('class'=>'valor'));
                echo $form->input('aparelho_metalico', array('label', 'Aparelho Metálico', 'class'=>'valor'));
                ?>
            </div>
            <div id="infraestrutura">
                <table class="minform">
                    <tr>
                        <td class="rotulo"><label><?php __('Concreto') ?></label></td>
                        <td style="text-align: left;">
                            <?php
                            echo $form->input('concreto_blocos', array('label'=>'Blocos, Sapatas, VTS, etc.', 'class'=>'valor'));
                            echo $form->input('concreto_tubuloes', array('label'=>'Tubulões', 'class'=>'valor'));
                            ?>
                        </td>
                    </tr>
                </table>
                <table class="minform">
                    <tr>
                        <td class="rotulo"><label><?php __('Formas') ?></label></td>
                        <td style="text-align: left;">
                            <?php
                            echo $form->input('formas_blocos', array('label'=>'Blocos, Sapatas, VTS, etc.', 'class'=>'valor'));
                            echo $form->input('formas_tubuloes', array('label'=>'Tubulões', 'class'=>'valor'));
                            ?>
                        </td>
                    </tr>
                </table>
                <table class="minform">
                    <tr>
                        <td class="rotulo"><label><?php __('Aço CA') ?></label></td>
                        <td style="text-align: left;">
                            <?php
                            echo $form->input('aco_ca_blocos', array('label'=>'Blocos, Sapatas, VTS, etc.', 'class'=>'valor'));
                            echo $form->input('aco_ca_tubuloes', array('label'=>'Tubulões', 'class'=>'valor'));
                            ?>
                        </td>
                    </tr>
                </table>
                <table class="minform">
                    <tr>
                        <td class="rotulo"><label><?php __('Escavação') ?></label></td>
                        <td style="text-align: left;">
                            <?php
                            echo $form->input('escavacao_ar_comprimido', array('label'=>'Ar Comprimido', 'class'=>'valor'));
                            echo $form->input('escavacao_ceu_aberto', array('label'=>'Céu Aberto', 'class'=>'valor'));
                            ?>
                        </td>
                    </tr>
                </table>
                <?php
                echo $form->input('estacas_estacoes', array('label'=>'Estacas/Estacões', 'class'=>'valor'));
                ?>
            </div>
        </div>
    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Cancelar', true))), array('controller' => 'projetos','action' => 'view','id' => $id_projeto), null, false, false).' '.$html->link(__('Cancelar', true), array('controller' => 'projetos','action' => 'view','id' => $id_projeto));?></li>
    </ul>
</div>
