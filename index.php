<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/main.js"></script>
    <title>Cadastro</title>
</head>

<body>
    <main>
        <div id="formulario">
            <h1 class="titulo">Cadastro de Pacientes</h1>
            <form method="post" action="cadastrar.php">
                <input type="hidden" name="id_paciente" id="id_paciente">
                <label for="nome">Nome:</label>
                <input type="text" name="nome_paciente" id="nome">
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf_paciente" id="cpf">
                <label for="plano">Plano:</label>
                <select name="convenio_paciente" id="plano">
                    <option value="publico">Público (SUS)</option>
                    <option value="privado">Privado</option>
                </select>
                <input type="submit" class="btn" value="Enviar">
                <button type="button" class="btn-list"><a href="consultar.php">Lista de Pacientes</a></button>
            </form>
        </div>
    </main>
</body>

</html>