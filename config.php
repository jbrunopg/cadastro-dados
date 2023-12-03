<?php

    header("Access-Control-Allow-Origin: *"); // Permitir solicitações de qualquer origem

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbName = "cadastro";

    $connection = new mysqli($host, $user, $password, $dbName);

    if($connection->connect_error){
        die("Connection Failed".$connection->connect_error);
    }

?>
