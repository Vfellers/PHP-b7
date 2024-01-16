<?php
//IMPLODE
$nomes = ["Victor", "Feller", "Santos"];

$nome = implode(" ", $nomes);
echo $nome;




$lista = ["nome1", "nome2", "nome3", "nome4"];

//Contar itens no array

echo count($lista);      // 4



//Comparar itens do array que se repetem

$inscritos = ["Victor", "lala", "joa", "Maria", "Mario", "jose"];
$aprovados = ["Victor", "lala", "Maria"];

$reprovados = array_diff($inscritos, $aprovados);
print_r($reprovados);                                       //Array ( [2] => joa [4] => Mario [5] => jose )




//adicionar filtros para array
$numeros = [10, 20, 24, 91, 18];

$filtrados = array_filter($numeros, function($item){                //Roda a função em cada um dos numeros do array.
    if($item < 30) {
        return true;
    } else {
        return false;
    }
});

print_r($filtrados);            //Array ( [0] => 10 [1] => 20 [2] => 24 [4] => 18 )




//Array_map -> faz qualquer tipo de alteração nos arrays, nesse caso, dobrando
$numeros = [10, 20, 24, 91, 18];

$dobrados = array_map(function($item){
    return $item * 2;
}, $numeros);

print_r($dobrados);     




//remove o ultimo item do array
array_pop($numeros);

//Remove o primeiro item
array_shift($numeros);

print_r($numeros);          //( [0] => 20 [1] => 24 [2] => 91 )




//Procurar se tem no array:
$numeros = [10, 20, 24, 91, 18];

if(in_array(91, $numeros)) {
    echo "Existe";
} else {
    echo "Não Existe";
}



//Procurar e informar posição:

$pos = array_search(91, $numeros);

echo $pos;



//Ordenar array
sort($numeros);
print_r($numeros);      //( [0] => 10 [1] => 18 [2] => 20 [3] => 24 [4] => 91 )
rsort($numeros);
print_r($numeros);      //( [0] => 91 [1] => 24 [2] => 20 [3] => 18 [4] => 10 )

// Ordenar mas manter a posiçao das chaves:
asort($numeros);
print_r($numeros);      //( [4] => 10 [3] => 18 [2] => 20 [1] => 24 [0] => 91 )
arsort($numeros);
print_r($numeros);      //( [0] => 91 [1] => 24 [2] => 20 [3] => 18 [4] => 10 )




