<?php
$nome = "Victor";
$sobrenome = "Feller";





$nomeCompleto = $nome;
$nomeCompleto .= isset($sobrenome) ? $sobrenome : "";     //Se a variavel sobrenome existir, pega o que esta nela, senao "", poe nada  
// .= serve para adicionar vai sair VictoFeller ao invés de substituir


$nomeCompleto .= $sobrenome ?? "";                       //Mesma coisa ali de cima, mas simplificado com o ??

echo $nomeCompleto;
?>