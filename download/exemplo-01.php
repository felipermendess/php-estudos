<?php 
// 1. `parse_url` é usado para extrair o caminho da URL (`/path/arquivo.txt`).
// 2. `basename` é usado para extrair o nome do arquivo (`arquivo.txt`).
// 3. `file_get_contents` baixa o conteúdo da URL.

// arquivo que você irá fazer download
$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

// pegando conteúdo da imagem com file_get_contents - binário
$content = file_get_contents($link);

// extraindo o caminho da url com parse_url - scheme, host, path
$url = parse_url($link);

// pegando path do parse_url extraindo o nome do arquivo com basename
$basename = basename($url["path"]);

// criando arquivo
$file = fopen($basename, "w+");

// escrevendo nele
fwrite($file, $content);

// fechando arquivo
fclose($file);
?>