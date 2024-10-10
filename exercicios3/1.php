<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatorio de Cliente</title>
</head>
<body>
    <h1>Relatório de cliente</h1>

    <?php

        $pessoa1 = array("codigo" =>1, "nome" => "Gabriel Barbosa");
        $pessoa2 = array("codigo" =>2, "nome" => "Arrascaeta");
        $pessoa3 = array("codigo" =>3, "nome" => "Bruno Henrique");
        $pessoa4 = array("codigo" =>4, "nome" => "Nicolás de la Cruz");
        $pessoa5 = array("codigo" =>5, "nome" => "Gerson");

        $lista['pessoa'][] = $pessoa1;
        $lista['pessoa'][] = $pessoa2;
        $lista['pessoa'][] = $pessoa3;
        $lista['pessoa'][] = $pessoa4;
        $lista['pessoa'][] = $pessoa5;

        var_dump($lista);

        foreach($lista as $listapessoas){
    ?>

    <table>

        <tr>
            <th>Código</th>
            <th>Nome</th>
        </tr>

        <?php
            foreach($listapessoas as $itempessoa => $valuepessoa){
        ?>

        <tr>
            <?php foreach($valuepessoa as $item => $value){
                echo "<td> $value </td>";
            } ?>

        </tr>

        <?php } ?>

    </table>


    <?php } ?>
</body>
</html>
