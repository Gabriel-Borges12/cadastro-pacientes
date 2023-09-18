<?php
    include 'conexao.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM paciente WHERE id_paciente = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows == 1) {
            $paciente = $resultado->fetch_assoc();
        }else{
            die("Paciente não encontrado.");
        }
    }else{
        die("ID ndo paciente não especificado.");
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];

        $sql = "UPDATE paciente SET nome_paciente = ?, cpf_paciente = ? WHERE id_paciente = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sii", $nome, $cpf, $id);

        if ($stmt->execute()) {
            header("Location: consultar.php");
        }else{
            echo "Erro ao atualizar paciente: ".$conn->error;
        }
        $stmt->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Editar Pacientes</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $paciente['id_paciente']; ?>">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $paciente['nome_paciente']; ?>" required>
        <label for="cpf">CPF:</label>
        <input type="number" name="cpf" id="cpf" value="<?php echo $paciente['cpf_paciente']; ?>" required>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>