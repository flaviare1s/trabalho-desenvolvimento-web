<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'conexao.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
  $id = $_GET['id'];

  $sql = "SELECT * FROM reservas WHERE id = $id";
  $result = $conexao->query($sql);

  if ($result->num_rows > 0) {
    $reserva = $result->fetch_assoc();
  } else {
    echo "Reserva não encontrada.";
    exit;
  }
} else {
  echo "ID de reserva inválido ou não informado.";
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['nome'];
  $sexo = $_POST['sexo'];
  $email = $_POST['email'];
  $data_de_chegada = $_POST['data_de_chegada'];
  $numero_de_noites = $_POST['numero_de_noites'];
  $numero_de_hospedes = $_POST['numero_de_hospedes'];
  $total_estimado = $_POST['total_estimado'];
  $mensagem = $_POST['mensagem'];
  $newsletter = $_POST['newsletter'];

  $sql_update = "UPDATE reservas SET 
                    nome = '$nome', 
                    sexo = '$sexo', 
                    email = '$email', 
                    data_de_chegada = '$data_de_chegada', 
                    numero_de_noites = $numero_de_noites, 
                    numero_de_hospedes = $numero_de_hospedes, 
                    total_estimado = $total_estimado, 
                    mensagem = '$mensagem', 
                    newsletter = '$newsletter' 
                    WHERE id = $id";

  if ($conexao->query($sql_update) === TRUE) {
    header("Location: reservas.php");
    echo "Reserva atualizada com sucesso.";
  } else {
    echo "Erro ao atualizar a reserva: " . $conexao->error;
  }
}
?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/form.css">
  <title>Editar Reserva</title>
</head>

<body>
  <a  style="display: block; text-align: left; text-decoration: none; font-weight: bold; color: var(--white); margin-bottom: 10px; width: 100%; padding: 10px;" href="../index.html">Voltar para Home</a>
  <h1>Editar Reserva</h1>
  <form method="post" action="">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" value="<?php echo $reserva['nome']; ?>" required><br>

    <label for="sexo">Sexo:</label>
    <select id="sexo" name="sexo" required>
      <option value=""></option>
      <option value="Masculino" <?php echo $reserva['sexo'] === 'Masculino' ? 'selected' : ''; ?>>Masculino</option>
      <option value="Feminino" <?php echo $reserva['sexo'] === 'Feminino' ? 'selected' : ''; ?>>Feminino</option>
    </select><br>

    <label for="email">E-mail:</label>
    <input type="text" id="email" name="email" value="<?php echo $reserva['email']; ?>" required><br>

    <label for="data_de_chegada">Data de Chegada:</label>
    <input type="text" id="data_de_chegada" name="data_de_chegada" value="<?php echo $reserva['data_de_chegada']; ?>"
      required><br>

    <label for="numero_de_noites">Número de noites:</label>
    <input type="number" id="numero_de_noites" name="numero_de_noites"
      value="<?php echo $reserva['numero_de_noites']; ?>" required><br>

    <label for="numero_de_hospedes">Número de hóspedes:</label>
    <input type="number" id="numero_de_hospedes" name="numero_de_hospedes"
      value="<?php echo $reserva['numero_de_hospedes']; ?>" required><br>

    <label for="total_estimado">Total estimado:</label>
    <input type="number" id="total_estimado" name="total_estimado" value="<?php echo $reserva['total_estimado']; ?>"
      required><br>

    <label for="mensagem">Mensagem ou Observações:</label><br>
    <textarea id="mensagem" name="mensagem"><?php echo $reserva['mensagem']; ?></textarea><br>

    <label for="newsletter">Gostaria de receber e-mails contendo atualizações, promoções, entre outras
      coisas?</label><br>
    <div class="radio-group">
      <div><input type="radio" id="newsletter_sim" name="newsletter" value="sim" <?php echo $reserva['newsletter'] === 'sim' ? 'checked' : ''; ?>>Sim</div>
      <div><input type="radio" id="newsletter_nao" name="newsletter" value="nao" <?php echo $reserva['newsletter'] === 'nao' ? 'checked' : ''; ?>>Não</div>
    </div>
    <br>

    <input type="submit" value="Salvar Alterações">
  </form>
</body>

</html>
