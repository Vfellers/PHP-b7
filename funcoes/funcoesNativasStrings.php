<?php
//Remover espaçoes extras:

$nomeSujo = "      Victor     ";
echo $nomeLimpo = trim($nomeSujo);


//Conta quantos caracteres tem
echo strlen($nomeSujo);             //17
echo strlen($nomeLimpo);            //6



//Letra minusculas e maiusculas
$nome = "Victor Feller";

echo strtolower($nome);
echo strtoupper($nome);



//Substituir palavra ou caractere

$nomeAlterado = str_replace("Victor", "Vito", $nome);     //str_replace("O que alterar", "para o que", $deOnde);

$nomeAlterado = str_replace("i", "1", $nome);

echo $nomeAlterado;



//Primeira letra maiuscula
$nome = "victor";
echo ucfirst($nome);



//Transformar em array EXPLODE
$nome = "Victor Feller Dos Santos";

$nomes = explode (" ", $nome);
print_r($nomes);                    // ( [0] => Victor [1] => Feller [2] => Dos [3] => Santos )



//Formatar numeros:

$numero = 12913.12;

echo number_format($numero, 2, ",", ".");    //($Variavel, quantas casas decimais, "separar decimais", "separar milhares")   12.913,12