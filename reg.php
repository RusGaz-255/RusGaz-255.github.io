<?php
$log = $_GET["login"];
echo $log;
$conn=new PDO("mysql:host=localhost;dbname=RG_01","root","");
$conn-> exec("INSERT INTO users(login) VALUES('{$log}')")
?>