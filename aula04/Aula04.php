<?php

    echo "<h1>for, while, dowhile</h1>";

    for($i = 0;$i<=10; $i++){
        echo "<br> Meu FOR FUNCIONA: {$i}";
    }

    for($i = 0; $i<10; $i++){
        echo "<br>   Linha: {$i}";
            for($j = 0;$j<10;$j++){
                echo " -Coluna: {$j}";
            }
    }

    

?>