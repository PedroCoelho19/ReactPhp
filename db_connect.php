<?php
//conexão com banco de dados
$serverName = "localhost";
$username = "estagiario_05";
$password = "741852";
$dbName = "rsp";


$connect = mysqli_connect($serverName, $username, $password , $dbName);

if(mysqli_connect_error()){
    echo "Falha na conexão".mysqli_connect_error();
}


