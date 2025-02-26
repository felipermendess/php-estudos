<?php 
// verificando se cookie setado anteriormente existe com a superglobal $_COOKIE
if (isset($_COOKIE["NAME_COOKIE"])){
    $cookie = json_decode($_COOKIE["NAME_COOKIE"], true);
    echo "Bem vindo ".$cookie["name"]."!";
}

?>