<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saudações do Dia</title>
</head>
<body>

<?php

$agora = new DateTime("now", new DateTimeZone("Asia/Beirut"));
$horaAtual = $agora->format('H');

if ($horaAtual < 12) {
    $mensagemSaudacao = "bom dia!";
    $imagemSaudacao = "bomdia.jpg"; 
} elseif ($horaAtual < 18) {
    $mensagemSaudacao = "boa tarde!";
    $imagemSaudacao = "boatarde.webp"; 
} else {
    $mensagemSaudacao = "boa noite!";
    $imagemSaudacao = "boanoite.jpg"; 
}
?>

    <h1><?php echo $mensagemSaudacao; ?></h1>
    <img src="<?php echo $imagemSaudacao; ?>" alt="<?php echo $mensagemSaudacao; ?>">
</body>
</html>
