<?php
// Inclui o arquivo de conexão
include 'conexao.php';

// Consulta SQL para selecionar todas as reservas
$sql = "SELECT * FROM reservas";
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listagem de Reservas</title>
  <link rel="stylesheet" href="../styles/list.css">
</head>

<body>
  <h1>Lista de Reservas</h1>

  <?php if ($result->num_rows > 0): ?>
    <table>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Sexo</th>
        <th>Email</th>
        <th>Data de Chegada</th>
        <th>Noites</th>
        <th>Hóspedes</th>
        <th>Total Estimado</th>
        <th>Mensagem</th>
        <th>Newsletter</th>
        <th>Data da Reserva</th>
      </tr>
      <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['nome']; ?></td>
          <td><?php echo $row['sexo']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['data_de_chegada']; ?></td>
          <td><?php echo $row['numero_de_noites']; ?></td>
          <td><?php echo $row['numero_de_hospedes']; ?></td>
          <td><?php echo $row['total_estimado']; ?></td>
          <td><?php echo $row['mensagem']; ?></td>
          <td><?php echo $row['newsletter']; ?></td>
          <td><?php echo $row['data_reserva']; ?></td>
        </tr>
      <?php endwhile; ?>
    </table>
  <?php else: ?>
    <p>Nenhuma reserva encontrada.</p>
  <?php endif; ?>

  <?php $conexao->close(); ?>
</body>

</html>
