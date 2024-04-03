<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>lista de funções</h2>

    

<?php 
    function soma($num_1, $num_2,$num_3)
    {
        $soma = $num_1 + $num_2 + $num_3;
        echo $soma;
    }

    echo "soma: <br>";
    echo soma(1,2,3);

    

?>
</body>
</html>