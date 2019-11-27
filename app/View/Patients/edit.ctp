
<?php 
echo $this->Html->script('/plugins/iCheck/icheck.min.js');
echo $this->Html->css('/plugins/iCheck/all.css');
echo $this->Html->css('/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css');
echo $this->Html->script('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');
echo $this->Html->css('/bower_components/select2/dist/css/select2.min.css');
echo $this->Html->script('/bower_components/select2/dist/js/select2.full.min.js');
?><!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Edición de registro</h1>    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li><?php echo $this->Html->link("Mascotas",array("action"=>"/index")); ?></li>
        <li class="active">Editar</li>    </ol>    
</section>

<section class="content">
      <div class="row">
        <!-- center column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"> Editando registro #<?php echo $this->request->data['Patient']['id']; ?></h3>            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <br>
            <?php echo $this->Form->create('Patient',array('class' => 'form-horizontal')); ?>
            <?php echo $this->Form->input('id',array('class' => 'form-control', 'label' => false)); ?>
                            <div class="form-group">
                                <label for="pet_name" class="col-sm-2 control-label">Nombre de la mascota</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('pet_name',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="pet_race" class="col-sm-2 control-label">Raza de la mascota</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('pet_race',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="pet_dob" class="col-sm-2 control-label">F.Nac. de la mascota</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('pet_dob',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="owner" class="col-sm-2 control-label">Due&ntilde;o</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('owner',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="owner_phone" class="col-sm-2 control-label">Tel&eacute;fono</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('owner_phone',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Correo electr&oacute;nico</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('email',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="comments" class="col-sm-2 control-label">Comentarios</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('comments',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="address_street" class="col-sm-2 control-label">Calle</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('address_street',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="address_number" class="col-sm-2 control-label">N&uacute;mero</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('address_number',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="address_col" class="col-sm-2 control-label">Colonia</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('address_col',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="address_city" class="col-sm-2 control-label">Ciudad</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('address_city',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="address_zip" class="col-sm-2 control-label">C.P.</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('address_zip',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="status_id" class="col-sm-2 control-label">Estatus</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('status_id',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>                <!-- /.box-body -->
              <div class="box-footer">
<?php echo $this->Html->link('<i class="fa fa-arrow-circle-left"></i>&nbsp;Cancelar',array('action' => '/index'),array('class' => 'btn btn-danger', 'escape' => false)); ?>                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i>&nbsp;Guardar</button>
              </div>
              <!-- /.box-footer -->
            <?php echo $this->Form->end(); ?>          </div>
          <!-- /.box -->
        </div>
        <!--/.col (center) -->
      </div>
      <!-- /.row -->
    </section>

<script type="text/javascript">
    $(document).ready(function () {
        //Initialize Select2 Elements
$('#PatientStatusId').select2();
    });
</script>




<section class="content">
<h3>Historial de consultas</h3>
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
				<th>Fecha de consulta</th>
				<th>Nombre del m&eacute;dico</th>
				<th>Motivo de la consulta</th>
				<th>Dx</th>
				<th>Rx</th>
				<th>Comentarios</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($encounters as $encounter): ?>
<tr>
		<td><?php echo h($encounter['Encounter']['id']); ?></td>
		<td><?php echo h($encounter['Encounter']['encounter_date']); ?></td>
		<td><?php echo h($encounter['User']['name']); ?></td>
		<td><?php echo h($encounter['Encounter']['reason']); ?></td>
		<td><?php echo h($encounter['Encounter']['dx']); ?></td>
		<td><?php echo h($encounter['Encounter']['rx']); ?></td>
		<td><?php echo h($encounter['Encounter']['comments']); ?></td>
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