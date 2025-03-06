<?php
$pasta = "arquivos";
$permissoes = "0775";

if (!is_dir($pasta)) {
    mkdir($pasta, $permissoes);
    echo "Diretório criado com sucesso";
}

//0 - não existe permissão nenhuma
//1 - permissão de execução
//2 - permissão de escrita
//3 - permissão de execução e escrita
//4 - permissão de leitura
//5 - permissão de leitura e execução
//6 - permissão de leitura e escrita
//7 - permissão de execução, leitura e escrita
//chmod - muda permissão da pasta
//proprietário, grupo, outros
//read, execute, write 
?>