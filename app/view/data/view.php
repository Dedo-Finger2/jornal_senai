<?php
    // aqui vai ficar visualização dos dados selecionados na tela anterior

    $conexao = new mysqli("localhost", "root", "", "jornal_senai");
    $id = $_GET["id"];



    $query = "SELECT * FROM day WHERE id=$id";
    $result = mysqli_query($conexao, $query);
    $exibicao = mysqli_fetch_assoc($result);

?>
<html>
    <head>
        <title><?= $exibicao['data'] ?></title>
    </head>
    <body>
        <?= $exibicao['aviso'] ?>
    </body>
</html>
