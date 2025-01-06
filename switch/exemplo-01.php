<?php 
//Switch case

//A função date('w') em PHP retorna o número do dia da semana
$diaDaSemana = date('w');
var_dump($diaDaSemana);
switch($diaDaSemana){
    case 0:
    echo 'Domingo';
    break;
    case 1:
    echo 'Segunda';
    break;
    case 2:
    echo "Terça";
    break;
    case 3:
    echo "Quarta";
    break;
    case 4:
    echo "Quinta";
    break;
    case 5:
    echo "Sexta";
    break;
    case 6:
    echo "Sábado";
    break;
    default:
    echo "Data Inválida";
    break;
}
?>