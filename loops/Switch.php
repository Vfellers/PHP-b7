<?php

$tipo = "foto";

// if($tipo == "foto"){
//     echo "Exibindo foto";
// }

// if($tipo == "video"){
//     echo "Exibindo video";
// }

// if($tipo == "texto"){
//     echo "Exibindo texto";
// }

switch($tipo) {
    
    case "foto":
        echo "Exibindo Foto";
    break;

    case "texto":
        echo "Exibindo Texto";
    break;

    case "video":
        echo "Exibindo Video";
    break;
}

?>