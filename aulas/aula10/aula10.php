<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        <label for="">Usuario:</label>
        <input type="text" name="usuario" id="">

        <label for="">Senha:</label>
        <input type="text" name="senha" id="">

        <input type="submit" value="Login">
    </form>


    <?php 
    
        require_once "usuarios.php";

        $usuario = $_POST['usuario'] ?? null;
        $senha = $_POST['senha'] ?? null;

        // echo "$usuario -- $senha";

        if(is_null($usuario) && is_null($senha)){
            echo "<br>Fazer Login";
        }else{
            if(verUsuarios($usuario, $senha)){
                
              echo "<br>Bem vindo...";
                
            }else{
                echo "<br>Tentar novamente...";
            }

        }
    
    ?>


</body>
</html>