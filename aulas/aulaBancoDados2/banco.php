<pre>

<?php 

    $banco = new mysqli("localhost:3307","root","","db_php_noite");
    function createOnDB($into, $value){
        global $banco;

        $q = "INSERT INTO $into VALUE $value";

        $resp = $banco->query($q);
        echo "<br> Query: $q";
        echo "<br> Resp: " . var_dump($resp);
    }


    function updateOnDB($data, $set, $where, $debug=false){
        global $banco;

        // $q = "UPDATE usuarios SET nome='$nome' WHERE usuario='$usuario'";
        $q = "UPDATE $data SET $set WHERE $where";
        $resp = $banco->query($q);
        
        if($debug){
            echo "<br> Query: $q";
            echo "<br> Resp: " . var_dump($resp);
        }
    }

    function deleteFromDB(string $data, string $where, bool $debug=false) : void {
        global $banco;

        $q = "DELETE FROM $data WHERE $where";
        $resp = $banco->query($q);

        if($debug){
            echo "<br> Query: $q";
            echo "<br> Resp: " . var_dump($resp);
        }
    }


    function criarUsuario($usuario, $nome, $senha){
        global $banco;

        // $q = "INSERT INTO usuarios(cod, usuario, nome, senha) VALUE (NULL, 'maria22', 'Maria', 'senha')";
        
        $senha = password_hash($senha, PASSWORD_DEFAULT);
        // createOnDB("usuarios(cod, usuario, nome, senha)", "(NULL, '$usuario', '$nome', '$senha')");
        $q = "INSERT INTO usuarios(cod, usuario, nome, senha) VALUE (NULL, '$usuario', '$nome', '$senha')";

        $resp = $banco->query($q);
        echo "<br> Query: $q";
        echo "<br> Resp: " . var_dump($resp);
    }

    function atualizarUsuario($usuario, $nome="", $senha="", $debug=false){
        global $banco;

        if($nome != "" && $senha != ""){
            // atualiza os dois
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
            $set = "nome='$nome', senha='$senhaHash'";
        } else if ($nome != ""){
            // atualiza só o nome
            $set = "nome='$nome'";
        } else if ($senha != ""){
            // atualiza só a senha
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
            $set = "senha='$senhaHash'";
        }
        
        // updateOnDB("usuario", $set, "usuario='$usuario'");
        $q = "UPDATE usuarios SET $set WHERE usuario='$usuario'";
        $resp = $banco->query($q);
        
        if($debug){
            echo "<br> Query: $q";
            echo "<br> Resp: " . var_dump($resp);
        }
    }

    function deletarUsuario($usuario, $debug=false){
        global $banco;

        $q = "DELETE FROM usuarios WHERE usuario='$usuario'";
        $resp = $banco->query($q);

        if($debug){
            echo "<br> Query: $q";
            echo "<br> Resp: " . var_dump($resp);
        }
    }

    //criarUsuario("clarinha_ofc", "clara", "senha");
    //criarUsuario("jhonlittle", "jhon", "password");




     //atualizarUsuario("samuka", "samuel", "12345", true);



?>
</pre>



