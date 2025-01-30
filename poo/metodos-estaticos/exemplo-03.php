<?php 
// Chamando o método sem instanciar a classe
class Document{
    private $number;

    public function getNumber(){
        return $this->number;
    }

    public function setNumber($number){
        $result = Document::validateCpf($number);

        if($result === false){
        throw new Exception("Invalid CPF!", 1);
        }

        $this->number = $number;
    }

    public static function validateCpf($cpf):bool{
        if(empty($cpf)) return false;
    
        $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
    
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
         
        
        if (strlen($cpf) != 11) {
            echo "length";
            return false;
        }
        
        else if ($cpf == '00000000000' || 
            $cpf == '11111111111' || 
            $cpf == '22222222222' || 
            $cpf == '33333333333' || 
            $cpf == '44444444444' || 
            $cpf == '55555555555' || 
            $cpf == '66666666666' || 
            $cpf == '77777777777' || 
            $cpf == '88888888888' || 
            $cpf == '99999999999') {
            return false;
    
         } else {   
             
            for ($t = 9; $t < 11; $t++) {
                 
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf[$c] * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf[$c] != $d) {
                    return false;
                }
            }
     
            return true;
        }
    }
}

// $cpf = new Document();
// $cpf->setNumber("37375379");
// echo $cpf->getNumber();

// Chamando o método sem instanciar a classe
var_dump(Document::validateCpf("03052244556")); 

echo "<br>";
class Clock{
    public static function showTime($date){
        $timestampConverted = strtotime($date);
        return date("l, d/m/Y H:i:s", $timestampConverted);
    }
}

// Chamando o método sem instanciar a classe
echo Clock::showTime("2004-10-20");

?>