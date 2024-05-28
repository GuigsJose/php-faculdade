<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>

    <pre>
    <?php 
    
        require_once "banco.php";
        $q = "SELECT p.cod, p.nome, m.nome as nome_marca FROM produtos p JOIN marcas m ON p.marca= m.cod";
        $busca = $banco->query($q);
        // echo print_r($busca);
        
        // $obj = $busca->fetch_object();
        // echo print_r($obj);
        
    
    ?>
    </pre>


    <table style="width: 50%;">
        <tr>
            <th>COD</th>
            <th>PRODUTO</th>
            <th>MARCA</th>
            <th>--</th>
        </tr>
        <?php 
            while($obj = $busca->fetch_object()){
                echo "<tr>";
                echo "<td>$obj->cod</td>";
                echo "<td>$obj->nome</td>";
                echo "<td>$obj->marca</td>";
                echo "<td>editar</td>";
                echo "</tr>";
            }
        ?>
    </table>
    
</body>
</html>