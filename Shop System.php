<?php 
echo 'Nome do cliente: '; $client = trim(fgets(STDIN));

echo 'Digite o Valor do produto: ' ; $product = (float)trim(fgets(STDIN));
$itens = 1;
echo "\nNovo Produto? Sim / Não : " . PHP_EOL ; $prodplus = strtoupper(trim(fgets(STDIN)));


while ($prodplus[0] != 'N' and $prodplus[0] == 'S'){
    $itens++;
    echo PHP_EOL . 'Digite o Valor do proximo produto: ' ; $productpro = (float)trim(fgets(STDIN));
    $product+=$productpro;
    echo 'Novo Produto? Sim / Não : ' . PHP_EOL ; $prodplus = strtoupper(trim(fgets(STDIN)));
        
}
$product = (float)$product ; 


echo 'Fim de compra' . PHP_EOL;
echo "Voce comprou $itens itens e ao todo sua compra deu $product reais";

$prodplus = 's';
?>
