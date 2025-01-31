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

class CsPlayer extends User {    
    public function showData(){
        echo get_class($this)."<br>"; //get_class(this) mostra a class que está sendo chamada

        echo $this->nickname."<br>";
        echo $this->login."<br>";
        echo $this->password."<br>";
    }
}

$myUser = new CsPlayer();
$myUser->showData(); //mostra tudo exceto o password (private), pois a mesma só pode ser acessada dentro da própria class

?>