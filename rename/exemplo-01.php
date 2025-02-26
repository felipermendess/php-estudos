<?php 
// diretórios
$dirOne = "foldenOne";
$dirTwo = "foldenTwo";

// verificando se diretórios não existem e se não, criar diretórios
if (!is_dir($dirOne)) mkdir($dirOne);
if (!is_dir($dirTwo)) mkdir($dirTwo);

// criando arquivo
$filename = "README.txt";

// verificando se caminho de arquivo existe, caso não = criar com fopen e escrever nele qualquer coisa com fwrite e depois fechar com fclose
if (!file_exists($dirOne.DIRECTORY_SEPARATOR.$filename)){
    $file = fopen($dirOne.DIRECTORY_SEPARATOR.$filename, "w+");

    fwrite($file, date("d/m/Y H:i:s"));

    fclose($file);
}

// movendo arquivo com rename(from, to);
rename($dirOne.DIRECTORY_SEPARATOR.$filename, $dirTwo.DIRECTORY_SEPARATOR.$filename);

?>