<?php

$cond = 4 ;
echo 'CALCULADORA ' . PHP_EOL ; echo 'DIGITE ...' ;
while ($cond != 0 ){
    echo '' . PHP_EOL;
    echo 'PRIMEIRO NUMERO --> ' ; $n1 = trim(fgets(STDIN));
    echo 'SEGUNDO NUMERO --> '; $n2 = trim(fgets(STDIN));
    echo "[1]SOMA\n[2]MULTIPLICAÇÂO\n[3]DIVISÂO\n\nOque voce deseja fazer: " ; $cond = trim(fgets(STDIN));
    if ($cond == 1){
        echo "O soma de $n1 +  $n2 é igual a " .  $n1+$n2;
    } elseif ($cond == 2 ) {
        echo "A multiplicação de $n1 x $n2 é igual a " . $n1*$n2;
    } elseif ($cond == 3) {
        echo "A Divisão entre $n1 / $n2 é igual a " . $n1/$n2;
    } else{
        $cond = 0;
    }
    echo PHP_EOL . "Deseja continuar\n[1]SIM\n[0]NÃO\n"; $cond = trim(fgets(STDIN));
}

echo 'Obrigado por usar'
?>
