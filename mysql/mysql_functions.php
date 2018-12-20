<?php

function executeQuery($conn, $sql){
    if (mysqli_query($conn, $sql)) {
        echo "Query executed!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

function getMySQLConnection(){
    include 'mysql\mysql_login.php';
    $conn = new mysqli(getServerName(), getUserName(), getPassword(), getDBName());  
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    #echo "Connected successfully";
    return($conn);
}


function addMenuItems(){
    $conn = getMySQLConnection();          
    $sql = "SELECT * FROM device";
    $result = mysqli_query($conn, $sql);
    
    ?>
    <div class='device_cont'>
    <?php

    while($row = $result->fetch_assoc()) {
        ?>
        <button type='button' class='btn btn-primary' data-toggle='modal' id='<?php echo $row["id"]?>'><?php echo $row["name"]?></button>
        <?php
    }

    mysqli_close($conn);
    
    ?>
    </div>  
    <?php
}

?>