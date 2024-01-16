<?php

// for ($numero = 0; $numero < 10; $numero++) {
//     echo $numero."<br/>";
// }

$ingredientes = [
    "Açucar",
    "Trigo",
    "Ovo",
    "Leite",
    "Fermento",
    "Chantilly"
];


foreach ($ingredientes as $ingrediente){
    echo "Item: ".$ingrediente."<br/>";
}


foreach ($ingredientes as $chave => $ingrediente){
    echo "Item ".($chave + 1).": ".$ingrediente."<br/>";
}


// LISTA no HTML

echo "<ol>";
foreach ($ingredientes as $valor){
    echo "<li>".$valor."</li>";
}
echo "</ol>";
?>