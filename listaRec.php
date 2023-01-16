<?php

include_once("index.php");

$consulta = "SELECT * FROM requisicao ORDER by id DESC";
$con = $connection -> query($consulta) or die($connection -> error);

$result = $connection->query($con);

print_r($result);

?>