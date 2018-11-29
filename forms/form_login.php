<?php
echo"<div class='modal fade' id='Login' role='dialog'>";
echo"<div class='modal-dialog'>";
echo"<div class='modal-content'>";
echo"   <div class='modal-header'>";
echo"       <button type='button' class='close' data-dismiss='modal'>&times;</button>";
echo"       <h4 class='modal-title'>Anmelden</h4>";
echo"   </div>";
echo"   <div class='modal-body'>";
echo"       <form action= '/anmelden.php' method='get' name='anmelden_form'>";
echo"           <div class='form-group'>";
echo"               <label for='email'>Benutzer:</label>";
echo"               <input type='email' class='form-control' id='username' placeholder='Benutzer' name='username'>";
echo"           </div>";
echo"           <div class='form-group'>";
echo"                   <label for='pwd'>Passwort:</label>";
echo"                   <input type='password' class='form-control' id='pwd' placeholder='Passwort' name='pwdd'>";
echo"           </div>";
echo"           <button type='button' type='submit' class='btn btn-success'>Anmelden</button>";
echo"           <button type='button' class='btn btn-default' data-dismiss='modal'>Schließen</button>";
echo"       </form>";
echo"   </div>";
echo"</div>";  
echo"</div>";
echo"</div>";
?>