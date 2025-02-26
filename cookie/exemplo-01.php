<?php 
// setando cookies - setcookie(nameCookie, valueCookie, expireTime)
$data = ["name"=>"felipe"];
setcookie("NAME_COOKIE", json_encode($data), time() + 3600);
?>