<?php
    // aqui vai ficar a tabela com os botões de ação
    $conexao = new mysqli("localhost", "root", "", "jornal_senai");
    $result = $conexao->query("SELECT * FROM day");
?>
<table style="border:2px solid black;">
    <thead>
        <tr>
            <td><b>ID</b></td>            
            <td><b>Dia</b></td>
            <td><b>Aviso</b></td>
            <td><b>Opções</b></td>
        </tr>
    </thead>    
    <tbody>
        <?php
            if ($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc()) 
                {
        ?>   
                    <tr>
                        <td>
                            <p><?= $row['id'] ?></p>
                        </td>
                        <td>
                            <p><?= $row['data'] ?></p>
                        </td>
                        <td>
                            <p><?= $row['aviso'] ?></p>
                        </td>
                        <td>
                            <a href="delete.php?id=<?= $row['id'] ?>">
                                -- Apagar
                            </a> |
                            <a href="edit.php?id=<?= $row['id'] ?>">
                                Editar
                            </a> |
                            <a href="view.php?id=<?= $row['id'] ?>">
                                Ver
                            </a>
                        </td>
                    </tr>
        <?php
                }
            }
        ?>       
    </tbody>

    
</table>