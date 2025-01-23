<?php 
//funções anônimas
function test($callback){
    $callback();
}

test(function(){
    echo "Ended";
})
?>