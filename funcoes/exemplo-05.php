<?php 
$a = 19;
function valueChange(&$b){
    $b += 20;
    return $b;
} 

echo $a;
echo "<br>";
echo valueChange($a);
echo "<br>";
echo valueChange($a);
echo "<br>";
echo $a;

//& - passagem de parâmetro por referência
?>