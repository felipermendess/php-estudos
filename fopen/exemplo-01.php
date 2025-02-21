<?php 
//A função fopen() em PHP é usada para abrir arquivos. Ela pode ser utilizada para ler, escrever, criar e modificar arquivos.

// "r"	Leitura. O ponteiro começa no início do arquivo.
// "r+"	Leitura e escrita. O ponteiro começa no início do arquivo.
// "w"	Escrita. Apaga o conteúdo do arquivo ou cria um novo.
// "w+"	Leitura e escrita. Apaga o conteúdo do arquivo ou cria um novo.
// "a"	Escrita. Adiciona conteúdo ao final do arquivo ou cria um novo.
// "a+"	Leitura e escrita. Adiciona conteúdo ao final ou cria um novo.
// "x"	Cria um novo arquivo apenas para escrita. Retorna erro se já existir.
// "x+"	Cria um novo arquivo para leitura e escrita. Retorna erro se já existir.

// fopen pede dois parâmetros: caminho do arquivo e como você vai controlar este arquivo
// $arquivo = fopen("log.txt", "w+");
$arquivo = fopen("log.txt", "a+");
// var_dump($arquivo); - resource

// fwrite também espera dois param.: resource e os dados que você quer inserir
fwrite($arquivo, "log do arquivo log.txt". "\r\n");

// fclose - fechando manipulador: espera um resource
fclose($arquivo);

//para pular linha é \r\n

echo "Arquivo criado com sucesso!";
?>