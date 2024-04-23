<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

   
    <div class="titulo-um">
   <center> <h2>Formulario</h2></center>
   </div>
    <div class="formulario-um">
    <center><form method="get">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome"><br>

        <label for="nome">Email:</label><br>
        <input type="email" name="email" id="email"><br>

        <label for="cpf">CPF:</label><br>
        <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00"><br>

        <label for="data">Data de Nascimento</label><br>
        <input type="date" name="data" id="data"><br>

        <label for="cor_fundo">Escolha uma Cor</label>
        <input type="color" name="cor_fundo" id="cor_fundo"><br>
        <input type="submit" value="Enviar">
    </form>
    </center>
    </div>
    

    <?php 
        if(isset($_GET['cor_fundo']))
        {
            $cor = $_GET['cor_fundo'];
            echo "<style> .formulario-um{ background-color: $cor}</style>"; 
        }
    ?>
</body>
</html>