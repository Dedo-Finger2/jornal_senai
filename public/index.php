<html>
    <head>
        <title>Inicio</title>
    </head>
    <body>
        <h2>Página inicial</h2>
        <form action="../app/controller/form/tratamento.php" method="POST">
            <button type="submit" name="view">Visuzalizar dados</button>
            <br><br>
            <input type="text" name="data" placeholder="data">
            <br><br>
            <textarea name="aviso" placeholder="avisos"></textarea>
            <br><br>
            <button type="submit" name="dados">enviar dados</button>
        </form>
    </body>
</html>