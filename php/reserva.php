<?php
// Inclui o arquivo de conexão
include 'conexao.php';

// Verifica se o formulário foi submetido via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Coleta os dados do formulário
  $nome = $_POST['nome'];
  $sexo = $_POST['sexo'];
  $email = $_POST['email'];
  $data_de_chegada = $_POST['data_de_chegada'];
  $numero_de_noites = $_POST['numero_de_noites'];
  $numero_de_hospedes = $_POST['numero_de_hospedes'];
  $total_estimado = $_POST['total_estimado'];
  $mensagem = $_POST['mensagem'];
  $newsletter = $_POST['newsletter'];

  // Exibe os dados recebidos
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";

  // Prepara o SQL para inserir os dados na tabela
  $sql = "INSERT INTO reservas (nome, sexo, email, data_de_chegada, numero_de_noites, numero_de_hospedes, total_estimado, mensagem, newsletter) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

  // Prepara a declaração para evitar SQL Injection
  $stmt = $conexao->prepare($sql);
  $stmt->bind_param("ssssiiiss", $nome, $sexo, $email, $data_de_chegada, $numero_de_noites, $numero_de_hospedes, $total_estimado, $mensagem, $newsletter);

  // Executa a declaração e verifica se a inserção foi bem-sucedida
  if ($stmt->execute()) {
    header("Location: success.php");
    exit();
  } else {
    echo "Erro ao realizar a reserva: " . $stmt->error;
  }

  // Fecha a declaração e a conexão
  $stmt->close();
  $conexao->close();
}
?>
