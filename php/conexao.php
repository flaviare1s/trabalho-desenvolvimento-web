<?php

header('Access-Control-Allow-Origin: ');

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'hotel_db';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

?>