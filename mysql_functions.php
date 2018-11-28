<?php

function addMenuItems(){
    $conn = new mysqli(getServerName(), getUserName(), getPassword(), getDBName());          
    $sql = "SELECT name FROM raspberry";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    while($row = $result->fetch_assoc()) {
        echo "<li><a href='device.php'>". $row["name"]."</a></li>";
    }
}

function getServerName(){
    return('localhost');
}

function getUserName(){
    return('root');
}

function getPassword(){
    return('');
}

function getDBName(){
    return('smarthomedb');
}

?>