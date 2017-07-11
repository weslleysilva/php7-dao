<?php 
require_once("config.php");

$sql = new Sql();

$users = $sql->select("SELECT * FROM usuarios");

echo json_encode($users);

 ?>