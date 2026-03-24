<?php
    //FUNCAO COM PARAMETRO E SEM RETORNO
    function calcula_quadrado($a , $b){
        $x = $a * $b;

        echo "$x <br>";
    }

     calcula_quadrado(4 , 5);
     calcula_quadrado(3 , 2);
     calcula_quadrado(5 , 1);

     echo "<hr>";

     function soma($x , $y){
        $soma = $x * $y;

        echo "A soma é: $soma <br>";
    }

    $num1 = 1;
    $num2 = 2;
    soma($num1 , $num2);

?>