
<?php 
echo $this->Html->script('/plugins/iCheck/icheck.min.js');
echo $this->Html->css('/plugins/iCheck/all.css');
echo $this->Html->css('/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css');
echo $this->Html->script('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');
echo $this->Html->css('/bower_components/select2/dist/css/select2.min.css');
echo $this->Html->script('/bower_components/select2/dist/js/select2.full.min.js');
?><!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Alta de usuario</h1>    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li><?php echo $this->Html->link("Usuarios",array("action"=>"/index")); ?></li>
        <li class="active">Nuevo</li>    </ol>    
</section>

<section class="content">
      <div class="row">
        <!-- center column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Alta de registro</h3>            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <br>
            <?php echo $this->Form->create('User',array('class' => 'form-horizontal')); ?>

	    		    <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">Nombre</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('name',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>
            
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">Correo</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('username',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-2 control-label">Contrase&ntilde;a</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('password',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>
			    <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">AM - Incio de consulta</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('morning_shift_starts',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>
			    <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">AM - Fin de consulta</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('morning_shift_ends',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>
			    <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">PM - Incio de consulta</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('afternoon_shift_starts',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>
			    <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">PM - Fin de consulta</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('afternoon_shift_ends',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="role" class="col-sm-2 control-label">Rol</label>
                                    <div class="col-sm-6 required">
                                        <?php echo $this->Form->input('role',array('class' => 'form-control', 'label' => false)); ?>
                                    </div>
                            </div>               <!-- /.box-body -->
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