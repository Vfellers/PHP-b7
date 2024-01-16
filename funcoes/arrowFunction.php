<?php

// Fazer essa funcaoem uma linha só:

// $dizimo = function( $valor ){
//     return $valor * 0.1;
// };

// echo $dizimo(90);

//ArrowFunction:


$dizimo = fn($valor) => $valor * 0.1;

echo $dizimo(120);

$somar = fn($n1, $n2) => $n1 + $n2;