<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirmacao'])) {
    // Se a confirmação for verdadeira, exclua todos os dados de pacientes
    $sql = "DELETE FROM paciente";
    if ($conn->query($sql)) {
        echo "Todos os dados de pacientes foram excluídos com sucesso!";
    } else {
        echo "Erro ao excluir dados de pacientes: " . $mysqli->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Excluir Todos os Pacientes</title>
</head>
<body>
    <div class="content">
        <h1>Excluir Todos os Pacientes</h1>
        <p>Tem certeza de que deseja excluir todos os dados de pacientes? Esta ação não pode ser desfeita.</p>
        
        <form method="POST">
            <label for="confirmacao">Digite "SIM" para confirmar:</label>
            <input type="text" name="confirmacao" id="confirmacao" required>
            <input type="submit" value="Excluir Todos os Dados">
        </form>

        <br>
        <a href="lista_pacientes.php">Voltar para a Lista de Pacientes</a> <br>
        <a href="index.php">Voltar para o login</a>
    </div>
</body>
</html>