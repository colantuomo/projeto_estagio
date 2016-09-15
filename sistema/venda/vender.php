<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="./js/venda.js" type="text/javascript"></script>
        <script src="./js/maskmoney.js" type="text/javascript"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.css" rel="stylesheet">
        <title>Vender</title>
        <script>
        </script>
    </head>

    <body> 
        <!--DIV DO H1 ocupando as 12 colunas da tela -->
        <div class="jumbotron">
            <div class="container text-center">
                <h2>É rápido!</h2>
            </div>
        </div>




        <div class="container">
            <div class="row centered-form">
                <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="container-center">
                                <h3 class="panel-title">O que deseja vender?</h3>
                            </div>
                            <div id="sem_nome" class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Ei! Não pode!</strong> Você precisa preencher os campos! 
                            </div>
                            <div id="acerto" class="alert alert-success">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Sucesso!</strong> Você adicionou um produto/mercadoria para vender.
                            </div>
                            <div id="cadast" class="panel-body">
                                <form name="cadastrar_prod">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="cod_merc" id="cod_mercadoria" class="form-control input-sm" placeholder="Código da mercadoria">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="tipo_merc" id="tipo_merc" class="form-control input-sm" placeholder="Tipo de mercadoria">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="nome_merc" id="nome_merc" class="form-control input-sm" placeholder="Nome da mercadoria">
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="qnt_merc" id="qnt_merc" class="form-control input-sm" placeholder="Quantidade">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="preco" id="preco" class="form-control input-sm dinheiro" placeholder="Preço">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="cadastrar"/>
<!--                                        <input id="btn_adc" class="btn btn-info btn-block adc">-->
                                </form>
                                <button class="btn btn-info btn-block adc">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </form>



</body>
</html> 