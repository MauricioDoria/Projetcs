<?php 
$pointV = 0 ; $pointD = 0;
echo "JOGO DO PAR/IMPAR\n";
echo "Dejesa jogar: [ 1 / S ]SIM | [ 0 / N ]NÂO :  "; $op = trim(fgets(STDIN));
if(is_numeric($op)){
    (int)$op;
}
elseif(is_string($op)){
    if(strtoupper($op[0]) == 'S'){
        $op = 1 ; 
    } elseif (strtoupper($op[0]) == 'N'){
        $op = 0 ;
    }else{
        $op = 3 ;
        while ($op>1){
            echo 'Tente novamente';
            echo "Dejesa jogar: [ 1 / S ]SIM | [ 0 / N ]NÂO :  "; $op = trim(fgets(STDIN));
            if (is_string($op)){
                if(strtoupper($op[0]) == 'S'){
                    $op = 1 ;
                }
                elseif (strtoupper($op[0]) == 'N'){
                    $op = 0 ;
                }
                else {
                    $op = 3 ;
                }
            }
        }


    }
}


#machineRes == valor que a maquina recebe
$machineRes = random_int(0, 10);

#Operation | Operação
while ($op == 1 and $op != 0){
    
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
    echo "Voce colocou $dedos e a maquina $machineRes o resultado é $imp_par " . PHP_EOL;
    if($playerRes == $imp_par){
        echo 'You Won' ; $pointV ++; 
    }else{
        echo 'You Lost' ; $pointD ++;
    }
    echo "\nQuer jogar novamente? [1]SIM | [0]NÃO : "; $op = $op = (int)trim(fgets(STDIN));
    if(is_numeric($op)){
        (int)$op;
    }
    elseif(is_string($op)){
        if(strtoupper($op[0]) == 'S'){
            $op = 1 ; 
        } elseif (strtoupper($op[0]) == 'N'){
            $op = 0 ;
        }else{
            $op = 3 ;
            while ($op > 1){
                echo 'Voce digitou uma opção indispovel...'. PHP_EOL;
                echo "Dejesa jogar: [ 1 / S ]SIM | [0 / N]NÃO : "; $op = (int)trim(fgets(STDIN));
                if (is_string($op)){
                    if(strtoupper($op[0]) == 'S'){
                        $op = 1 ;
                    }
                    elseif (strtoupper($op[0]) == 'N'){
                        $op = 0 ;
                    }
                    else {
                        $op = 3 ;
                    }
                }
            }

        }
    }
}
$saldo = 0;
$saldo = $pointV - $pointD ;
if ($saldo < 0){
    $saldo =  0; echo ' Seu Saldo foi zerado por ter mais derrotas';
}
echo "Seu saldo é de $saldo ...\n" ;
echo 'Obrigado por abrir este projeto';

?>