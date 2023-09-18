<?php
include 'conexao.php';

$sql = "SELECT * FROM paciente";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    echo "<table border='2'>";
    echo "<tr><th>ID</th><th>Nome</th><th>CPF</th><th>Convênio</th><th>Ações</th></tr>";

    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id_paciente'] . "</td>";
        echo "<td>" . $row['nome_paciente'] . "</td>";
        echo "<td>" . $row['cpf_paciente'] . "</td>";
        echo "<td>" . $row['convenio_paciente'] . "</td>";
        echo "<td>";
        echo "<a href='editar.php?id=" . $row['id_paciente'] . "'>Editar</a> | ";
        echo "<a href='apagar.php?id=" . $row['id_paciente'] . "'>Apagar</a>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Nenhum paciente cadastrado.";
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Lista</title>
</head>
<body>
<button type="button" class="btn-volta"><a href="index.php">Voltar</a></button>
</body>
</html>





<!-- // include 'conexao.php';

// $sql = "SELECT * FROM paciente";
// $resultado = $conexao->query($sql);

// if ($resultado->num_rows > 0) {
//     while ($row = $resultado->fetch_assoc()) {

//     }
// } else {
//     echo "Nenhum paciente cadastrado.";
// }

// echo "<table>";
// echo "<tr><th>ID</th><th>Nome</th><th>Idade</th><th></tr>";
// while ($row = $resultado->fetch_assoc()) {
//     echo "<tr>";
//     echo "td" . $row['id_paciente'] . "</td>";
//     echo "td" . $row['nome_paciente'] . "</td>";
//     echo "td" . $row['cpf_paciente'] . "</td>";
//     echo "td" . $row['convenio_paciente'] . "</td>";
// }

// echo "</table>";

// if ($resultado->num_rows === 0) {
//     echo "Nenhum paciente cadastrado";
// }

// $conexao->close(); -->
