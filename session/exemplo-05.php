<?php 
//funções sessions
// - **session_start()** - inicia uma nova sessão
// - **session_unset()** - finaliza uma sessão
// - **session_destroy()** - finaliza a sessão e limpa os dados
// - **session_regenerate_id()** - gera um novo ID de sessão a cada chamada
// - **session_id()** - mostra seu id na sessão
// - **session_save_path()** - Obtém e/ou define o caminho para armazenamento da sessão atual
// - **session_status()** - Retorna o status atual da sessão

require_once("config.php");//session_start();
echo session_save_path();
echo "<br>";
echo session_status();
echo "<br>";
switch(session_status()){
    case PHP_SESSION_DISABLED:
    echo "as sessões estão desabilitadas";
    break;
    case PHP_SESSION_NONE:
    echo "as sessões estão habilitadas, porém não existe nenhuma";
    break;
    case PHP_SESSION_ACTIVE:
    echo "as sessões estão habilitadas, e existe uma";
    break;
}



?>