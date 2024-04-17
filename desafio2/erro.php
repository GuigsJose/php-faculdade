<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro</title>
</head>
<body>
    <h1>Erro no registro!</h1>
    <?php
    if (isset($_GET['campo'])) {
        echo "<p>O campo " . $_GET['campo'] . " não passou na validação.</p>";
    }
    ?>
</body>
</html>
