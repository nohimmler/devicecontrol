<?php

include 'mysql\mysql_login.php';

$conn = new mysqli(getServerName(), getUserName(), getPassword(), getDBName());  
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

$name =$_GET["name"];
$ipaddr =$_GET["ipv4"];
$port =$_GET["port"];

$sql = "INSERT INTO `raspberry` (`ldfnr.`, `name`, `ipv4`, `port`) VALUES (NULL, '$name', '$ipaddr', '$port')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("Location: http://localhost/projekt/index.php");
?>