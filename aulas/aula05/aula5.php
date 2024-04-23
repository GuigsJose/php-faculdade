<?php 
    declare (strict_types=1);
    echo "<h1>Funções</h1>";

    function nome(){
        echo "<p>testando kakakakakak</p>";
    }

    nome();

    function criarTitulo($texto){echo "<h2>".$texto."</h2>";}

    criarTitulo("Testando funcoes");

    function titulo($texto){
        echo "<h2>#######################</h2>";
        echo "<h1>###".$texto."###</h1>";
        echo "<h2>#######################</h2>";
    }

    titulo("Exercicio 02");

    function calcularMedia($nome,$nota1,$nota2){
        $media = ($nota1 + $nota2)/2;
        if($media >= 7){
            echo "<p>O aluno {$nome} teve média: $media e foi aprovado</p>";
        }else{
            echo "<p>O aluno {$nome} não passou por um motivo ruim... não vo mostra não...{$media}";
        }
    }

    calcularMedia("Joao",9,5);
    calcularMedia("Guilherme",8,9);

    function subtrair($n1,$n2){
        $resposta = $n1 - $n2;
        return $resposta;
    }

    echo subtrair(30,20);

    function divisao(float $num1, float $num2){
        $resp = $num1 / $num2;
        echo "resposta {$num1} / {$num2} = {$resp}";
    }


    //divisao("10",2); nao funciona
    divisao(10,2);

?>

