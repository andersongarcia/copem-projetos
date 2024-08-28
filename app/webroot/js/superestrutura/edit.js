$(document).ready(function() {
    if($('#SuperestruturaProjetoPadrao').is(':checked'))
        $('#ProjetoPadraoDados').show();
    else
        $('#ProjetoPadraoDados').hide();

    $('#SuperestruturaProjetoPadrao').click(function(){
            if($('#SuperestruturaProjetoPadrao').is(':checked'))
                $('#ProjetoPadraoDados').show();
            else
                $('#ProjetoPadraoDados').hide();
        }
    );

    $('.valor').numeric({allow:","});

    SelecionaTipoDeObra();

    $('#SuperestruturaObraId').change(function(){
            SelecionaTipoDeObra();
        }
    )
});

function SelecionaTipoDeObra(){
    switch($('#SuperestruturaObraId option:selected').val()){
        case '1':
            $('#ObraEmViga').show();
            $('#ObraEmLaje').hide();
            $('#ObraEmCaixao').hide();
            break;
        case '2':
            $('#ObraEmViga').hide();
            $('#ObraEmLaje').show();
            $('#ObraEmCaixao').hide();
            break;
        case '3':
            $('#ObraEmViga').hide();
            $('#ObraEmLaje').hide();
            $('#ObraEmCaixao').show();
            break;
        default:
            $('#ObraEmViga').hide();
            $('#ObraEmLaje').hide();
            $('#ObraEmCaixao').hide();
            break;
    }
}