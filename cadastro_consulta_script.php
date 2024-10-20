<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pacientes</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" />
</head>
<body class="container mt-5">

<?php 
include "conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data_nascimento = $_POST['data_nascimento'] ?? '';
    $horario = $_POST['horario'] ?? '';
    $especialidade = $_POST['estado_civil'] ?? ''; // Renomear para 'especialidade'
    $nome_medico = $_POST['nome_medico'] ?? '';
    $motivo_consulta = $_POST['motivoconsulta'] ?? '';

    // Prepara a consulta SQL para inserir os dados
    $sql = "INSERT INTO consultas (data_nascimento, horario, especialidade, nome_medico, motivo_consulta) 
            VALUES (?, ?, ?, ?, ?)";

    
    // Usa prepared statement para evitar SQL injection
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Erro ao preparar a consulta: " . $conn->error);
    }

    // Usa bind_param para associar os parâmetros
    $stmt->bind_param("sssss", $data_nascimento, $horario, $especialidade, $nome_medico, $motivo_consulta);

    // Executa a consulta e verifica o resultado
    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>Consulta agendada com sucesso!</div>";
    } else {
        echo "<div class='alert alert-danger'>Erro ao cadastrar: " . $stmt->error . "</div>";
    }

    // Fecha a declaração e a conexão
    $stmt->close();
    $conn->close();
}
?>

<a href='index.php' class='btn btn-primary'>Ir para tela inicial</a>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
