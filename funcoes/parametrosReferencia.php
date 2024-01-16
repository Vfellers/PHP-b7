<?php
    function somar($n1, $n2, &$total){              //& manda a variavel e nao o valor
        $n1=10;
        $n2=15;
        $total = $n1 + $n2;
    }


    $x = 3;
    $y = 2;
    $soma = 0;

   somar($x, $y, $soma);

    echo $x." + ".$y." = ".$soma;                   //3 + 2 = 25     o valor de n1 e n2 nao foi alterado na variavel &$total, ela esta como 10 + 15



    
?>