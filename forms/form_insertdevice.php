
<div class='modal fade' id='newRaspberry' role='dialog'>
<div class='modal-dialog'>
<div class='modal-content'>
<div class='modal-header'>
      <button type='button' class='close' data-dismiss='modal'>&times;</button>
      <h4 class='modal-title'>neues Gerät anlegen</h4>
  </div>
  <div class='modal-body'>
      <form action='..\script\script_adraspberry.php' method='get'>
          <div class='form-group'>
              <label for='name'>Name:</label>
              <input type='name' class='form-control' id='name' placeholder='Raspberry Pi Wohnzimmer' name='name' required>
          </div>
          <div class='form-group'>
              <label for='ipv4'>IP-Adresse:</label>
              <input type='text' class='form-control' id='ipv4' placeholder='192.168.0.1' name='ipv4' required>
          </div>                   
          <div class='form-group'>
              <label for='port'>Port:</label>
              <input type='number' class='form-control' id='port' placeholder='80' name='port' required>
          </div>
          <input type='submit' class='btn btn-success' value='Anlegen'>
          <button type='button' class='btn btn-default' data-dismiss='modal'>Schließen</button>
      </form>
  </div>
  </div>
</div>
</div>
