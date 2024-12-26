<?php 
//Escopo -> O escopo em PHP define onde variáveis, constantes e funções podem ser acessadas em um programa
$nome = 'Felipe';

//Para acessar uma variável global dentro de uma função, você deve usar a palavra-chave `global`
function teste(){
    global $nome;
    echo $nome;
}

//Variável criada dentro do escopo local - função
function teste2(){
    $nome = 'Gustavo';
    echo $nome;
}

teste();
teste2();
?>