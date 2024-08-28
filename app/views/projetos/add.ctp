<?php $javascript->link(array('jquery', 'projeto/edit'), false) ?>


<div class="projetos form">
    <?php echo $form->create('Projeto');?>
    <fieldset>
        <legend><?php __('Adicionar Projeto');?></legend>
        <?php
        echo $form->input('Projeto.codigo', array('label' => 'Código', 'style'=>'width: 150px;'));
        echo $form->input('Projeto.nome');
        echo $form->input('Projeto.projeto_tipo_id', array('empty' => 'Selecione...', 'label' => 'Tipo de Projeto'));
        echo $form->input('Projeto.local');
        echo $form->input('Projeto.cliente_id', array('empty' => 'Selecione...'));
        echo $form->input('Projeto.escopo_id', array('empty' => 'Selecione...'));


        //print_r($servicos);
        ?>
        <label for="ProjetoDado"><?php __('Dados') ?></label>
        <table id='ProjetoDado' class='miniform'>
            <?php
                $contador = 0;
                foreach($servicos as $servico){ ?>
            <tr>
                <td style="vertical-align: middle;">
                    <input type="checkbox" name="data[Dado][<?php echo $contador ?>][Servico]" value="<?php echo $servico['Servico']['id'] ?>" id="ProjetoDado<?php echo $servico['Servico']['id'] ?>" onclick="jqMostraEmpresa(this.id)" />
                    <label for="ProjetoDado<?php echo $servico['Servico']['id'] ?>"><?php echo $servico['Servico']['descricao'] ?></label>
                </td>
                <td>
                    <div id="ProjetoDado<?php echo $servico['Servico']['id'] ?>Empresa">
                        <label for="ProjetoDadoEmpresa<?php echo $servico['Servico']['id'] ?>">Empresa</label>
                        <input name="data[Dado][<?php echo $contador ?>][Empresa]" type="text" style="width: 300px;" maxlength="100" id="ProjetoDadoEmpresa<?php echo $servico['Servico']['id'] ?>" />
                    </div>
                </td>
            </tr>
            <?php
                $contador++;
            } ?>
        </table>
        <br />
        <label for="ProjetoSubcontratado"><?php __('Subcontratados') ?></label>
        <table id='ProjetoSubcontratado' class='miniform'>
            <?php
                $contador = 0;
                foreach($servicos as $servico){ ?>
            <tr>
                <td style="vertical-align: middle;">
                    <input type="checkbox" name="data[Subcontratado][<?php echo $contador ?>][Servico]" value="<?php echo $servico['Servico']['id'] ?>" id="ProjetoSubcontratado<?php echo $servico['Servico']['id'] ?>" onclick="jqMostraEmpresa(this.id)" />
                    <label for="ProjetoSubcontratado<?php echo $servico['Servico']['id'] ?>"><?php echo $servico['Servico']['descricao'] ?></label>
                </td>
                <td>
                    <div id="ProjetoSubcontratado<?php echo $servico['Servico']['id'] ?>Empresa">
                        <label for="ProjetoSubcontratadoEmpresa<?php echo $servico['Servico']['id'] ?>">Empresa</label>
                        <input name="data[Subcontratado][<?php echo $contador ?>][Empresa]" type="text" style="width: 300px;" maxlength="100" id="ProjetoSubcontratadoEmpresa<?php echo $servico['Servico']['id'] ?>" />
                    </div>
                </td>
            </tr>
            <?php
                $contador++;
            } ?>
        </table>

    </fieldset>
    <?php echo $form->end('Salvar');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link($html->image('list.png', array('alt' => __('Cancelar', true))), array('action' => 'index'), null, false, false).' '.$html->link(__('Cancelar', true), array('action' => 'index'));?></li>
    </ul>
</div>
