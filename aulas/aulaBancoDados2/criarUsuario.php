<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuário </title>
</head>
<body>
    h1>Criar usuario: </h1>
<!--<form action="" method="post">
    <label for="">Usuario:</label>
    <input type="text" name="usuario" id="">

    <label for="">Nome:</label>
    <input type="text" name="nome" id="">

    <label for="">Senha:</label>
    <input type="text" name="senha" id="">

    <input type="submit" value="Login">
</form>-->

<?php 
    require_once "banco.php";
    
    $usu = $_POST['usuario'] ?? null;
    $nome = $_POST['nome']??null;
    $sen = $_POST['senha'] ?? null;

    if(is_null($usu) || is_null($sen)||is_null($nome)){
        require "formCriar.php";
    }else{

        criarUsuario($usu,$nome,$sen);
    }

?>
    
</body>
</html>