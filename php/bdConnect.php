<?php
//BDConnect.php

$servername = "localhost";
$user = "root";
$password = "";
$db = "oficinas";

$liga = mysqli_connect($servername,$user,$password,$db);

if(!$liga){
	echo "<script>alert('Base de dados inacessivel');</script>";
}


?>