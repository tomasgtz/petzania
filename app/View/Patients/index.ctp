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
        <?php echo __('Lista de '.'Mascotas'); ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li><?php echo $this->Html->link("Mascotas",array("action"=>"/index")); ?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
<?php echo $this->Html->link("<i class='fa fa-plus'></i>&nbsp;Registrar",array("action"=>"/add"),array("class"=>"btn btn-primary","escape"=>false)); ?>                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="table1" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                                                <th>id</th>
                                                                <th>Nombre</th>
                                                                <th>Raza</th>
                                                                <th>F. Nacimiento</th>
                                                                <th>Dueño</th>
                                                                <th>Tel</th>
                                                                <th>email</th>
                                                                <th>Comentarios</th>
                                                                <th>Direccion</th>
                                                                <th>Estatus</th>
                                                                <th class="actions"><?php echo 'Acciones'; ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($patients as $patient): ?>
<tr>
		<td><?php echo h($patient['Patient']['id']); ?></td>
		<td><?php echo h($patient['Patient']['pet_name']); ?></td>
		<td><?php echo h($patient['Patient']['pet_race']); ?></td>
		<td><?php echo h($patient['Patient']['pet_dob']); ?></td>
		<td><?php echo h($patient['Patient']['owner']); ?></td>
		<td><?php echo h($patient['Patient']['owner_phone']); ?></td>
		<td><?php echo h($patient['Patient']['email']); ?></td>
		<td><?php echo h($patient['Patient']['comments']); ?></td>
		<td><?php echo h($patient['Patient']['address_street']); ?>
		<?php echo h($patient['Patient']['address_number']); ?>
		<?php echo h($patient['Patient']['address_col']); ?>
		<?php echo h($patient['Patient']['address_city']); ?>
		<?php echo h($patient['Patient']['address_zip']); ?></td>
		<td>
			<?php echo $this->Html->link($patient['Status']['id'], array('controller' => 'statuses', 'action' => 'view', $patient['Status']['id'])); ?>
		</td>
                            <td class="actions" style="text-align:center">
				<?php echo $this->Html->link('',array('controller'=> 'Encounters', 'action'=>'add',$patient['Patient']['id']),array('class'=>'fa fa-stethoscope fa-lg')); ?>
				&nbsp;&nbsp;
				<?php echo $this->Html->link('',array('action'=>'edit',$patient['Patient']['id']),array('class'=>'fa fa-edit fa-lg')); ?>
				&nbsp;&nbsp;
				<?php echo $this->Form->postLink('',array('action'=>'delete',$patient['Patient']['id']),array('confirm'=>__('Esta seguro de eliminar el registro # %s?', $patient['Patient']['id']), 'class' => 'fa fa-trash-o text-red fa-lg')); ?>                            </td>
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
          filename: 'Patients',
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