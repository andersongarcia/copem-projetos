<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $html->charset(); ?>
        <title>
            <?php __('COPEM - Projetos - '); ?>
            <?php echo $title_for_layout; ?>
        </title>
        <?php
        echo $html->meta('icon');

        echo $html->css(array('cake.custom','datePicker'));

        echo $scripts_for_layout;
        ?>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <h1><?php echo $html->link(__('COPEM - Catálogo de Projetos', true), '/'); ?></h1>
                <div class="logo">
                    <?php echo $html->image('logo_copem.gif', array('alt'=> __('COPEM Engenharia', true), 'border'=>"0")) ?>
                </div>
            </div>
            <div id="menu">
                <ul>
                    <li><?php echo $html->link(__('Início', true), '/'); ?></li>
                    <li><?php echo $html->link(__('Novo Projeto', true), '/projetos/add'); ?></li>
                    <li><?php echo $html->link(__('Busca de Projetos', true), '/projetos/busca_avancada'); ?></li>
                    <li><?php echo $html->link(__('Administrativo', true), '/contratos'); ?></li>
                    <li><?php echo $html->link(__('Quantitativos', true), '/quantitativos'); ?></li>
                    <li><?php echo $html->link(__('Clientes', true), '/clientes'); ?></li>
                    <li><?php echo $html->link(__('Cadastros', true), '/admin/cadastros/menu'); ?></li>
                </ul>
            </div>
            <div id="content">
                <div id="login_status">
                    <?php 
                        if(isset($logado)) echo ($logado)?
                            'Você está logado como '.$usuario.'. '.$html->link(__('(sair)', true), '/usuarios/logout'):
                            'Você não está logado';
                    ?>
                </div>
                <?php
                    $session->flash();
                ?>

                <?php echo $content_for_layout; ?>

            </div>
            <div id="footer">
                <?php echo $html->link(
                $html->image('logo_acg.png', array('alt'=> __("ACG - Desenvolvimento e Suporte de Sistemas", true), 'border'=>"0")),
                'http://www.acganyware.com.br/',
                array('target'=>'_blank'), null, false
                );
                ?>
            </div>
        </div>
        <?php echo $cakeDebug; ?>
    </body>
</html>