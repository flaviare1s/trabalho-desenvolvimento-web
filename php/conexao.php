<?php
// Configurações de conexão com o banco de dados
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = ''; // Substitua pela senha configurada para o MySQL, caso tenha
$dbName = 'hotel_db';
$dbPort = 3306; // Adicione a porta se necessário

// Conexão com o banco de dados
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName, $dbPort);

// Verifica se a conexão foi bem-sucedida
if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}
?>
