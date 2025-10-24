<?php 

echo "JOGO DO PAR/IMPAR\n";
echo "Dejesa jogar:\n[1]SIM\n[0]NÂO:\n "; $op = (int)trim(fgets(STDIN));

while ($op > 1){
    echo "Dejesa jogar: [1]SIM\n[0]NÂO: "; $op = (int)trim(fgets(STDIN));
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
        echo "Voce colocou $dedos e a maquina $machineRes o resultado é $imp_par " . PHP_EOL;
    }
    echo "\nQuer jogar novamente? [1]SIM\n[0]NÃO\n"; $op = $op = (int)trim(fgets(STDIN));
    while ($op > 1){
        echo 'Voce digitou uma opção indispovel...'. PHP_EOL;
        echo "Dejesa jogar: [1]SIM\n[0]NÂO: "; $op = (int)trim(fgets(STDIN));
    }
}
echo 'Obrigado por abrir este projeto';
?>
