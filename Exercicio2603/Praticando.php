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
    <hr>

    <p>Em uma competição de salto em distância cada atleta tem direito a cinco saltos.
        O resultado do atleta é determinado pela média dos cinco valores(saltos). Você
        deve fazer um programa que tenha o nome e as cinco distâncias alcançadas pelo 
        atleta em seus saltos e depois informe o nome, os saltos e a média: EXEMPLO
    </p>
    
    <ul>
        <li>Atleta: Rodrigo Carvello</li>

        <li>Primeiro Salto</li>
        <li>Segundo Salto</li>
        <li>Terceiro Salto</li>
        <li>Quarto Salto</li>
        <li>Quinto Salto</li>
    </ul>
       
    <ul>
        <li>Resultado Final:</li>
        <li>Atleta: nome</li>
        <li>saltos: todos os saltos</li>
        <li>média de saltos: média</li>
    </ul>
    <hr>

    <form action="" method="GET">
        <label>Atleta:</label>
        <input name="nome_a" type="text"><br>

        <label>Primeiro Salto:</label>
        <input name="1_salto" type="text"><br>

        <label>Segundo Salto:</label>
        <input name="2_salto" type="text"><br>

        <label>Terceiro Salto:</label>
        <input name="3_salto" type="text"><br>

        <label>Quarto Salto:</label>
        <input name="4_salto" type="text"><br>

        <label>Quinto Salto:</label>
        <input name="5_salto" type="text"><br>

        <button type="submit">Enviar</button>

    </form>
    
    <?php 
        $nome = $_GET['nome_a'];
        $primeiro_s= $_GET['1_salto'];
        $segundo_s= $_GET['2_salto'];
        $terceiro_s = $_GET['3_salto'];
        $quarto_s = $_GET['4_salto'];
        $quinto_s = $_GET['5_salto'];

        $media = ($primeiro_s + $segundo_s + $terceiro_s + $quarto_s + $quinto_s) / 5.0;

        echo "<h3>Resultado Final</h3>";
        echo "Atleta: {$nome}<br>";
        echo "Saltos: {$primeiro_s} - {$segundo_s} - {$terceiro_s} - {$quarto_s} - {$quinto_s}<br>";
        echo "Média dos saltos: {$media} m";
    ?>

</body>
</html>

