<?php

$n1 = 4;
$n2 = 5;
$n3 = 6;

$media = ($n1 + $n2 + $n3) / 3;

if ($media>5) {
    echo "APROVADO com media: $media";
}else {
    if ($media<4) {
        echo "REPROVADO com media: $media";
    }else {
        echo "RECUPERACAO com media: $media";
    }
}

?>