<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Formulário</h2>

<center><form method="get" >
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome"><br>

    <label for="telefone">Telefone:</label><br>
    <input type="tel" id="telefone" name="telefone" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" placeholder="DD NNNNN-NNNN"><br>

    <label for="cpf">CPF:</label><br>
    <input type="text" id="cpf" name="cpf" pattern="\d{3}.\d{3}.\d{3}-\d{2}" placeholder="123.456.789-00"><br>

    <label for="data">Data de Nascimento:</label><br>
    <input type="date" id="data" name="data"><br>

    <label for="cor_fundo">Escolha uma Cor:</label>
    <input type="color" name="cor_fundo" id="cor_fundo" ><br>

    <input type="submit" value="Enviar">
</form>
</center>

<?php 
    if(isset($_GET['cor_fundo'])) {
        $cor = $_GET['cor_fundo'];
        echo "<style>form { background-color: $cor; }</style>";
    }
?>

</body>
</html>
