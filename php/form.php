<!DOCTYPE html>
<html lang="PT-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/form.css">
  <title>Faça sua Reserva</title>
</head>
<body>
    <h1>Faça a sua reserva:</h1>
    <form method="post" action="reserva.php">
        <label class="label-text" for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label class="label-text" for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value=""></option>
            <option value="ac">Masculino</option>
            <option value="al">Feminino</option>
        </select><br>

        <label class="label-text" for="email">E-mail:</label>
        <input type="text" id="email" name="email" required><br>

        <label class="label-text" for="data_de_chegada">Data de Chegada:</label>
        <input type="text" id="data_de_chegada" name="data_de_chegada" required><br>

        <label class="label-text" for="numero_de_noites">Número de noites:</label>
        <input type="text" id="numero_de_noites" name="numero_de_noites" required><br>

        <label class="label-text" for="numero_de_hospedes">Número de hospedes:</label>
        <input type="number" min="1" max="99" id="numero_de_hospedes" name="numero_de_hospedes" required><br>

        <label class="label-text" for="total_estimado">Total estimado:</label>
        <input type="text" id="total_estimado" name="total_estimado" required><br>

        <label class="label-text" for="mensagem">Mensagem ou Observaçoes:</label><br>
        <textarea id="mensagem" name="mensagem"></textarea><br>

        <label class="label-text" for="newsletter">Gostaria de receber e-mails contendo atualizações, promoções entre outras coisas?</label><br>
        <input type="radio" id="newsletter" name="newsletter" value="sim">Sim
        <input type="radio" id="newsletter" name="newsletter" value="nao" checked="checked">Não<br>

        <input type="submit" value="Confirmar">
    </form>
</body>
</html>
