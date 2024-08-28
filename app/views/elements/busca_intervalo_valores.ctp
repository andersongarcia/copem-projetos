<div class="input text">
    <label><?php __($label); ?></label>
    <table class="miniform" style="width: auto;">
        <tr>
            <td style=" vertical-align: middle;">de</td>
            <td><?php echo $form->input('Search.'.$campo.'_inicio', array('div'=>false,'label'=>'', 'class'=>'valor', 'style'=>'width: 50px;')); ?></td>
            <td style=" vertical-align: middle;">até</td>
            <td><?php echo $form->input('Search.'.$campo.'_fim', array('div'=>false,'label'=>'', 'after'=>' '.$unidade, 'class'=>'valor', 'style'=>'width: 50px;')); ?></td>
        </tr>
    </table>
</div>