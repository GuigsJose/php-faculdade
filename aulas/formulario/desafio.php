<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="">
        <input type="text" name="formulario">
    </form>

<?php 
$inputs = array("Nome", "Sobrenome", "Email");
            
for($i = 0; $i < 3; $i++) {
    
    echo "<span>{$inputs[$i]} </span>" . "<input type='text' name='input_ placeholder='{$inputs[$i]}'" . $i . "'><br>";
    
}




echo "HAHHAHAHAH";
function form($campos) {
    foreach ($campos as $campo) {
        echo '<label>' . ucfirst($campo) . ':</label>';
        echo '<input type="text" name="' . $campo . '"><br>';
    }
}

$form = array("nome", "email", "senha", "idade");
form($form);
?>
</body>
</html>




<?php 
 
 function formulario($formulario = array()){

 }

?>