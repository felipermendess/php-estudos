<?php 
//for
for($i = 0; $i <= 10; $i++){
    echo $i . "<br>";
}

for($x = 0; $x <= 100; $x+=5){
    //O continue pula para a próxima iteração do loop
    if($x > 20 && $x < 80) continue;
    //O break encerra o loop imediatamente
    if($x === 90) break;
    echo $x . "<br>";
}

echo "<select>";
for($y = date("Y"); $y >= date("Y")-25; $y--){
    echo '<option value="'.$y.'">'.$y.'</option>';
}
echo "</select>";
?>