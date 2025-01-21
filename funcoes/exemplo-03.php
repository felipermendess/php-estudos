<?php 
function hello($user = "user", $period = "morning"){
    return "Hello $user, welcome to the game! You have just logged in for the period $period";
}

echo hello("felpss","morning");
echo "<br>";
echo hello("gustavog3x", "afternoon");
echo "<br>";
echo hello("riansouzaaft", "night");
echo "<br>";
echo hello();

//Argumentos - Os argumentos que não tenham valor padrão definido, devem ser passados antes dos que já tem.
?>