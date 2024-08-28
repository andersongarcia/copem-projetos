<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
*/

?>
<h2><?php __('Cadastros');?></h2>
<div>
<ul>
<?php foreach ($cadastros as $cadastro): ?>
    <li><?php echo $html->link(__($cadastro['Cadastro']['nome'], true), '/admin/'.$cadastro['Cadastro']['tabela']); ?></li>
<?php endforeach; ?>
</ul>
</div>