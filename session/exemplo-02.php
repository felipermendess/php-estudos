<?php 
require_once("config.php");//session_start()
session_unset();
echo $_SESSION["nome"];
session_destroy();

//- **session_start()** - inicia uma nova sessão
//- **session_unset()** - finaliza uma sessão
//- **session_destroy()** - finaliza a sessão e limpa os dados
?>