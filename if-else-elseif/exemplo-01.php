<?php 
//if, else, else if
$meuSalario = 1161.74;
$salarioMinimo = 1518.00;
$salarioAlto = 7000.00;
$salarioEstagio = 1000.00;

if($meuSalario >= $salarioAlto){
    echo "Ganhando bem";
    echo "<br>";
}else if($meuSalario < $salarioMinimo){
    echo "Ganhando pouco";
    echo "<br>";
}else{
    echo "Sem condições finais";
    echo "<br>";
}

//Operador ternário
echo ($meuSalario >= $salarioEstagio) ? "Salário de Estagiário" : "Ganhando bem pouco";






?>