<?php 
$cadastro = [];

echo "---CADASTRANDO UM ALUNO---\n" ; 

while (true){
    echo 'Aluno: ' ; $pessoa["aluno"] = trim(fgets(STDIN));
    echo'informação do Aluno: ' . PHP_EOL .  $pessoa["aluno"] . PHP_EOL ;
    echo "Classe do Aluno: "; $class = trim(fgets(STDIN));
    echo "Idade do Aluno: " ; $idd = (int)trim(fgets(STDIN));
    $cadastro[$pessoa["aluno"]] = [
        "nome" => $pessoa["aluno"],
        "idade" => $idd,
        "Classe" => $class
    ];

    echo "Deseja cadastrar um novo aluno: [S] | [N] " ; $op = trim(fgets(STDIN));
    if (is_string($op)){
        if (strtoupper($op) == 'N'){
            break;
        }
        else {
            continue;
        }
    } else {
        echo "Deseja cadastrar um novo aluno: [S] | [N] " ; $op = trim(fgets(STDIN));
    }
}


print_r($cadastro);
?>