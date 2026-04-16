<?php 
function mensagem($msg){
    print ($msg . PHP_EOL);
}
$NumberSort = random_int(0,10);
mensagem('TENTE ADVINHAR UM NUMERO DE 0 A 10') ; mensagem('Tente advinhar o numero com 5 Tentativas');
$Contagem = 1 ; 
while (true){
    
    echo "$Contagem ª TENTATIVA : " ; $tentativa = trim(fgets(STDIN));
    if(is_numeric($tentativa) and $tentativa >= 0 and $tentativa <= 10){
        if ($tentativa < 10){
            if ($tentativa == $NumberSort){
                mensagem('Você acertou o numero') ;
                break;
            }
            else{
                mensagem('Tente Novamente...');
                mensagem('Voce tem mais ' . 5-$Contagem . ' tentativas');
            $Contagem++;
            }
        }
        else {
           mensagem('O numero Digitado precisar ser menor que 10: ');
        }
        
    }
    else{
        mensagem('Numero invalido... tente novamente: ');
        echo "$Contagem ª TENTATIVA : " ; $tentativa = (int)trim(fgets(STDIN));
        $Contagem++;
    }
    if ($Contagem > 5){
        mensagem('Voce usou todas as suas chances');
        break;
    }
}
echo 'Obrigado por jogar'



?>