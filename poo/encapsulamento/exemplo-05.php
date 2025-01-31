<?php 
//encapsulamento
//- **public** → Pode ser acessado de qualquer lugar.
//- **protected** → Pode ser acessado apenas dentro da classe e por classes filhas.
//- **private** → Pode ser acessado apenas dentro da própria classe.

class User {
    public $nickname = "felpsxt";
    protected $login = "felipermendes04@gmail.com";
    private $password = "user_felpsxt";

    public function showData(){
        echo $this->nickname."<br>";
        echo $this->login."<br>";
        echo $this->password."<br>";
    }
}

$myUser = new User();
$myUser->showData(); //mostra todos, pois está em um método público e está dentro da própria classe
echo $myUser->nickname; //public aparece
echo $myUser->login; //protected não aparece
echo $myUser->password; //private não aparece

?>