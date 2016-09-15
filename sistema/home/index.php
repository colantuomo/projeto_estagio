<?php

//include '../func/conn.php';
//
//function testedb(){
//    global $link;
//    $query = 'select * from teste';
//    $result = mysqli_query($link, $query);
//    while($fetch = mysqli_fetch_assoc($result)){
//        echo $fetch['id'];
//    }
//}
//testedb();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
       
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--        <script src="./js/home.js" type="text/javascript"></script>-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.css" rel="stylesheet">
        <title>Projeto Estágio</title>

    </head>

    <body>
        <!-- Texto no cabeçalho da página -->
        <div class="jumbotron">
            <h1>WEB Mercadorias</h1>
            <p class="lead">
                Selecione abaixo o que deseja fazer.
                <br>É muito simples!  
            </p>
        </div>  

        <form>  
            <div class="text-center">
<!--                Botões direcionando as páginas: "Comprar" e "Vender"-->
                <button onclick="window.location.href = '../comprar/comprar.php'" type="button" class="btn btn-primary btn-lg">Comprar</button>
                <button onclick="window.location.href = '../venda/vender.php'" type="button" class="btn btn-success btn-lg">Vender</button>    
            </div>        
        </form>

    </body>



</html>    