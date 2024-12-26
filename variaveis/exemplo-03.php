<?php 
//Tipos de dados: básico, composto e especial

//Tipo básico - int
$idade = 2004;

//Tipo básico - string
$profissao = 'Programador';
$fruta = "Laranja";

//Tipo básico - boolean
$bloqueado = false;

//Tipo composto - array
$frutas = ['Maçã', 'Laranja', 'Banana', 'Uva'];

//Tipo composto - objeto
$nascimento = new DateTime();
// var_dump($nascimento);

//Tipo especial - resource
//fopen() -> função usada para abrir arquivos e obter um ponteiro de arquivo, este ponteiro permite (ler, escrever, ou criar)
$arquivo = fopen('exemplo-03.php', 'r');
// var_dump($arquivo);

//Tipo especial - null -> definida escrevendo NULL ou destruindo a variável (unset)
$nulo = NULL;
var_dump($nulo);

//DIFERENÇA ENTRE NULL E VAZIO:
//NULL = AUSÊNCIA DE VALOR 
//VAZIO = FOI INICIADO, SÓ NÃO TEM INFORMAÇÃO
?>