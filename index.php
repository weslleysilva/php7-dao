<?php 
require_once("config.php");

$logar = new Usuario();
$logar->login("root","89743");

echo $logar;
 ?>