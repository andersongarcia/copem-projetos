$(document).ready(function() {
    $('#ProjetoDado div').hide();
    $('#ProjetoSubcontratado div').hide();
});


function jqMostraEmpresa( id ) {
    if($('#' + id).is(':checked'))
        $('#' + id + 'Empresa').show();
    else
        $('#' + id + 'Empresa').hide();
}


