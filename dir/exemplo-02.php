<?php 
// scandir()	Lista arquivos e pastas de um diretório
// in_array()	Verifica se um valor está em um array
// pathinfo()	Obtém informações sobre um arquivo
// filesize()	Obtém o tamanho de um arquivo
// filemtime()	Obtém a data de modificação de um arquivo

$images = scandir("images");

$data = [];

foreach($images as $img){
    if (!in_array($img, [".", ".."])){
        $filename = "images".DIRECTORY_SEPARATOR.$img;
        
        $info = pathinfo($filename);
        $info["size"] = filesize($filename);
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
        $info["url"] = "http://localhost/content/dir/".str_replace("\\", "/", $filename);
        
        array_push($data, $info);
    }
}

echo json_encode($data);

?>