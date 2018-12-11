<div class='modal fade' id='Login' role='dialog'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title'>Anmelden</h4>
      </div>
      <div class='modal-body'>
        <form action= '/anmelden.php' method='get' name='anmelden_form'>
          <div class='form-group'>
            <label for='email'>Benutzer:</label>
            <input type='email' class='form-control' id='username' placeholder='Benutzer' name='username'>
          </div>
          <div class='form-group'>
            <label for='pwd'>Passwort:</label>
            <input type='password' class='form-control' id='pwd' placeholder='Passwort' name='pwdd'>
          </div>
            <button type='button' type='submit' class='btn btn-success'>Anmelden</button>
            <button type='button' class='btn btn-default' data-dismiss='modal'>Schließen</button>
        </form>
      </div>
    </div>  
  </div>
</div>