<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
    echo "<h1>Aula de Strings</h1>";

    function quebra(){
        echo "\n<br>\n";
    }

    $str = "vasco";

    echo $str[0];
    quebra();
    echo $str[1];
    echo $str[2];
    echo $str[3];
    echo $str[4]." da gama";

    $tamanho = strlen($str);
    quebra();
    echo $tamanho;

    for($i=0;$i<$tamanho;$i++){
        echo " -- ".$str[$i];
    }
    quebra();

    echo "<br>";
    var_dump($str);
    $heredoc = <<<vasco
        <h2> titulo maneiro </h2>
        <p>Aula de .NET estava boa</p>
        <p>Esse bloco interpreta string {$str}</p>

    vasco;
    quebra();
    echo $heredoc;

    $nowdoc = <<<'FORMULARIO1'
    <h2> titulo LEGAL </h2>
    <p>Aula de .NET estava boa</p>

    <p>esse bloco não interpreta string{$str}</p>
    FORMULARIO1;
    echo $nowdoc;


    $stringue = "banho de sol";

    echo "<br>maiusculo:".strtoupper($stringue);
    echo "<br>maiusculo:".strtolower($stringue);

    echo "<br>Nova: ".str_replace("de","vasco",$stringue);

    /*
    
    */
?>
</body>
</html>