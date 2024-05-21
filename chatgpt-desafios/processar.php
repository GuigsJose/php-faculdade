<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processar o formulario</title>
</head>
<body>
    <h2>DADOS RECEBIDOS: </h2>
    <?php 
        // if($_SERVER["REQUEST_METHOD"] == "POST"){
        //     $nome = $_POST["nome"];
        //     $email = $_POST["email"];
        //     echo "<p>Nome: $nome</p>";
        //     echo "<p>E-mail: $email</p>";
        // }

        $nome = $_POST["nome"];
        $email = $_POST["email"];

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            die("email invalido!");
        }

        $file = fopen("dados CSV", "a");
        if(!$file){
            die("erro ao abrir arquivo");
        }

        fputcsv($file, array($nome,$email));

        fclose($file);

        echo "dados salvos com sucesso";
    ?>
</body>
</html>