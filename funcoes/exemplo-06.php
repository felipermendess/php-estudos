<?php 
//valor vs referência
$persons = ["name"=>"felipe", "age"=>20];
$hasMorePersons = false;

foreach($persons as &$value){
    if(gettype($value) === "integer") $value += 20;
    echo $value."<br>";
}
print_r($persons);
echo "<br>";
echo gettype($hasMorePersons);

//gettype pega o tipo de dado
//Passagem de parâmetro por referência: Quando desejamos alterar o valor no endereço original do argumento passado, utilizamos 
//o “&” na definição dos argumentos desta função.
?>