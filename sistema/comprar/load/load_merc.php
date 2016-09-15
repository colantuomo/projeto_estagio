<?php

include '../../func/conn.php';

function buscar($val) {
    global $link;
    $pesquisa = $val['pesquisa'];
    //Pesquisa está sendo feita baseada nas informações de NOME da mercadoria
    //No banco essa tabela é a "n_m"
    $query = 'SELECT * FROM mercadoria where n_m like "%' . $pesquisa . '%"';
    $result = mysqli_query($link, $query);
    echo '<tr>';
    echo '<td>Nome do Produto</td>';
    echo '<td>Preço</td>';
    echo '</tr>';
    while ($fetch = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $fetch['n_m'] . '</td>';
        echo '<td>' . $fetch['preco'] . '</td>';
        echo '</tr>';
    }
}

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


if ($dados) {
    switch ($dados['acao']) {
        case 'buscar' : {
                buscar($dados);
            }
    }
}
