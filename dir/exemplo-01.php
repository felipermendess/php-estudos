<?php 
// is_dir()	Verifica se é um diretório
// mkdir()	Cria um diretório
// rmdir()	Remove um diretório vazio

$filename = "images";

// verificando se o diretório existe - is_dir
if (!is_dir($filename)){
    // criando diretório caso não exista - mkdir
    mkdir($filename);
    echo "Diretório $filename criado com sucesso";
}else{
    // removendo diretório caso exista - rmdir
    rmdir($filename);
    echo "Diretório $filename já existe: $filename removido";
}
?>