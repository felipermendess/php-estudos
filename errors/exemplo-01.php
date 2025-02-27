<?php 
// set_error_handler - manipula e evita que o PHP mostre uma mensagem de erro, fazendo que com no lugar dela seja executada uma função
function error_handler($code, $file, $message, $line) {
    echo json_encode([
        "code"=>$code,
        "file"=>$file,
        "message"=>$message,
        "line"=>$line,
    ]);
}

// função personalizada que será chamada sempre que um erro ou um aviso (warning) 
// ocorrer durante a execução do script - função tem que ser passada em string
set_error_handler("error_handler");

$array = [1, 2, 3];
echo $array[5];
?>