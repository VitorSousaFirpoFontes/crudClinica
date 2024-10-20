<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet" />
</head>
<body>
    <section class="container mt-5">
        <h1 class="text-center mb-4">Preencha os campos</h1>
        <form action="cadastro_consulta_script.php" method="POST" class="form-centralizado">
        <div class="form-group">
                <label for="data_nascimento">Data de nascimento:</label>
                <input class="form-control" type="date" id="data_nascimento" name="data_nascimento" required>
            </div>


            <div class="form-group">
    <label for="horario" class="text-center">Horário:</label>
    <input class="form-control" type="time" id="horario" name="horario" required>
</div>

  


            <label for="estado_civil">Especialidade:</label>
<select id="estado_civil" name="estado_civil">
  <option value="solteiro">Clinica geral</option>
  <option value="casado">Pediatria</option>
  <option value="divorciado">Ginecologia</option>
  <option value="viuvo">Cardiologia</option>
  <option value="outro">Dermatologia</option>
  <option value="outro">Ortopedia</option>
  <option value="outro">Oftalmologia</option>
  <option value="outro">Outro</option>
</select>

<Br>
            <div class="form-group">
                <label for="categoria">Nome do médico (opcional):</label>
                <input class="form-control" type="text" id="nome_medico" name="nome_medico" required>
            </div>

            <div class="form-group">
                <label for="categoria">Motivo do consulta:</label>
                <input class="form-control" type="text" id="motivoconsulta" name="motivoconsulta" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Cadastrar medicamento</button>
        </form>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
