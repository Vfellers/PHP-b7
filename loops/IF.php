<?php
$idade = 40;

if($idade < 18){
    echo "Menor de Idade";
} else {
    echo "Maior de idade";
}

// (Condição) ? ResultadoPositivo : resultadoNegativo;

$resultado = ($idade < 18) ? "Menor de idade" : "Maior de idade";

$menorDeIdade = ($idade < 18) ? true : false;

?>