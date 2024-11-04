<?php
include 'conexao.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $sql = "DELETE FROM reservas WHERE id = ?";

  $stmt = $conexao->prepare($sql);
  $stmt->bind_param("i", $id);


  if ($stmt->execute()) {
    echo "<script>alert('Reserva excluída com sucesso!');</script>";
  } else {
    echo "<script>alert('Erro ao excluir a reserva: " . $stmt->error . "');</script>";
  }

  $stmt->close();
  $conexao->close();

  echo "<script>window.location.href = 'reservas.php';</script>";
} else {
  echo "ID de reserva não informado.";
}
?>
