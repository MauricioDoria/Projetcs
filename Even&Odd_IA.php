<?php 
#Victory === Pontos de Vitorias | Defeat = Derrotas
$Victory = 0 ; $Defeat = 0;
echo "JOGO DO PAR/IMPAR\n";
echo "Dejesa jogar: [ 1 / S ]SIM | [ 0 / N ]NÂO :  "; $Option_Menu = trim(fgets(STDIN)); #Opção do Menu

if(is_numeric($Option_Menu) == true){
    (int)$Option_Menu;
}
elseif(is_string($Option_Menu) == true){
    if(strtoupper($Option_Menu[0]) == 'S'){
        $Option_Menu = 1 ; 
    } elseif (strtoupper($Option_Menu[0]) == 'N'){
        $Option_Menu = 0 ;
    }else{
        $Option_Menu = 3 ;
        while ($Option_Menu>1){
            echo 'Tente novamente';
            echo "Dejesa jogar: [ 1 / S ]SIM | [ 0 / N ]NÂO :  "; $Option_Menu = trim(fgets(STDIN));
            if (is_string($Option_Menu) == true){
                if(strtoupper($Option_Menu[0]) == 'S'){
                    $Option_Menu = 1 ;
                }
                elseif (strtoupper($Option_Menu[0]) == 'N'){
                    $Option_Menu = 0 ;
                }
                else {
                    $Option_Menu = 3 ;
                }
            }
        }


    }
}


#machineRes == valor que a maquina recebe
$machineRes = random_int(0, 10);

#Operation | Operação
while ($Option_Menu == 1 && $Option_Menu != 0){
    
    echo "Quantos dedos voce ira colocar: " ; $dedos =(int)trim(fgets(STDIN));
    if ($dedos > 10){
        echo "Voce não pode colocar mais que 10 dedos" . PHP_EOL;
        echo 'novamente...' . PHP_EOL; echo "Quantos dedos voce ira colocar: " ; $dedos =(int)trim(fgets(STDIN));
    }
    else {
        $s = ($dedos + $machineRes)%2;
        if ($s == 0){
            $imp_par = 'Par';
        } else {
            $imp_par = 'Impar';
        }
    }
        
    #PLayer
    echo 'Voce escolhe Impar ou Par : ' ; $playerRes = trim(fgets(STDIN));
    if (strtoupper($playerRes[0]) == 'P'){
        $playerRes = 'Par';
    } elseif (strtoupper($playerRes[0]) == 'I'){
        $playerRes = 'Impar';
    }
    echo $playerRes;
    echo "\nVoce colocou $dedos e a maquina $machineRes o resultado é $imp_par " . PHP_EOL;
    if($playerRes == $imp_par){
        echo 'You Won' ; $Victory ++; 
    }else{
        echo 'You Lost' ; $Defeat ++;
    }
    echo "\nQuer jogar novamente? [1]SIM | [0]NÃO : "; $Option_Menu = $Option_Menu = trim(fgets(STDIN));
    if(is_numeric($Option_Menu) == true){
        (int)$Option_Menu;
    }
    elseif(is_string($Option_Menu) == true){
        if(strtoupper($Option_Menu[0]) == 'S'){
            $Option_Menu = 1 ; 
        } elseif (strtoupper($Option_Menu[0]) == 'N'){
            $Option_Menu = 0 ;
        }else{
            $Option_Menu = 3 ;
            while ($Option_Menu > 1){
                echo PHP_EOL . 'Voce digitou uma opção indispovel...'. PHP_EOL;
                echo "Dejesa jogar: [ 1 / S ]SIM | [0 / N]NÃO : "; $Option_Menu = trim(fgets(STDIN));
                if (is_string($Option_Menu) == true){
                    if(strtoupper($Option_Menu[0]) == 'S'){
                        $Option_Menu = 1 ;
                    }
                    elseif (strtoupper($Option_Menu[0]) == 'N'){
                        $Option_Menu = 0 ;
                    }
                    else {
                        $Option_Menu = 3 ;
                    }
                }
            }

        }
    }
}
$saldo = 0;
$saldo = $Victory - $Defeat ;
if ($saldo < 0){
    $saldo =  0; echo PHP_EOL . 'Seu Saldo foi zerado por ter mais derrotas';
}
echo "\nSeu saldo é de $saldo ...\n" ;
echo 'Obrigado por abrir este projeto';

?>