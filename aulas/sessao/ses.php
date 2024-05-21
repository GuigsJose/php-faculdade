<?php 

    session_start();

    $_SESSION["nome"] = "Guilherme";
    $_SESSION["idade"] = 20;

    $_SESSION["pessoa"] = [
        "nome" => "jose",
        "idade" => 20
    ];
    

?>