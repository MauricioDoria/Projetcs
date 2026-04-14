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

#Payment System | Sistema de Pagamento

echo "Qual a forma de pagamento :\n[0] Credit Card / Debit Card\n[1] Cash Payment\n[2] Store Card : "; $paymentOp = (int)trim(fgets(STDIN));

while ($paymentOp != 0 && $paymentOp != 1 && $paymentOp != 2){
    echo 'Opção INvalida';
    echo "Qual a forma de pagamento :\n[0] Credit Card / Debit Card\n[1] Cash Payment\n[2] Store Card : "; $paymentOp = (int)trim(fgets(STDIN));

}
if ($paymentOp == 0){
    echo "[0]Credit Card (6x)\n[1]Debit Card : " ; $cardOp = (int)trim(fgets(STDIN));
    if ($cardOp == 0 ){
        echo 'Opção Indisponivel';
    } elseif ($cardOp == 1) {
        echo "Opção não disponivel";
    }
}
elseif ($paymentOp == 2){
    echo "Using the store card you get 15% off on purchases over $50 and 10% off on purchases below that." . PHP_EOL;
    if ($product > 50){
        $product= $product-($product * 0.15);
    } else{ 
        $product = $product-($product * 0.10);
    }
    echo "The final value of your purchase was $product ";
}

echo 'Purchase completed...' . PHP_EOL . 'Thank the customer "Thank you for your preference"' ;

?>
