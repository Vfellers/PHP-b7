<?php

// Valor absoluto (transformar positivo)
$numero = -8.4;     
echo abs($numero);          //8.4



// arredondar para baixo
$numero = 5.7564;      
echo floor($numero);        // 5



// Arrendodar pra cima
echo ceil($numero);         // 6



// Arredondar Automatico
echo round($numero, 2);        // 5,76      (o 2 significa duas casas decimais)



//Gerar numero aleatorio
echo $aleatorio = rand(1, 10);   // Vai trazer sempre um numero aleatorio entre 1 e 10.

 

// Maior e menor numero
$lista = [1, 4, 6, 7];

echo min($lista);             //1
echo max($lista);             //7  