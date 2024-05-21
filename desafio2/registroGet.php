<?php
include 'funcoes.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['senha'])) {
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $senha = $_GET['senha'];

        if (validar_nome_usuario($nome) && validar_email($email) && validar_senha($senha)) {
            header("Location: desafio2/sucesso.php");
            exit();
        } else {
            header("Location: desafio2/erro.php ?campo=nome");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <form action="registro_get.php" method="GET">
        Nome: <input type="text" name="nome"><br>
        Email: <input type="email" name="email"><br>
        Senha: <input type="password" name="senha"><br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
