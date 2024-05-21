<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>
    <?php 
    
        require_once "banco.php";

        $usu = $_POST["usuario"] ?? null;
        $sen = $_POST["senha"] ?? null;
        
        if(is_null($usu) || is_null($sen)){
            require "form.php";
        }else{

            $q = "SELECT usuario, nome, senha 
            FROM usuarios WHERE usuario='$usu'";
            
            $busca = $banco->query($q);
            echo print_r($busca);

            if($busca->num_rows > 0){
                
                $obj_usuario = $busca->fetch_object();
                echo print_r($obj_usuario);

                //if($sen === $obj_usuario->senha){
                if(password_verify($sen, $obj_usuario->senha)){
                    echo "Login";
                }else{
                    echo "Senha Errada";
                }

            }

            require "form.php"; // para testes
        }
    
    
    ?>

    </pre>
</body>
</html>