<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>lista de funções</h2>

<p>Exercicio 1</p>
<?php 
    function soma($num_1, $num_2,$num_3)
    {
        $soma = $num_1 + $num_2 + $num_3;
        echo $soma;
    }

    echo "soma: <br>";
    echo soma(1,2,3);
?>

<p>Exercicio 02</p>

<?php 
    function dataExtenso($data)
    {
        $partes = explode('/',$data);
        $dia = $partes[0];
        $mes = $partes[1];
        $ano = $partes[2];

        $mesesPorExtenso = [
            '01' => 'Janeiro',
            '02' => 'Fevereiro',
            '03' => 'Março',
            '04' => 'Abril',
            '05' => 'Maio',
            '06' => 'Junho',
            '07' => 'Julho',
            '08' => 'Agosto',
            '09' => 'Setembro',
            '10' => 'Outubro',
            '11' => 'Novembro',
            '12' => 'Dezembro'
        ];

        $mesExtenso = $mesesPorExtenso[$mes];

        $dataPorExtenso = $dia. ' de ' .$mesExtenso. ' de '.$ano;

        return $dataPorExtenso;
    }

    echo dataExtenso('10/02/2023');

?>
</body>
</html>