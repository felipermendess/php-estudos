<?php 
$timestampNiver = strtotime("2004-10-20");
echo "<br>";
echo date("l, d/m/Y H:i:s", $timestampNiver);

//strtotime - A função strtotime() em PHP é usada para converter uma string 
//representando uma data/hora em um timestamp Unix

echo "<br>";
$timestampNow = strtotime("now");
echo date("l, d/m/Y H:i:s", $timestampNow);

echo "<br>";
$timestampTomorrow = strtotime("+1 day");
echo date("l, d/m/Y H:i:s", $timestampTomorrow);

echo "<br>";
$timestampNextWeek = strtotime("+1 week");
echo date("l, d/m/Y H:i:s", $timestampNextWeek);

echo "<br>";
$timestampNextMonth = strtotime("+1 month");
echo date("l, d/m/Y H:i:s", $timestampNextMonth);
?>