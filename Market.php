<?php 
$Vtotal = 0;
$list = [
    'feijão' => 5.50,
    'arroz' => 7,
    'cebola' => 2.50,
    'tomate' => 3,
    'café' => 8.90,
    'oleo'=> 6.30,
    'macarrão' => 2.90,
    'leite' => 3.80,
    'pão' => 4,
    'açucar' => 4.20 
];
while (True){
    echo 'Qual Produto: ';$product = strtolower(trim(fgets(STDIN)));

    if ($list[$product] == true){
        echo PHP_EOL . 'Esta em';
        $Vtotal += $list[$product];
    }
    else {
        echo PHP_EOL. 'Não esta em';
    }
    echo "\nPARAR [s]";$option = strtoupper(trim(fgets(STDIN)));
    if ($option[0] == 'S'){
        break;
    }
    echo "\n$Vtotal";
}





?>