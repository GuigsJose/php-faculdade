<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exercicio 3</h1>
<form action="" method="GET">
    <label>Digite primeiro número</label>
    <input name= "num1" type="text"><br>
    <label>Digite segundo numero</label>
    <input name= "num2"type="text"><br>
    <button type="submit">enviar</button>
</form>
   
   
<?php  
    
    echo "<h1>Exercicio 01</h1>";

    for($i = 1;$i <= 20;$i++){
        echo "{$i}<br>";
    }

    for($i = 1;$i <= 20;$i++){
        echo " ".$i;
    }

    // ex2
    echo "<h1>Exercicio 02</h1>";

    for($i = 0;$i<=50;$i++){
        if($i % 2 != 0){
            echo " ".$i;
        }
    }

    // ex3

    echo "<h1>Exercicio 03</h1>";
    
   


    //ex5

if (isset($_GET['num1']) && isset($_GET['num2'])) {

    $NUMERO1 = $_GET['num1'];
    $NUMERO2 = $_GET['num2'];

    if ($NUMERO1 >= 1 && $NUMERO1 <= 10 && $NUMERO2 >= 1 && $NUMERO2 <= 10) {

        for ($i = 1; $i <= $NUMERO2; $i++) {
            $resultado = $NUMERO1 * $i;
            echo "$NUMERO1 x $i = $resultado <br>";
        }
    } else {
        echo "Por favor, informe números entre 1 e 10.";
    }
} else {
    echo "Por favor, forneça os números via GET (num1 e num2).";
}


?>

</body>
</html>




