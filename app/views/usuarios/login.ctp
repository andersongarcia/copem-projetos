<?php
$session->flash('Auth');
echo $form->create('Usuario', array('action' => 'login'));
?>
<fieldset>
    <legend><?php __('Acesso Restrito');?></legend>
    <table class="minform">
        <tr>
            <td class="rotulo">&nbsp;</td>
            <td style="text-align: left;">
                <?php
                    echo $form->input('username', array('style'=>'width: 250px;','label'=>'Usuário'));
                    echo $form->input('password', array('style'=>'width: 250px;','label'=>'Senha'));
                    echo $form->end('Login');
                ?>
            </td>
        </tr>
    </table>
</fieldset>