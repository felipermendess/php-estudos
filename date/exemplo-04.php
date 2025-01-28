<?php 
//classe datetime
$dt = new DateTime();

echo $dt->format("d/m/Y H:i:s");

$period = new DateInterval("P4D");

echo "<br>";

$dt->add($period);

echo $dt->format("d/m/Y H:i:s");

//**Métodos da classe DateTime()**
//- DateTime()->format():*string* permite a formatação do conteúdo que será apresentado.
//- DateTime()->add(“Intervalo”) - adiciona um determinado intervalo de tempo ao objeto que o chamar.

//**Métodos da classe DateInterval()**
//- DateInterval()
?>