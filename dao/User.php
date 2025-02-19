<?php 

class User {
    private $id;
    private $desname;
    private $email;

    // getters
    public function getId(){
        return $this->id;
    }

    public function getDesname(){
        return $this->desname;
    }

    public function getEmail(){
        return $this->email;
    }

    // setters
    public function setId($id){
        $this->id = $id;
    }

    public function setDesname($desname){
        $this->desname = $desname;
    }

    public function setEmail($email){
        $this->email = $email;
    }
}

?>