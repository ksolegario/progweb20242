<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saudações do Dia</title>
</head>
<body>

<?php

$agora = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));
$horaAtual = $agora->format('H');

$mensagemSaudacao = '';
$imagemSaudacao = '';

if ($horaAtual < 12) {
    $mensagemSaudacao = "Olá, bom dia!";
    $imagemSaudacao = "bomdia.jpg"; 
} elseif ($horaAtual < 18) {
    $mensagemSaudacao = "Boa tarde!";
    $imagemSaudacao = "bomdia.jpg"; 
} else {
    $mensagemSaudacao = "Boa noite!";
    $imagemSaudacao = "boanoite.jpg"; 
}
?>

    <h1><?php echo $mensagemSaudacao; ?></h1>
    <img src="<?php echo $imagemSaudacao; ?>" alt="<?php echo $mensagemSaudacao; ?>">
</body>
</html>
