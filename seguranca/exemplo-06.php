<?php 
//ataque_sessoes
 //1. Usar HTTPS
 //2. Reiniciar ID do usuário toda vez que ele fizer login (sessão)
 
session_start();

// depois de todo login e senha, reinicie o ID da sessão
session_destroy();

session_start();

session_regenerate_id();

echo session_id();
?>