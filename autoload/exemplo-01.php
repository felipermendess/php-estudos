<?php 
//autoload -> spl_autoload_register(): É uma função do PHP que permite registrar uma função de autoload para carregar classes automaticamente.
function includeClass($className){
    if(file_exists($className.".php") === true){
        require_once($className.".php");
    }
}

//forma de chamar por callback - path raiz
spl_autoload_register("includeClass");

//forma de chamar por função anônima - path em outro diretório
spl_autoload_register(function($className){ 
    if(file_exists("abstratas".DIRECTORY_SEPARATOR.$className.".php") === true){
        require_once("abstratas".DIRECTORY_SEPARATOR.$className.".php");
    }
});

$myCar = new Corolla();
$myCar->accelerate(20);


//file_exists - útil para verificar se um arquivo de classe realmente existe 
//antes de incluí-lo.
//- Sem `spl_autoload_register`: Você precisa fazer `require_once` de cada arquivo de classe manualmente.
//- Com `spl_autoload_register`: O PHP carrega automaticamente a classe quando ela é chamada.
?>