<?php

include 'mysql\mysql_login.php';

$conn = new mysqli(getServerName(), getUserName(), getPassword(), getDBName());  
#$name =$_GET["name"];
#$ipaddr =$_GET["ipv4"];
#$port =$_GET["port"];

$sql = "INSERT INTO `raspberry` (`ldfnr.`, `name`, `ipv4`, `port`) VALUES (NULL, ".$_GET['name'].", ".$_GET['ipv4'].", ".$_GET['port'].")";
mysqli_query($conn, $sql);
mysqli_close($conn);
header("Location: index.php");
?>