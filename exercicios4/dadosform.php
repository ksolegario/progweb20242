<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
