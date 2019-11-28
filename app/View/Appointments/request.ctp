<?php echo $this->Form->create('Appointment',array('url'=> '../Appointments/request_save', 'id' => 'f', 'style' => 'padding:20px;' )); ?>

<!-- <form id="f" action="request_save" style="" method="POST"> -->
  <input type="hidden" name="id" id="id" value="<?php echo h($appointment['Appointment']['id']); ?>"/>
  <h1>Reservar cita</h1>

  <div class="space">
    <div>Inicio:</div>
    <div><input type="text" id="start" name="start"
                value="<?php print (new DateTime($appointment['Appointment']['appointment_start']))->format('d/M/y g:i A') ?>" disabled/>
    </div>
  </div>

  <div class="space">
    <div>Fin:</div>
    <div><input type="text" id="end" name="end"
                value="<?php print (new DateTime($appointment['Appointment']['appointment_end']))->format('d/M/y g:i A') ?>" disabled/></div>
  </div>

  <div class="space">
    <div>Nombre de la mascota:</div>
    <div><input type="text" id="name" name="name" value=""/></div>
  </div>

  <div class="space">
    <div>Telefono:</div>
    <div><input type="text" id="phone" name="phone" value="" required/></div>
  </div>

  <div class="space"><input type="submit" value="Save" class="btn btn-primary"/> <a href="#" id="cancel">Cancelar</a></div>
</form>

<script type="text/javascript">

  $("#f").submit(function () {
    var f = $("#f");
    $.post(f.attr("action"), f.serialize(), function (result) {
      DayPilot.Modal.close(result);
    });
    return false;
  });

  $("#cancel").click(function () {
    DayPilot.Modal.close();
    return false;
  });

  $(document).ready(function () {
    $("#name").focus();
  });

</script>