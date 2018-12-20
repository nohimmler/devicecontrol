<?php
include '..\mysql\mysql_login.php';

$conn = new mysqli(getServerName(), getUserName(), getPassword(), getDBName());  

$name   = $_GET['name'];
$ip     = $_GET['ipv4'];
$port   = $_GET['port'];

$sql = 'INSERT INTO device SET
        name = "'.$name.'",
        ipv4 = "'.$ip.'",
        port = "'.$port.'"';       

if (mysqli_query($conn, $sql)) {
    echo "Query executed!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

#mysqli_query($conn, $sql);
mysqli_close($conn);
#header("Location: ..\index.php");
?>