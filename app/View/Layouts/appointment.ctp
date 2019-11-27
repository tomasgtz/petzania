<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>Agenda tu cita</title>
  <?php echo $this->Html->css('/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>


  <?php echo $this->Html->css("appointment"); ?>

  <!-- DayPilot library -->
  <?php echo $this->Html->script(array("jquery-1.9.1.min")); ?>
  <?php echo $this->Html->script(array("daypilot-all.min")); ?>
  <?php echo $this->Html->script("/bower_components/bootstrap/dist/js/bootstrap.min.js"); ?>  
</head>
<body>

<main role="main">

<div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Reservaciones de citas</h1>
      <p>Gracias por su preferencia, a continuaci&oacute;n se muestra nuestro calendario de atenci&oacute;n<br>Cada celda marcada en <font color="green">verde</font> es un espacio disponible en el que puede solicitar una cita.</p>
    </div>
  </div>

<div class="container">

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

  </div> <!-- /container -->

</main>

<footer class="container">
  <p>&copy; Petszania 2019-2021</p>
</footer>
</body>
</html>