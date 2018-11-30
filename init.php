<?php

include 'mysql\mysql_functions.php'
# verbindung zu db aufbauen
getMySQLConnection();

# db anlegen
$sql = 'CREATE DATABASE smarthomedb2;';
executeQuery($conn, $sql);

# tabellen anlegen
$sql = 'CREATE TABLE `smarthomedb`.`device` 
( `ldfnr.` INT NOT NULL AUTO_INCREMENT , `name` 
TEXT NOT NULL , `ipv4` TEXT NOT NULL , `port` INT NOT NULL , 
PRIMARY KEY (`ldfnr.`)) ENGINE = InnoDB;';

executeQuery($conn, $sql);
# tabellen füllen

# verbindung zu db beenden
mysqli_close($conn);
header("Location:".$_SERVER['SERVER_ADDR']."\index.php");

?>