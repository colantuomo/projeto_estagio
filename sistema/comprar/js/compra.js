$(document).ready(function () {

    function busca_bd(dados) {
        var div = $('#resposta');
        $.ajax({
            url: './load/load_merc.php',
            type: 'post',
            dataType: 'html',
            data: {acao: 'buscar', pesquisa: dados},
            beforeSend: function () {

            },
            success: function (retorno) {
                div.empty().append(retorno);
            },
            error: function () {

            }
        });
    }

    $('#compra_div').on('keyup', '.pesquisa_keyup', function () {
        if($('#procura_compra').val() == ""){
            $('#resposta').empty();
        }else{
            busca_bd($(this).val());
        }
        
    });
});