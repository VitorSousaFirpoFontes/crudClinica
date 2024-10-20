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
        <form action="cadastro_script.php" method="POST" class="form-centralizado">
            <div class="form-group">
                <label for="nome" class="text-center">Nome completo:</label>
                <input class="form-control" type="text" id="nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="data_nascimento" class="text-center">Data de nascimento:</label>
                <input class="form-control" type="date" id="data_nascimento" name="data_nascimento" required>
            </div>

            <div class="form-group">
                <label for="gender" class="text-center">Gênero:</label>
                <select id="gender" name="gender" class="form-control">
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                    <option value="prefiro_nao_informar">Prefiro não informar</option>
                </select>
            </div>

            <div class="form-group">
                <label for="estado_civil" class="text-center">Estado Civil:</label>
                <select id="estado_civil" name="estado_civil" class="form-control">
                    <option value="solteiro">Solteiro</option>
                    <option value="casado">Casado</option>
                    <option value="divorciado">Divorciado</option>
                    <option value="viuvo">Viúvo</option>
                    <option value="outro">Outro</option>
                </select>
            </div>

            <div class="form-group">
                <label for="endereco" class="text-center">Endereço:</label>
                <input class="form-control" type="text" id="endereco" name="endereco" required>
            </div>

            <div class="form-group">
                <label for="telefone" class="text-center">Telefone:</label>
                <input class="form-control" type="number" id="telefone" name="telefone" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
        </form>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
