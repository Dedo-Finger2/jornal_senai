<?php
    // tela de edição dos dados

    require_once '../../model/conexao.php';

    $id = $_GET['id'];

    $sql = $conexao->query("SELECT * FROM day WHERE id=$id");
    $row = $sql->fetch_assoc();
?>

<form action="../../controller/form/tratamento.php" method="POST">
    <h3>Editantdo local</h3>
    Nova data: <input type="text" name="novo_data" value="<?= $row['data'] ?>"><br><br>
    Novo aviso: <textarea name="novo_aviso"><?= $row['aviso'] ?></textarea>
    <input type="hidden" name="id" value="<?= $id ?>">
    <br><br>
    <button type="submit" name="update">Update</button>
</form>
