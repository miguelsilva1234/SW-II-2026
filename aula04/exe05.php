<?php
    //TRABALHANDO COM ARRAYS
    function mostra_array($vetor){
      foreach ($vetor as $valor) {
        echo $valor . "<br>";
      }  
      echo "<hr>";
    }

    $numeros = [1,2,3,4,5];
    $numeros2 = [10,20,30,40,50];
    $nomes = ['fulano','beltrano','ciclano'];

    echo mostra_array($numeros);
    echo mostra_array($numeros2);
    echo mostra_array($nomes);
   
?>