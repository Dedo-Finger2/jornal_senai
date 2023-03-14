<?php
    // tela de edição dos dados

    require_once '../../model/conexao.php';

    $id = $_GET['id'];

    $sql = $conexao->query("SELECT * FROM day WHERE id=$id");
    $row = $sql->fetch_assoc();

    include_once("../../controller/form/backtoselect.php");
?>

<form action="../../controller/form/tratamento.php" method="POST">
    <h2>Editantdo dia <?= $row['data'] ?></h2>
    Nova data: <br><input type="text" name="novo_data" value="<?= $row['data'] ?>"><br><br>
    Novo aviso: <br><textarea rows='12' cols='50' name='novo_aviso'><?= $row['aviso'] ?></textarea>
    <input type="hidden" name="id" value="<?= $id ?>">
    <br><br>
    <button type="submit" name="update">Update</button>
</form>
