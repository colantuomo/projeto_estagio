<?php
//conexão feita com o banco de dados 

$host = "localhost";
$user = "root";
$pass = "";
$db = "teste";

$link = mysqli_connect($host, $user, $pass, $db);
$link ->set_charset("utf8");