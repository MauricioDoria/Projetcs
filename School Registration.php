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
        "Classe" => $class,
        "Media" => 0
    ];

    echo "Deseja cadastrar um novo aluno: [S] | [N] " ; $op = trim(fgets(STDIN));
    if (is_string($op)){
        if (strtoupper($op) == 'N'){
            break;
        }
        elseif(strtoupper($op) == 'S'){
            continue;
        }
        else{
            echo 'Texto Invalido: ';
            echo "Deseja cadastrar um novo aluno: [S] | [N] " ; $op = trim(fgets(STDIN));
        }
    } else {
        echo 'Texto Invalido: ';
        echo "Deseja cadastrar um novo aluno: [S] | [N] " ; $op = trim(fgets(STDIN));
        if (strtoupper($op[0]) == 'N' || strtoupper($op[0]) != 'S'){
            break;
        }
    }
}

echo "Adicionar MEDIA a aluno: [S] | [N] " ; $op = trim(fgets(STDIN));

if (is_string($op)){
    if (strtoupper($op) == 'S'){
        echo 'Qual Aluno deseja fazer esta alteração: '; $alunomedia=trim(fgets(STDIN));
        if (!isset($cadastro[$alunomedia])){
            echo "Erro. FECHANDO PROGRAMA";
        } else {
                $nota = 0;
                echo 'Digite todas as notas do aluno: ' . PHP_EOL; $media=1;
                echo "Nota $media: " ;$n=(float)trim(fgets(STDIN));
                echo 'MAIS UMA NOTA: [S] | [N] ' ; $op = trim(fgets(STDIN));
                if(is_string($op)){
                    if (strtoupper($op[0]) != 'S' && strtoupper($op[0]) != 'N'){
                        echo 'MAIS UMA NOTA: [S] | [N] ' ; $op = trim(fgets(STDIN));
                    }
                    elseif (strtoupper($op[0]) == 'S') {
                        while (strtoupper($op) != 'N'){
                            $media++;
                            echo "Nota $media: " ;$n=(float)trim(fgets(STDIN));
                            $nota+=$n;
                            
                            echo 'MAIS UMA NOTA: [S] | [N] ' ; $op = trim(fgets(STDIN));
                            if(is_string($op)){
                                if (strtoupper($op[0]) == 'N'){
                                    unset($n);
                                    $n = $media;
                                    $media = $nota/$n;

                                    $cadastro[$alunomedia]['Media'] = $media;
                                    break;
                                } elseif(strtoupper($op[0]) == 'S'){
                                    continue;
                                }
                                else{
                                    echo 'MAIS UMA NOTA: [S] | [N] ' ; $op = trim(fgets(STDIN));
                                }
                            }

                        }
                    }
                    else {
                        echo 'ERRO NO PROGRAMA';
                        unset($nota, $media, $n);
                    }
                }
            
        }

        }
        elseif(strtoupper($op) == 'N'){
            echo 'OK';
        }
        else{
            echo 'Texto Invalido: ';
            echo "Adicionar MEDIA a aluno [S] | [N]  " ; $op = trim(fgets(STDIN));
        }
}else{
    echo 'Texto Invalido: ' ; 
    echo "Adicionar MEDIA a aluno [S] | [N] " ; $op = trim(fgets(STDIN)); 
}
unset($alunomedia);
#Verificar e Retornar valor:
echo 'Consulta de Aluno especifico [S] | [N] : ' ; $op = trim(fgets(STDIN));
if(is_string($op)){
    if (strtoupper($op[0]) == 'S'){
        echo 'Nome do Aluno : ' ; $alunomedia = trim(fgets(STDIN));
        if (!isset($cadastro[$alunomedia])){
            echo "O Aluno $alunomedia  não existe";    
        } else {
            foreach ($cadastro[$alunomedia] as $chave => $value) {
                echo ucfirst($chave) . " : " . $value . PHP_EOL;
            }
        }
    } elseif(strtoupper($op[0]) == 'N'){
        echo PHP_EOL . "--- LISTA DE ALUNOS ---" . PHP_EOL;

        foreach ($cadastro as $aluno => $dados) {
            echo "Aluno: $aluno" . PHP_EOL;
            foreach ($dados as $chave => $valor) {
                echo ucfirst($chave) . ": $valor" . PHP_EOL;
            }
            echo str_repeat("-", 25) . PHP_EOL; // separador visual
        }




        }
}

?>