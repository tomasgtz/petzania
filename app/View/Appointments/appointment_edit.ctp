<div style="padding:10px">

  <h1>Modificar Cita</h1>

  <div class="space">
    <button id="delete" id="delete" class="btn btn-danger">Borrar</button>
  </div>

  <div class="space">
    <div>Inicio:</div>
    <div><input type="text" id="start" name="start" disabled
                value="<?php print (new DateTime($appointment['Appointment']['appointment_start']))->format('d/M/y g:i A') ?>"/></div>
  </div>

  <div class="space">
    <div>Fin:</div>
    <div><input type="text" id="end" name="end" disabled
                value="<?php print (new DateTime($appointment['Appointment']['appointment_end']))->format('d/M/y g:i A') ?>"/></div>
  </div>

  <div class="space">
    <div>M&eacute;dico:</div>
    <div>
      <select id="resource" name="resource" disabled ng-model="appointment.doctor">
        <?php

	var_dump($users);
        foreach ($users as $id => $user) {
          $selected = "";
          if ($appointment['Appointment']["user_id"] == $user["id"]) {
            $selected = " selected";
          }
          echo "<option value='" . $id . "'" . $selected . ">" . $user . "</option>";
        }
        ?>
      </select>
    </div>
  </div>

  <div class="space">
    <div>Estatus:</div>
    <div>
      <select id="status" name="status">
        <?php
        $status_items = array(
            array("value" => "free", "name" => "Disponible"),
            array("value" => "waiting", "name" => "Por confirmar"),
            array("value" => "confirmed", "name" => "Confirmada")
        );
        foreach ($status_items as $item) {
          $selected = "";
          if ($appointment['Appointment']["appointment_status"] == $item["value"]) {
            $selected = " selected";
          }
          echo "<option value='" . $item["value"] . "'" . $selected . ">" . $item["name"] . "</option>";
        }
        ?>
      </select>
    </div>
  </div>

  <div>Mascota:</div>
  <div><input type="text" id="name" name="name" value="<?php echo $appointment['Appointment']['appointment_patient_name'] ?>"/></div>

  <div>Tel:</div>
  <div><input type="text" id="name" name="name" value="<?php echo $appointment['Appointment']['appointment_patient_phone'] ?>"/></div>

  <div class="space"><input type="submit" value="Save" id="save" class="btn btn-primary"/> <a href="" id="cancel">Cancelar</a></div>

</div>

<script type="text/javascript">
  var appointment = {
    id: '<?php echo $appointment['Appointment']['id'] ?>'
  }

  $(document).ready(function () {
    $("#delete").click(function () {
      $.post("../delete", JSON.stringify(appointment), function (data) {
        DayPilot.Modal.close(data);
      });
    });

    $("#save").click(function () {
      appointment.name = $("#name").val();
      appointment.status = $("#status").val();

      $.post("../update", JSON.stringify(appointment), function (data) {
        DayPilot.Modal.close(data);
      });
    });

    $("#cancel").click(function () {
      DayPilot.Modal.close();
    });

    $("#name").focus();
  });

</script>