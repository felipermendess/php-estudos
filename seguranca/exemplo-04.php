<form method="POST">
    <input type="text" name="busca">
    <button type="submit">Enviar</button>
</form>

<?php 
// $_POST["busca"] = "<strong>oi</strong>";
// $_POST["busca"] = "<script>alert('oi')</script>";

if (isset($_POST["busca"])) {
    echo strip_tags($_POST["busca"], "<strong>");
    echo "<br>";
    echo htmlentities($_POST["busca"]);
}

/*  - strip_tags: remove todas as tags HTML e PHP de uma string, exceto aquelas que 
você explicitamente permite.
	- htmlentites: em PHP é usada para converter caracteres especiais (códigos) em entidades HTML.
*/
?>