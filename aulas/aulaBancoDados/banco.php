<pre>

<?php 

    $banco = new mysqli("localhost:3307","root","","db_php_noite");
   /* 
    echo print_r($banco);

    echo "<br>------------------<br>";
    $busca = $banco->query("SELECT * FROM usuarios");
    echo print_r($busca);

    echo "<br>------------------<br>";
    // $obj = $busca->fetch_object();
    // echo print_r($obj);

    // $obj = $busca->fetch_object();
    // echo print_r($obj);

    while($obj = $busca->fetch_object()){
        echo print_r($obj);
    }
    echo "<br>------------------<br>";
    $busca = $banco->query("SELECT cod,usuario,nome,senha FROM usuarios WHERE usuario='samuka'");
    $obj = $busca->fetch_object();
    echo print_r($obj);

    echo "<br> Co:" .$obj->cod;
    echo "<br> Us:" .$obj->usuario;
    echo "<br> No:" .$obj->nome;
    echo "<br> Se:" .$obj->senha;
    */
    function createOnDb($into,$value){
        global $banco;
        $q = "INTERT INTO $into VALUE $value";

        $resp = $banco->query($q);
        echo "<br>Query: $q";
        echo "<br>Rep: ".var_dump($resp);
    }

    



    //echo password_hash("123", PASSWORD_DEFAULT);
    function criarUsuario($usuario,$nome,$senha){
    global $banco;
        // $q = "INSERT INTO usuarios (cod,usuario,nome,senha) VALUE (NULL, 'maria22', 'Maria', 'senha')";
        $senha = password_hash($senha, PASSWORD_DEFAULT);
        // chamar a create on db
        $q = "INSERT INTO usuarios (cod,usuario,nome,senha) VALUE (NULL, '$usuario', '$nome', '$senha')";

        $resp = $banco->query($q);
        echo "<br>Query: $q";
        echo "<br>Rep: ".var_dump($resp);
    }
    // criarUsuario("vasco_maluco", "vasco", "senha");
    // criarUsuario("shaolin", "joao", "password"); 

    function atualizarUsuario($usuario,$nome="",$senha=""){
        global $banco;

        if($nome != "" && $senha != ""){
            //os dois
            $senhaH = password_hash('senha', PASSWORD_DEFAULT);
            $set = "nome='$nome', senha='$senha'";
        }else if($nome != ""){
            // somente nome
            $set = "nome='$nome'";
        }else if($senha != ""){
            // somente senha 
            $senhaH = password_hash('senha', PASSWORD_DEFAULT);
            $set = "senha='$senhaH'";
        }


     
        $q = "UPDATE usuarios SET senha='$senhaH' where usuario='$usuario','$nome','$senha'";
        $resp = $banco->query($q);
        echo "<br>Query: $q";
        echo "<br>Rep: ".var_dump($resp);
    }

    /*$senha = password_hash('senha', PASSWORD_DEFAULT);
    $q = "UPDATE usuarios SET senha='$senha' where usuario='maria22'";
    $resp = $banco->query($q);
        echo "<br>Query: $q";
        echo "<br>Rep: ".var_dump($resp);*/

    function deletarUsuario($usuario){
        global $banco;

        $q = "DELETE FROM usuarios WHERE usuario='$usuario'";
            $resp = $banco->query($q);
            echo "<br>Query: $q";
            echo "<br>Rep: ".var_dump($resp);
    }

    //    $q = "DELETE FROM usuarios WHERE usuario='shaolin'";
    //     $resp = $banco->query($q);
    //     echo "<br>Query: $q";
    //     echo "<br>Rep: ".var_dump($resp);

    atualizarUsuario("samuka", "samuel","12345")

?>
</pre>



