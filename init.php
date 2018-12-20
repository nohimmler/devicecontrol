<?php

# verbindung zu db aufbauen
include 'mysql\mysql_login.php';
$conn = new mysqli(getServerName(), getUserName(), getPassword(), ''); 

# db anlegen
$sql = 'CREATE DATABASE '.getDBName().';';
if (mysqli_query($conn, $sql)) {
    echo "Query executed!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

# tabellen anlegen
$sql = 'CREATE TABLE '.getDBName().'.`device` 
( `id` INT NOT NULL AUTO_INCREMENT , `name` 
TEXT NOT NULL , `ipv4` TEXT NOT NULL , `port` INT NOT NULL , 
PRIMARY KEY (`id`)) ENGINE = InnoDB;';
if (mysqli_query($conn, $sql)) {
    echo "Query executed!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

# tabellen füllen

# verbindung zu db beenden
mysqli_close($conn);
#header("Location: index.php");

?>