<?php

include $_SERVER['SERVER_ADDR'].'\mysql\mysql_functions.php';

echo "<nav class='navbar navbar-inverse'>";
    echo "<div class='container-fluid'>";
        echo "<div class='navbar-header'>";
            echo "<button type='button' class='navbar-toggle' style='position:left' data-toggle='collapse' data-target='#myNavbar'>";
                echo "<span class='icon-bar'></span>";
                echo "<span class='icon-bar'></span>";
                echo "<span class='icon-bar'></span>";                       
            echo "</button>";
        echo "</div>";
        echo "<div class='collapse navbar-collapse' id='myNavbar'>";
            echo "<ul class='nav navbar-nav'>";
                echo "<li class='dropdown'>";
                echo "<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Geräte<span class='caret'></span></a>";
                echo "<ul class='dropdown-menu'>";
                    addMenuItems();
                echo "</ul></li>";
            echo "</ul>";
            echo "<ul class='nav navbar-nav navbar-right'>";
                echo "<li><a href='#'><span class='glyphicon glyphicon-pencil' data-toggle='modal' data-target='#newRaspberry'> Gerät anlegen</span></a></li>";
                echo "<li><a href='#'><span class='glyphicon glyphicon-log-in' data-toggle='modal' data-target='#Login'> Anmelden</span></a></li>";
            echo "</ul>";
        echo "</div>";
    echo "</div>";
echo "</nav>";
?>
