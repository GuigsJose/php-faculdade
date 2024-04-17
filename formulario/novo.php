
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resposta animal</title>
</head>
<body>
    <h1>Animais: </h1>

    <?php 
        echo "<h2>FAVORITO:</h2>";
        echo "<h3>".$_GET['animalLegal']."</h3>";

        echo "<h2>PAIA:</h2>";
        echo "<h3>".$_GET['animalPaia']."</h3>";

        

    ?>


</body>
</html>