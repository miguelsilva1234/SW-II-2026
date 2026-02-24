<?php
    $dia = 8;

    switch ($dia) {
        case 1:
            echo "DOMINGO";
            break;
        case 2:
            echo "SEGUNDA";
            break;
        case 3:
            echo "TERCA";
            break;
        case 4:
            echo "QUARTA";
            break;
        case 5:
            echo "QUINTA";
            break;
        case 6:
            echo "SEXTA";
            break;
        case 7:
            echo "SABADO";
            break;

        default:
            echo "DIA INVALIDO";
            break;
    }

    echo "<hr>";

    //LACOS DE REPETICAO

    for ($i=1; $i < 11; $i++) { 
        echo "$i - ";
    }

    echo "<hr>";

    $a = 1;
    while ($a <= 10) {
        echo "$a - ";
        $a++;
    }

    echo "<hr>";

    $b = 1;
    do {
        echo "$b - ";
        $b++;  
    } while ($b <= 10);

    echo "<HR>";

    $nomes = ['Fulano' , 'Ciclado' , 'Beltrano'];

    foreach ($nomes as $nome) {
        echo "O nome é: $nome <br>";
    }


?>