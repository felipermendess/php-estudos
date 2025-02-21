<?php 
//unlink - A função unlink em PHP é usada para excluir um arquivo do sistema de arquivos. Ela é útil 
//quando você precisa remover arquivos que não são mais necessários, como arquivos temporários ou 
//arquivos gerados dinamicamente.

$file = fopen("teste.txt", "w+");

fwrite($file, date("d/m/Y H:i:s"));

fclose($file);

// excluindo arquivo com unlink - colocar nome do arquivo entre aspas
unlink("teste.txt");
?>