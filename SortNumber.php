<?php 
function mensagem($msg){
    print ($msg . PHP_EOL);
}
$NumberSort = random_int(0,10);
echo 'TENTE ADVINHAR UM NUMERO DE 0 A 10' . PHP_EOL;
echo 'Tente advinhar o numero com 5 Tentativas' . PHP_EOL;
$Contagem = 1 ; 
while (true){
    
    echo "$Contagem ª TENTATIVA : " ; $tentativa = trim(fgets(STDIN));
    if(is_numeric($tentativa) and $tentativa >= 0 and $tentativa <= 10){
        if ($tentativa < 10){
            if ($tentativa == $NumberSort){
                echo 'Você acertou o numero' . PHP_EOL ;
                break;
            }
            else{
                echo 'Tente Novamente...' .PHP_EOL;
                echo 'Voce tem mais ' . 5-$Contagem . ' tentativas' . PHP_EOL;
            $Contagem++;
            }
        }
        else {
            echo "\nO numero Digitado precisar ser menor que 10: " . PHP_EOL;
        }
        
    }
    else{
        echo 'Numero invalido... tente novamente: ' . PHP_EOL;
        echo "$Contagem ª TENTATIVA : " ; $tentativa = (int)trim(fgets(STDIN));
        $Contagem++;
    }
    if ($Contagem > 5){
        echo 'Voce usou todas as suas chances' . PHP_EOL;
        break;
    }
}
echo 'Obrigado por jogar'



?>