<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>Agenda tu cita</title>

  <?php echo $this->Html->css("appointment"); ?>

  <!-- DayPilot library -->
  <?php echo $this->Html->script(array("jquery-1.9.1.min")); ?>
  <?php echo $this->Html->script(array("daypilot-all.min")); ?>
  
</head>
<body>
	<div class="header">
            
        </div>

<div class="main">

  <div>

    <div class="column-left">
      <div id="nav"></div>
    </div>
    <div class="column-main">
      <div class="toolbar">Puede reservar en cualquier espacio marcado como Disponible:</div>
      <div id="calendar"></div>
    </div>

  </div>
</div>

	<?php echo $this->Flash->render(); ?>
        <?php echo $this->fetch('content'); ?>
</body>
</html>