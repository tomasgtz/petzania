
<?php 
echo $this->Html->script('/plugins/iCheck/icheck.min.js');
echo $this->Html->css('/plugins/iCheck/all.css');
echo $this->Html->css('/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css');
echo $this->Html->script('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');
echo $this->Html->css('/bower_components/select2/dist/css/select2.min.css');
echo $this->Html->script('/bower_components/select2/dist/js/select2.full.min.js');
?><!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Nueva consulta</h1>    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li><?php echo $this->Html->link("Consultas",array("action"=>"/index")); ?></li>
        <li class="active">Agregar</li>    </ol>    
</section>

<section class="content">
      <div class="row">
        <!-- center column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Registro de una nueva consulta</h3>            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <br>
            <?php echo $this->Form->create('Encounter',array('class' => 'form-horizontal')); ?>
            
                            <div class="form-group">
                                <label for="patient_id" class="col-sm-2 control-label">Mascota</label>
                                    <div class="col-sm-6 ">
                                        <?php echo $this->Form->input('patient_name',array('type'=> 'text', 'readOnly' => 'readOnly', 'class' => 'form-control', 'label' => false, 'value' => $patient['Patient']['pet_name'])); ?>
					<?php echo $this->Form->input('patient_id',array('type'=> 'hidden', 'value' => $patient['Patient']['id'])); ?>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="encounter_date" class="col-sm-2 control-label">Fecha de consulta</label>
                                    <div class="col-sm-6">
                                        <?php echo $this->Form->input('encounter_date',array('required'=> 'false', 'type'=> 'datetime-local', 'class' => 'form-control', 'label' => false, 'value' => $current_datetime)); ?>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="user_id" class="col-sm-2 control-label">Nombre del m&eacute;dico</label>
                                    <div class="col-sm-6 ">
                                        <?php echo $this->Form->input('user_name',array('type'=> 'text', 'class' => 'form-control', 'readOnly' => 'readOnly', 'label' => false, 'value' => $user['User']['name'])); ?>
					<?php echo $this->Form->input('user_id',array('type'=> 'hidden', 'value' => $user['User']['id'])); ?>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="reason" class="col-sm-2 control-label">Motivo de la consulta</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('reason',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="dx" class="col-sm-2 control-label">Dx</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('dx',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="rx" class="col-sm-2 control-label">Rx</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('rx',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="comments" class="col-sm-2 control-label">Comentarios</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('comments',array('class' => 'form-control', 'label' => false)); ?>
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
            });
</script>