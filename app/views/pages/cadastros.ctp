<?php
    $this->pageTitle = 'Cadastros'
?>

<h1><?php echo $this->pageTitle ?></h1>

<ul>
    <li><?php echo $html->link(__('Aproximação', true), '/admin/aproximacoes'); ?></li>
    <li><?php echo $html->link(__('Classe', true), '/admin/classes'); ?></li>
    <li><?php echo $html->link(__('Escopo', true), '/admin/escopos'); ?></li>
    <li><?php echo $html->link(__('Estaca', true), '/admin/estacas'); ?></li>
    <li><?php echo $html->link(__('Estação', true), '/admin/estacoes'); ?></li>
    <li><?php echo $html->link(__('Finalidade', true), '/admin/finalidades'); ?></li>
    <li><?php echo $html->link(__('Tipo de Infraestrutura', true), '/admin/infraestrutura_tipos'); ?></li>
    <li><?php echo $html->link(__('Material', true), '/admin/materiais'); ?></li>
    <li><?php echo $html->link(__('Moldagem', true), '/admin/moldagens'); ?></li>
    <li><?php echo $html->link(__('Montagem', true), '/admin/montagens'); ?></li>
    <li><?php echo $html->link(__('Movimentação de Terra', true), '/admin/movimentacoes'); ?></li>
    <li><?php echo $html->link(__('Pilar', true), '/admin/pilares'); ?></li>
    <li><?php echo $html->link(__('Sapata', true), '/admin/sapatas'); ?></li>
    <li><?php echo $html->link(__('Serviço', true), '/admin/servicos'); ?></li>
    <li><?php echo $html->link(__('Talude', true), '/admin/taludes'); ?></li>
    <li><?php echo $html->link(__('Terrapleno', true), '/admin/terraplenos'); ?></li>
    <li><?php echo $html->link(__('Terreno', true), '/admin/terrenos'); ?></li>
    <li><?php echo $html->link(__('Transposição', true), '/admin/transposicoes'); ?></li>
    <li><?php echo $html->link(__('Tubulão', true), '/admin/tubuloes'); ?></li>
</ul>