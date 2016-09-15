$(document).ready(function () {
//alert('OI'); 
$("input.dinheiro").maskMoney({showSymbol:false, symbol:"R$", decimal:",", thousands:"."});
    $('#sem_nome').hide();
    $('#acerto').hide();

    function cadastrarprod(cod_merc, tipo_merc, nome_merc, qnt_merc, pre) {
        var msg = $('#acerto');
        $.ajax({
            url: './crud/cadastrar_prod.php',
            type: 'post',
            dataType: 'html',
            data: {acao: 'cadastrar', cod_m: cod_merc, tp_merc: tipo_merc, n_merc: nome_merc, qnt_m: qnt_merc, preco: pre},
            beforeSend: function () {
               
            },
            success: function () {
                msg.show();
                $('#cod_mercadoria').val("");
                $('#tipo_merc').val("");
                $('#nome_merc').val("");
                $('#qnt_merc').val("");
                $('#preco').val("");
            },
            error: function () {

            }
        });
    }

    $('form[name="cadastrar_prod"]').submit(function () {
        //cadastrarprod($(this).serialize());
        //alert($(this).serialize());
        return false;
    });
    $('#cadast').on('click', '.adc', function () {
        if ($('#tipo_merc').val() == "") {
            $('#sem_nome').show();
        } else {
            cadastrarprod($('#cod_mercadoria').val(), $('#tipo_merc').val(), $('#nome_merc').val(), $('#qnt_merc').val(), $('#preco').val());
        }
    });
});