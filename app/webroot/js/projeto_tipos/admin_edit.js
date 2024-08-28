function MostraTiposInfraestrutura(){
    if($('#ProjetoTipoInfraestrutura').is(':checked'))
        $('#divInfraestruturaTipo').show();
    else
        $('#divInfraestruturaTipo').hide();
}

$(document).ready(function() {
    MostraTiposInfraestrutura();

    $('#ProjetoTipoInfraestrutura').click(function(){MostraTiposInfraestrutura();})

});