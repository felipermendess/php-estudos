<?php 
//Use funções como escapeshellarg() ou escapeshellcmd() para escapar caracteres especiais que possam ser usados para injetar comandos

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    // name do input - cmd
    // prevenindo de ataques injections - anula e transforma em string
    $cmd = escapeshellcmd($_POST["cmd"]);

    var_dump($cmd);

    echo "<pre>";
    // system executa uma ação e retorna a ação
    //  $comando = system("dir C:", $retorno);
    $comando = system($cmd, $retorno);
    echo "</pre>";
}
?>

<form method="POST">
    <input type=" text" name="cmd">
    <button type="submit">Enviar</button>
</form>