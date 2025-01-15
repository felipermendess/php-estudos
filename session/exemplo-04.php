<?php 
//recuperando uma sessão em outro navegador
session_id("ivos2p79f490ai9aidqhssd4qg");//definindo um id para a sessão
require_once("config.php");//session_start
session_regenerate_id();
echo session_id();
var_dump($_SESSION);

// - **session_regenerate_id()** - gera um novo ID de sessão a cada chamada
// - **session_start()** - inicia uma nova sessão
// - **session_unset()** - finaliza uma sessão
// - **session_destroy()** - finaliza a sessão e limpa os dados
// - **session_id()** - mostra seu id na sessão
?>