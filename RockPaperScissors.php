<?php 
$opção  = ["PEDRA", "PAPEL", "TESOURA"];#Config IA
$ia = random_int(0,2);
if ($ia == 0){$ia='PEDRA';}elseif($ia == 1){$ia = 'PAPEL' ;}else{$ia = 'TESOURA';}

echo 'O que irar jogar' . PHP_EOL;($player=(string)trim(fgets(STDIN)));
$player = strtoupper($player);

while (in_array("$player", $opção) == false){
    echo 'O que irar jogar' . PHP_EOL;$player=(string)trim(fgets(STDIN));
    $player = strtoupper($player);
}
echo 'tudo certo' . PHP_EOL; sleep(2);

if($ia == $player){echo "Ambos jogaram $ia o jogo deu Empate";}
else{
    if ($ia == 'PEDRA' and $player == 'TESOURA' or $ia == 'TESOURA' and $player == 'PAPEL' or $ia == 'PAPEL' and $player == 'PEDRA'){
        echo "Voce PERDEU\n"; 
    } else{echo "Voce GANHOU";}
}
echo "A IA JOGOU $ia e voce jogou $player";
?>