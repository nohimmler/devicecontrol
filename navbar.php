
<?php
include 'mysql/mysql_functions.php';
?>

<nav class='navbar navbar-inverse'>
    <div class='container-fluid'>
        <div class='navbar-header'>
            <button type='button' class='navbar-toggle' style='position:left' data-toggle='collapse' data-target='#myNavbar'>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>                       
            </button>
        </div>
        <div class='collapse navbar-collapse' id='myNavbar'>
            <ul class='nav navbar-nav'>
                    <li class='dropdown'>
                    <a class='dropdown-toggle' data-toggle='dropdown' href='#'>Geräte<span class='caret'></span></a>
                    <ul class='dropdown-menu'>
                        <?php addMenuItems(); ?>
                    </ul>
                </li>
            </ul>";
            <ul class='nav navbar-nav navbar-right'>";
                <li><a href='#'><span class='glyphicon glyphicon-pencil' data-toggle='modal' data-target='#newDevice'> Gerät anlegen</span></a></li>
                <li><a href='#'><span class='glyphicon glyphicon-log-in' data-toggle='modal' data-target='#Login'> Anmelden</span></a></li>
            </ul>
        </div>
    </div>
</nav>

