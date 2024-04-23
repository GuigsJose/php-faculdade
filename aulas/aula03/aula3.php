<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="GET">
    <label>Digite um número</label>
    <input name= "num" type="text">
    <button type="submit">enviar</button>
</form>
</body>
</html>




<?php

    $raio = $_GET['num'];

    $area = M_PI * ($raio *$raio);
    $perimetro = 2 * M_PI * $raio;

    echo "<p>";
    echo "<br>Raio escolhido: {$raio}";
    echo "<br>Area: {$area}";
    echo "<br>perimetro {$perimetro}";
    echo "</p>";
    
    echo "<h1>Funções uteis: </h1>";
    echo "<p>Potencia: </p>".pow($raio,4);
    echo "<p>Modulo: </p>".abs($raio);
    echo "<p>Raiz quadrada: </p>".sqrt($raio);

    echo "<h3>Mini matematica</h3>";
    $a = 1;
    $b = 3;
    $c = $a + $b;

    $c = $c +5;

    $a = $a +1;
    $a += 1;
    $a++;

    $b = $b -1;
    $b -= 1;
    $b--;
    
    $var = 80;
    $var++; //incrementa depois
    ++$var; //incrementa antes

    $var = "jailson";
    $$var = 10; //jailson vale 10


?>