<html>
    <head>
        <title>Inicio</title>
    </head>
    <body>
        <h2>Página inicial</h2>
        <form action="../app/controller/form/tratamento.php" method="POST">
            <button type="submit" name="view">Visuzalizar dados</button>
            <br><br>
            <input type="text" name="data" placeholder="d/MM/yyyy">
            <br><br> 
<textarea rows='12' cols='50' name='aviso'>
<h2>Titulo</h2>
<p>aviso sobre o titulo</p>
<hr>
<h2>Titulo2</h2>
<p>aviso sobre o titulo2</p>
</textarea>
            <br><br>
            <button type="submit" name="dados">enviar dados</button>
        </form>
    </body>
</html>