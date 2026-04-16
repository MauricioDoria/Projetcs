<?php 
function mensagem($msg){
    print($msg . PHP_EOL);
}

mensagem('Nome do cliente: '); $client = trim(fgets(STDIN));
mensagem('Digite o Valor do produto: ') ; $product_valor = (float)trim(fgets(STDIN));
$number_itens = 1;
mensagem('Novo Produto? Sim / Não : ') ; $New_productOption = strtoupper(trim(fgets(STDIN)));


while ($New_productOption[0] != 'N' && $New_productOption[0] == 'S'){
    $number_itens++;
    echo PHP_EOL . 'Digite o Valor do proximo produto: ' ; $new_productOptionValor = (float)trim(fgets(STDIN));
    $product_valor+=$new_productOptionValor;
    mensagem('Novo Produto? Sim / Não : ') ; $New_productOption = strtoupper(trim(fgets(STDIN)));
        
}
$product_valor = (float)$product_valor ; 

mensagem('Fim de compra');

mensagem("Voce comprou $number_itens itens e ao todo sua compra deu $product_valor reais");

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
    if ($product_valor > 50){
        $product_valor= $product_valor-($product_valor * 0.15);
    } else{ 
        $product_valor = $product_valor-($product_valor * 0.10);
    }
    echo "The final value of your purchase was $product_valor ";
}

echo 'Purchase completed...' . PHP_EOL . 'Thank the customer "Thank you for your preference"' ;

?>
