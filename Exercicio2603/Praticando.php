<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vasco</title>
</head>
<body>
    <p>faça um programa que calcule o fatorial de um número inteiro fornecido pelo usuário ex: 5! = 5.4.3.2.1 = 120</p>
    <form action="" method="GET">
        <label>Informe número para passar pelo fatorial</label>
        <input name= "num" type="text"><br>
        <button type="submit">Enviar</button>
    </form>

    <?php 
    
        $n = $_GET['num'];
        $fatorial = 1;
        $count =1;

        while($count <= $n)
        {
            $fatorial *= $count;
            $count++;
        }
        echo "Resultado: {$fatorial}";

       
    ?>

    

</body>
</html>

