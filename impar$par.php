<?php 
echo 'quantos até quando deseja contar : '; $cont = trim(fgets(STDIN));
$par = 0;
$impar = 0;
$i= 0 ;
while ($i <= $cont) { 
    echo $i . PHP_EOL;
    if ($i % 2 == 0){$par++;}
    else {$impar++;}
    $i++;
}
$op = 5;
while ($op > 1){
    echo 'Voce deseja ver os numero [0]PARES ou [1]Impares' . PHP_EOL ; $op = trim(fgets(STDIN));

    if ($op == 0){
        echo "Entre 0 e $cont existem $par numeros pares";
    } else if ($op == 1) {
        echo "Entre 0 e $count existem $impar numeros impares";
    }
}
?>