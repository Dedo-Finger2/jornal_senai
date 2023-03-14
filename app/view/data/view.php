<?php
    // aqui vai ficar visualização dos dados selecionados na tela anterior

    $conexao = new mysqli("localhost", "root", "", "jornal_senai");
    $id = $_GET["id"];



    $query = "SELECT * FROM day WHERE id=$id";
    $result = mysqli_query($conexao, $query);
    $exibicao = mysqli_fetch_assoc($result);

    include_once("../../controller/form/backtoselect.php");
?>
<html>
    <head>
        <title><?= $exibicao['data'] ?></title>
    </head>
    <body>
        <h1>Dia: <?= $exibicao['data'] ?></h1>
        <?= $exibicao['aviso'] ?>
    </body>
</html>
