<?php

echo 'CALCULADORA ' . PHP_EOL ; echo 'DIGITE ...' ;
while (True){
    echo '' . PHP_EOL;
    echo 'PRIMEIRO NUMERO --> ' ; $Number1 = trim(fgets(STDIN));
    echo 'SEGUNDO NUMERO --> '; $Number2 = trim(fgets(STDIN));
    echo "[1]SOMA\n[2]MULTIPLICAÇÂO\n[3]DIVISÂO\n\nOque voce deseja fazer: " ; $OptionMenu= trim(fgets(STDIN));
    while (is_numeric($OptionMenu) == false || $OptionMenu > 3 || $OptionMenu < 1){
        echo 'Opção invalida... TENTE NOVAMENTE' . PHP_EOL;
        echo "[1]SOMA\n[2]MULTIPLICAÇÂO\n[3]DIVISÂO\n\nOque voce deseja fazer: " ; $OptionMenu= trim(fgets(STDIN));
    }
    if ($OptionMenu == 1){
        echo "O soma de $Number1 +  $Number2 é igual a " .  $Number1+$Number2;
    } elseif ($OptionMenu == 2 ) {
        echo "A multiplicação de $Number1 x $Number2 é igual a " . $Number1*$Number2;
    } elseif ($OptionMenu == 3) {
        echo "A Divisão entre $Number1 / $Number2 é igual a " . $Number1/$Number2;
    }
    echo PHP_EOL . "Deseja continuar\n[Y]SIM\n[N]NÃO\n"; $OptionLoop= strtoupper(trim(fgets(STDIN)));
    if ($OptionLoop[0] == 'N'){
        break;
    }
}

echo 'Obrigado por usar'
?>
