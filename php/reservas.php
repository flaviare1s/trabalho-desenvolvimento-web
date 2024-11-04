<?php
include 'conexao.php';

$sql = "SELECT * FROM reservas";
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listagem de Reservas</title>
  <link rel="stylesheet" href="../styles/reservas.css">
</head>

<body>
  <a style="display: block; text-align: left; text-decoration: none; font-weight: bold; color: var(--white); margin-bottom: 10px; width: 100%; padding: 10px;"
    href="../index.html">Voltar para Home</a>
  <h1>Lista de Reservas</h1>

  <?php if ($result->num_rows > 0): ?>
    <table>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th class="hidden">Sexo</th>
        <th class="hidden-lg">Email</th>
        <th class="hidden-md">Data de Chegada</th>
        <th class="hidden">Noites</th>
        <th class="hidden">Hóspedes</th>
        <th class="hidden">Total Estimado</th>
        <th class="hidden">Mensagem</th>
        <th class="hidden">Newsletter</th>
        <th class="hidden-sm">Data da Reserva</th>
        <th>Ações</th>
      </tr>
      <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['nome']; ?></td>
          <td class="hidden"><?php echo $row['sexo']; ?></td>
          <td class="hidden-lg"><?php echo $row['email']; ?></td>
          <td class="hidden-md"><?php echo $row['data_de_chegada']; ?></td>
          <td class="hidden"><?php echo $row['numero_de_noites']; ?></td>
          <td class="hidden"><?php echo $row['numero_de_hospedes']; ?></td>
          <td class="hidden"><?php echo $row['total_estimado']; ?></td>
          <td class="hidden"><?php echo $row['mensagem']; ?></td>
          <td class="hidden"><?php echo $row['newsletter']; ?></td>
          <td class="hidden-sm"><?php echo $row['data_reserva']; ?></td>
          <td>
            <a href="editar_reserva.php?id=<?php echo $row['id']; ?>">Editar</a>
            <a href="excluir_reserva.php?id=<?php echo $row['id']; ?>">Excluir</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </table>
  <?php else: ?>
    <p>Nenhuma reserva encontrada.</p>
  <?php endif; ?>

  <?php $conexao->close(); ?>
</body>

</html>
