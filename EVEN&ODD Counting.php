<?php 
echo 'NUMERO DE CONTAGEM: '; $number_count = trim(fgets(STDIN));
$even_number = 0;#par
$odd_number = 0;#impar
$index= 0 ;#contagem
while ($index <= $number_count) { 
    echo $index . PHP_EOL;
    if ($index % 2 == 0){$even_number++;}
    else {$odd_number++;}
    $index++;
}
$option = 5;
while ($option > 1){
    echo 'Voce deseja ver os numero [0]PARES ou [1]Impares' . PHP_EOL ; $option = trim(fgets(STDIN));

    if ($option == 0){
        echo "Entre 0 e $number_count existem $even_number numeros pares";
    } else if ($option == 1) {
        echo "Entre 0 e $number_count existem $odd_number numeros impares";
    }
}
?>
