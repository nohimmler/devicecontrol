<?php

include '..\mysql\mysql_login.php';

$conn = new mysqli(getServerName(), getUserName(), getPassword(), getDBName());  
$sql = "INSERT INTO device (`name`, `ipv4`, `port`) VALUES ('".$_GET['name']."', '".$_GET['ipv4']."', '".$_GET['port']."')";

if (mysqli_query($conn, $sql)) {
    echo "Query executed!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

#mysqli_query($conn, $sql);
mysqli_close($conn);
header("Location: ..\index.php");
?>