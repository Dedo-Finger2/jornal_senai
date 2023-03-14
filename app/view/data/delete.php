<?php
    // confirmação de deleção

    require_once '../../model/conexao.php';
    $id = $_GET['id'];

    $sql = $conexao->query("SELECT * FROM day WHERE id=$id");
    $row = $sql->fetch_assoc();

?>

<form action="../../controller/form/tratamento.php" method="POST">
    <h2>Tem certeza que quer APAGAR os dados do dia <?= $row['data'] ?>? Isso NÃO vai poder ser desfeito!</h2>
    <input type="hidden" name="delete_id" value="<?= $id ?>">
    <br><br>
    <button type="submit" name="deleted">Deletar</button>
</form>