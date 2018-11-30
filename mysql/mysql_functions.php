<?php

function executeQuery($conn, $sql){
    if (mysqli_query($conn, $sql)) {
        echo "Query executed!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

function getMySQLConnection(){
    include $_SERVER['SERVER_ADDR'].'\mysql\mysql_login.php';
    $conn = new mysqli(getServerName(), getUserName(), getPassword(), getDBName());  
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    return($conn);
}

function addMenuItems(){
    $conn = getMySQLConnection();          
    $sql = "SELECT name FROM device";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    while($row = $result->fetch_assoc()) {
        echo "<li><a href='device.php'>". $row["name"]."</a></li>";
    }
}

?>