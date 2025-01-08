<?php 
//array multidimensional
$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

$carros[2][0] = "Toyota";
$carros[2][1] = "Corolla";
$carros[2][2] = "Hilux";
$carros[2][3] = "Yaris";

echo $carros[2][1]."<br>";
//A função end() é muito útil para acessar rapidamente o último elemento de um array
echo end($carros[0]);
?>