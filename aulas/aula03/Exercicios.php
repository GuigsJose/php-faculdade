<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="GET">
    <label>Digite primeiro número</label>
    <input name= "num1" type="text"><br>
    <label>Digite segundo numero</label>
    <input name= "num2"type="text"><br>
    <button type="submit">enviar</button>
   
   
<?php 

// ex1
    $num1 = $_GET['num1'];
    echo "<br>numero 1: {$num1}";
    $num2 = $_GET['num2'];
    echo "<br>numero 2: {$num2}";
    
    echo "<br>Maior número: ";
    if($num1 > $num2){
        echo "<br>{$num1}<br>";
    }else{
        echo "<br>{$num2}";
    }
    


?>
</body>
</html>




