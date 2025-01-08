<?php 
//while
$condicao = true;

while($condicao){
    //função rand - é usada para gerar um número inteiro aleatório
    $numero = rand(1,10);

    if($numero === 4){
        echo "Número sorteado: ";
        $condicao = false;
    }
    echo $numero."<br>";
}
?>