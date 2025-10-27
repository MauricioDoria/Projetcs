<?php 

$NumberSort = random_int(0,10);

echo 'Tente advinhar o numero com 5 Tentativas' . PHP_EOL;
$cont = 1 ; 
while (true){
    
    echo "$cont ª TENTATIVA : " ; $tentativa = trim(fgets(STDIN));
    if(is_numeric($tentativa)){
        if ($tentativa < 10){
            if ($tentativa == $NumberSort){
                echo 'Você acertou o numero' . PHP_EOL ;
                break;
            }
            else{
                echo 'Tente Novamente...' .PHP_EOL;
                echo 'Voce tem mais ' . 5-$cont . ' tentativas' . PHP_EOL;
            $cont++;
            }
        }
        else{
            echo "\nO numero Digitado precisar ser maior menor que 10: " . PHP_EOL;
        }
        
    }
    else{
        echo 'Numero invalido... tente novamente: ' . PHP_EOL;
        echo "$cont ª TENTATIVA : " ; $tentativa = (int)trim(fgets(STDIN));
    }
    if ($cont > 5){
        echo 'Voce usou todas as suas chances' . PHP_EOL;
        break;
    }
}
echo 'Obrigado por jogar'



?>