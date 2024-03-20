<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3 - IF</title>
</head>
<body>
<form action="" method="GET">
    <label>Digite um número</label>
    <input name= "ano" type="text">
    <button type="submit">enviar</button>

    <?php 
        $ano = $_GET['ano'];
        $idade = 2024 - $ano;
        echo "<p>Ano: {$ano} - Idade: {$idade}</p>";

        if($idade >= 18){
            echo "<p>Pode dirigir e votar! :)</p>";
        }else if($idade > 16){
            echo "<p>Pode votar mas Não pode dirigir! :(</p>";
        }else{
            echo "<p>Não pode votar e nem dirigir</p>";
        }
    
    ?>    



</body>
</html>