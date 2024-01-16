<?php
// Funcao que executa ela mesmo dentro dela.

// ex: passar um numero e dividir esse numero por dois até que o numero seja 0.

function dividir($numero){
    $metade = $numero / 2;
    echo $metade."<br/>";

    if(round($metade) > 0){
        dividir($metade);
    }
}

dividir(100);