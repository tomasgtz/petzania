<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Request an Appointment</title>

  <?php echo $this->Html->script(array("jquery-1.9.1.min")); ?>
  <?php echo $this->Html->script(array("daypilot-all.min")); ?>
  <?php echo $this->Html->css('/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?> 	
  <?php echo $this->Html->css("appointment"); ?>

</head>
<body>

	<?php echo $this->Flash->render(); ?>
	<?php echo $this->fetch('content'); ?>

</body>
</html>