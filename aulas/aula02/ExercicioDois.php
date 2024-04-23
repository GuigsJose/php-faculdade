<?php
    //1. Faça um script que peça um número e então mostre a mensagem “O número
//informado foi [número]”
    $num = 3;
    echo "<h1>Numero informado foi: {$num}</h1>";

    //. Escreva um script que pede o raio de um círculo, e em seguida exiba o
    //perímetro e área do círculo. Obs. procure por M_PI

    echo "<h1>Informe o raio de um circulo: </h1>";
    $raioCirculo = 5;
    $perimetro = (2 * 3.1415 * $raioCirculo);
    $area = (3.1415 * $raioCirculo * $raioCirculo);

    echo "<h2>perímetro: {$perimetro}</h2>";
    echo "<h2>Área: {$area}</h2>";

    //3. Faça um script que peça dois números e imprima a soma.

    echo "<h2>Informe Primeiro número: </h2>";
    $num1 = 4;
    echo "<h3>{$num1}</h3>";
    echo "<h2>Informe Segundo número: </h2>";
    $num2 = 4;
    echo "<h3>{$num1}</h3>";
    $soma = $num1 + $num2;

    echo "<h2>Soma: {$soma}</h2>";

    //4. Faça um script que peça 3 notas de um aluno e mostre sua média
    echo "<h2>Informe primeira nota:</h2>";
    $nota1 = 5;
    echo "<h3>{$nota1}";
    echo "<h2>Informe segunda nota:</h2>";
    $nota2 = 9;
    echo "<h3>{$nota2}";
    echo "<h2>Informe terceira nota:</h2>";
    $nota3 = 6;
    echo "<h3>{$nota3}";

    $media = ($nota1 + $nota2 + $nota3) / 3;

    echo "<h2>Sua média é: {$media}</h2>";

    //5. Faça um script que converta metros para centímetros

    echo "<h2>Informe quantos metros para conversão: </h2>";
    $metros = 50;
    echo "<h3>{$metros}</h3>";

    $metrosParaCentimetros = $metros * 100;

    echo "<h2>De {$metros} metros foi para {$metrosParaCentimetros} centimetros</h2>";

    //6. Faça um script que calcule a área de um quadrado, em seguida mostre o
   //dobro desta área para o usuário

    echo "<h2>Informe os lados do quadrado: </h2>";
    $quadrado1 = 5;
    echo "<h3>{$quadrado1}</h3>";

    $areaQuadrado = $quadrado1 * $quadrado1;
    $dobroQuadrado = $areaQuadrado *2;

    echo "<h2>Area do quadrado: {$areaQuadrado}</h2>";
    echo "<h2>Area do quadrado em dobro: {$dobroQuadrado}</h2>";

    //7. Faça um script que pergunte quanto você ganha por hora e o número de
    //horas trabalhadas no mês. Calcule e mostre o total do seu salário no referido
    //mês.

    echo "<h2>informe o quando você ganha por hora:</h2>";
    $horaGanho = 8.10;
    echo "<h3>{$horaGanho}</h3>";
    
    echo "<h2>informe quantas horas trabalhou no mês</h2>";
    $diasTrabalhados = 111.5;
    echo "<h3>{$diasTrabalhados}</h3>";

    $calculoMes = $horaGanho * $diasTrabalhados;

    echo "<h2>Você receberá: {$calculoMes}</h2>";

    //8. Faça um script que peça a temperatura em graus Fahrenheit, transforme e
    //mostre a temperatura em graus Celsius. C = (5 * (F-32) / 9).
    
    echo "<h2>Informe a temperatura em Fahrenheit: </h2>";  
    $tempFahrenheit = 90;
    echo "<h3>{$tempFahrenheit}</h3>";

    $tempCelcius = (5*($tempFahrenheit - 32)/9);

    echo "<h2>temperatura em celcius: {$tempCelcius}</h2>";



//9. Faça um script que peça a temperatura em graus Celsius, transforme e
//mostre em graus Fahrenheit

    echo "<h2>Informe temperatura em Celcius: </h2>";
    $celciusGrau = 30;

    echo "<h3>{$celciusGrau}</h3>";

    $fahrenheitGrau = $celciusGrau * 1.8 + 32;

    echo "<h2>Temperatura em Fahrenheit: {$fahrenheitGrau}</h2>";






?>