<link rel="stylesheet" type="text/css" href="js/datatables/css/dataTables.bootstrap.min.css"> 
<link rel="stylesheet" type="text/css" href="js/datatables/css/buttons.dataTables.min.css">

<script src="js/datatables/js/jquery.dataTables.min.js"></script>
<script src="js/datatables/js/dataTables.bootstrap.min.js"></script>
<script src="js/datatables/js/dataTables.buttons.min.js"></script>
<script src="js/datatables/js/buttons.flash.min.js"></script>
<script src="js/datatables/js/buttons.html5.min.js"></script>
<script src="js/datatables/js/buttons.print.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?php echo __('Lista de Consultas'); ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li><?php echo $this->Html->link("Consultas",array("action"=>"/index")); ?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="table1" class="table table-striped table-bordered">
                        <thead>
                            <tr>
				<th>id</th>
				<th>Mascota</th>
				<th>Fecha de consulta</th>
				<th>Nombre del m&eacute;dico</th>
				<th>Motivo de la consulta</th>
				<th>Dx</th>
				<th>Rx</th>
				<th>Comentarios</th>
				<th class="actions"><?php echo 'Acciones'; ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($encounters as $encounter): ?>
<tr>
		<td><?php echo h($encounter['Encounter']['id']); ?></td>
		<td>
			<?php echo $this->Html->link($encounter['Patient']['pet_name'], array('controller' => 'patients', 'action' => 'edit', $encounter['Patient']['id'])); ?>
		</td>
		<td><?php echo h($encounter['Encounter']['encounter_date']); ?></td>
		<td><?php echo h($encounter['User']['name']); ?></td>
		<td><?php echo h($encounter['Encounter']['reason']); ?></td>
		<td><?php echo h($encounter['Encounter']['dx']); ?></td>
		<td><?php echo h($encounter['Encounter']['rx']); ?></td>
		<td><?php echo h($encounter['Encounter']['comments']); ?></td>
	        <td class="actions" style="text-align:center">
			<?php echo $this->Html->link('',array('action'=>'edit',$encounter['Encounter']['id']),array('class'=>'fa fa-edit fa-lg')); ?>
			&nbsp;&nbsp;
			<?php echo $this->Form->postLink('',array('action'=>'delete',$encounter['Encounter']['id']),array('confirm'=>__('Esta seguro de eliminar la consulta # %s?', $encounter['Encounter']['id']), 'class' => 'fa fa-trash-o text-red fa-lg')); ?>                            </td>
</tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
<script>
$(document).ready(function() {
  var table = $('#table1').DataTable({
      dom: 'Blftip',
      buttons: [{
          extend: 'excel',
          filename: 'Encounters',
          exportOptions: {
              format: {
                  body: function(data, row, col) {
                      var s = '<p>' + data + '</p>';
                      return $(s).text();
                  }
              }

          }
      }]
  });
});
</script>