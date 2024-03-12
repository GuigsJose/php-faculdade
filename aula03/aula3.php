<?php

    $raio = 3;

    $area = M_PI * ($raio *$raio);
    $perimetro = 2 * M_PI * $raio;

    echo "<p>";
    echo "<br>Raio escolhido: {$raio}";
    echo "<br>Area: {$number_format($area,2)}";
    echo "<br>perimetro {$perimetro}";
    echo "</p>";

?>