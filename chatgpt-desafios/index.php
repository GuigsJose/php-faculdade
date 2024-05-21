<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario simples</title>
</head>
<body>
    <h2>Formulário zika</h2>

    <form action="processar.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome"/><br><br>
        <label for="email">E-mail:</label><br>
        <input type="email" name="email" id="email"><br><br>
        <input type="submit" value="enviar">
    </form>    
</body>
</html>