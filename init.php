<?php

include $_SERVER['SERVER_ADDR'].'\mysql\mysql_functions.php'
# verbindung zu db aufbauen
$conn = getMySQLConnection();

# db anlegen
$sql = '';
executeQuery($conn, $sql);

# tabellen anlegen
$sql = '';
executeQuery($conn, $sql);
# tabellen füllen

# verbindung zu db beenden
mysqli_close($conn);
header("Location:".$_SERVER['SERVER_ADDR']."\index.php");

?>