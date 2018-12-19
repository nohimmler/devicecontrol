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
    $sql = "SELECT name FROM device";
    $result = mysqli_query($conn, $sql);

    while($row = $result->fetch_assoc()) {
        #forms/form_device.php
        #<li><a href='#'><span class='glyphicon glyphicon-pencil' data-toggle='modal' data-target='#newRaspberry'> Gerät anlegen</span></a></li>
        #echo "<li><a href='#'><span data-toggle='modal' data-target='#showDevice'>". $row["name"]."</span></a></li>";
        ?>
        <button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#<?php echo $row["name"] ?>'>Open Modal</button>
<div class="container">
        <div class='modal fade' id='<?php echo $row["name"] ?>' role='dialog'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    </div>
                    <div class='modal-body'>
                        <p>Some text in the modal.</p>
                    </div>
                </div>
            </div>
        </div>

        <?php


    }

    mysqli_close($conn);
}

?>