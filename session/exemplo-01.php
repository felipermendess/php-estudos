<?php 
//sessões - Sessões em PHP permitem armazenar informações de um usuário enquanto ele navega por várias páginas de um site. 
//Isso é útil para gerenciar dados persistentes durante a navegação, como autenticação de usuário, carrinhos de compras, entre outros.
//É uma forma de controlar quem acessa o servidor, direcionando informações para um usuário específico conforme necessidade.

//por padrão no php, ele vem configurado para a sessão não iniciar automaticamente
require_once("config.php"); //session_start()
$_SESSION["nome"] = "Felipe";

// - **session_regenerate_id()** - gera um novo ID de sessão a cada chamada
// - **session_start()** - inicia uma nova sessão
// - **session_unset()** - finaliza uma sessão
// - **session_destroy()** - finaliza a sessão e limpa os dados
// - **session_id()** - mostra seu id na sessão
?>