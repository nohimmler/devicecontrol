<?php

include $_SERVER['SERVER_ADDR'].'\mysql\mysql_functions.php';

$conn = getMySQLConnection(); 
#$name =$_GET["name"];
#$ipaddr =$_GET["ipv4"];
#$port =$_GET["port"];

$sql = "INSERT INTO `raspberry` (`ldfnr.`, `name`, `ipv4`, `port`) VALUES (NULL, '$_GET["name"]', '$_GET["ipv4"]', '$_GET["port"]')";

executequery($conn, $sql);
mysqli_close($conn);
header("Location:".$_SERVER['SERVER_ADDR']."\index.php");
?>