$(function(){
    // Tabs
    $('#tabs').tabs();
});

$(document).ready(function() {
    MostraProjetoPadrao();
    $('#SearchProjetoPadrao').click(function(){MostraProjetoPadrao();});
});

function MostraProjetoPadrao(){
    if($('#SearchProjetoPadrao').is(':checked'))
        $('#ProjetoPadrao').show();
    else
        $('#ProjetoPadrao').hide();
}