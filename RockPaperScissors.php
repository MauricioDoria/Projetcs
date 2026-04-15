<?php 
$opção  = ["PEDRA", "PAPEL", "TESOURA"];#Config IA
$ia = random_int(0,2);
if ($ia == 0){$ia='PEDRA';}elseif($ia == 1){$ia = 'PAPEL' ;}else{$ia = 'TESOURA';}
echo "'PEDRA' 'PAPEL' 'TESOURA' " ;
echo 'O que irar jogar' . PHP_EOL;$player=strtoupper((string)trim(fgets(STDIN)));
#$player = strtoupper($player);

while (in_array("$player", $opção) == false){
    echo "'PEDRA' 'PAPEL' 'TESOURA' " ;
    echo 'O que irar jogar' . PHP_EOL;$player=(string)trim(fgets(STDIN));
    $player = strtoupper($player);
}
echo '...' . PHP_EOL; sleep(2);

if($ia == $player){echo "Ambos jogaram $ia o jogo deu Empate";}
else{
    if ($ia == 'PEDRA' && $player == 'TESOURA' || $ia == 'TESOURA' && $player == 'PAPEL' || $ia == 'PAPEL' && $player == 'PEDRA'){
        echo "Voce PERDEU\n"; 
    } else{echo "Voce GANHOU\n";}
}
echo "A IA JOGOU $ia e voce jogou $player";
?>