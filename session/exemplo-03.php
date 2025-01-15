<?php 
require_once("config.php");//session_start()
echo session_id();

// - **session_regenerate_id()** - gera um novo ID de sessão a cada chamada
// - **session_start()** - inicia uma nova sessão
// - **session_unset()** - finaliza uma sessão
// - **session_destroy()** - finaliza a sessão e limpa os dados
// - **session_id()** - mostra seu id na sessão
?>