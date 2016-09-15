<?php ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="./js/compra.js" type="text/javascript"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.css" rel="stylesheet">
        <title>Estágio - Comprar</title>

    </head>

    <body>
        <!-- Texto no cabeçalho da página -->
        <div class="jumbotron">
            <div class="container text-center">
                <h1>Compras! :)</h1>
                <p class="lead">
                    Digite abaixo o nome do produto/mercadoria que deseja procurar
                </p>
            </div>  
        </div>  

        <form method="post">
            <div class="form-group">
                <label class="col-md-4 control-label" for="procura_compra"></label>
                <div id="compra_div" class="col-md-4">
                    <input id="procura_compra" name="procura_compra" type="search" placeholder="Produto/Mercadoria" class="form-control input-md pesquisa_keyup">
                    <!--                        <button type="button" class="btn btn-primary btn-lg">Comprar</button>-->

                </div>
            </div>

        </form>
        <br/>
        <br/>
        <div class="table-responsive">
<!--            Tabela aonde será exibida os dados que será procurado no "search" da pag "comprar"-->
            <table class="table table-condensed table-bordered" id="resposta">
            </table>
        </div>
    </body>



</html>    