<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Cadastro de Cliente</h1>
    <?php
    if (isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];

        // Validações
        $errors = [];
        if (empty($nome)) {
            $errors[] = "Nome não pode estar em branco.";
        }
        if (empty($email)) {
            $errors[] = "E-mail não pode estar em branco.";
        }
        if (empty($cpf)) {
            $errors[] = "CPF não pode estar em branco.";
        } elseif (strlen($cpf) != 11) {
            $errors[] = "CPF deve conter 11 caracteres.";
        }

        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo "<p style='color:red;'>$error</p>";
            }
        } else {
            // Exibe os dados cadastrados e a data de cadastro
            $dataCadastro = date("d/m/Y H:i:s");
            echo "<h1>Dados Cadastrados</h1>";
            echo "<p>Nome: $nome</p>";
            echo "<p>E-mail: $email</p>";
            echo "<p>CPF: $cpf</p>";
            echo "<p>Data de Cadastro: $dataCadastro</p>";
        }
    }
    ?>

    <?php if (!isset($_POST['submit']) || count($errors) > 0) : ?>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" required>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Cadastrar</button>
    </form>
    <?php endif; ?>
</div>
</body>
</html>
