<?php 

    $usuarios = [
        ["usu" => "samuka", "nome" => "samuel", "senha" => "123"],
        ["usu" => "bixxcoito", "nome" => "henrique", "senha" => "abc"],
        ["usu" => "pedro_37", "nome" => "pedro", "senha" => "A@$37"]
    ];

    
    function verUsuarios($usr, $sen){
        global $usuarios;
        // echo $usr . " -- " . $sen;
        // echo "<br> Vendo usuarios -- ";
        for ($i=0; $i < 3; $i++) { 
            // echo "<br>" . print_r($usuarios[$i]);
            if($usr == $usuarios[$i]['usu']){
                // echo "usuario igual -- ";
                if($sen == $usuarios[$i]['senha']){
                    // echo "senha igual -- ";
                    return true;
                }else {
                    // echo "senha não -- ";
                }
            }

        }
        return false;
    }


    // verUsuarios("bixxcoito", "123");

?>