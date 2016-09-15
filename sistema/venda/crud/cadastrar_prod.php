<?php

include '../../func/conn.php';

function testedb() {
    global $link;
    $query = 'select * from teste';
    $result = mysqli_query($link, $query);
    while ($fetch = mysqli_fetch_assoc($result)) {
        echo $fetch['id'];
    }
}

function cadastrar_banco($valores) {
    global $link;
    $cod_m = $valores['cod_m'];
    $tp_merc = $valores['tp_merc'];
    $n_merc = $valores['n_merc'];
    $qnt_m = $valores['qnt_m'];
    $source = array('.', ',');
    $replace = array('', '.');
    $valor = str_replace($source, $replace, $valores['preco']); //remove os pontos e substitui a virgula pelo ponto
    $preco = $valor;

    $query = 'INSERT INTO mercadoria(cod_m,tp_m,n_m,qnt_m,preco) VALUES("' . $cod_m . '","' . $tp_merc . '","' . $n_merc . '","' . $qnt_m . '","' . $preco . '")';
    $result = mysqli_query($link, $query);
    mysqli_close($link);
}

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


if ($dados) {
    switch ($dados['acao']) {
        case 'cadastrar' : {
                cadastrar_banco($dados);
            }
    }
}