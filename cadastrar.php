<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $var_nome = $_POST['nome_paciente'];
    $var_cpf = $_POST['cpf_paciente'];
    $var_convenio = $_POST['convenio_paciente'];


    $sql_insercao = "INSERT INTO paciente (nome_paciente, cpf_paciente, convenio_paciente) VALUES (?,?,?)";
    $stmt = $conn->prepare($sql_insercao);

    $stmt->bind_param("sis", $var_nome, $var_cpf, $var_convenio);

    if ($stmt->execute()) {
        header("Location: index.php?msg=Paciente cadastrado com sucesso!");
    } else {
        echo "Erro ao cadastrar paciente" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>