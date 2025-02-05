<?php 
//interface - Em Programação Orientada a Objetos (POO) no PHP, uma interface define um contrato que as classes devem seguir. 
//Ela declara quais métodos uma classe deve implementar, mas não fornece a implementação desses métodos.

interface UserActive {
    public function login($username);
    public function logout($username);
} 

class NewUser implements UserActive{
    public function login($username){
        echo "Welcome " . $username;
    }

    public function logout($username){
        echo "Oops! " . $username;
    }
}

$belluno = new NewUser();
$belluno->login("Belluno");
echo "<br>";
$belluno->logout("Belluno");


?>