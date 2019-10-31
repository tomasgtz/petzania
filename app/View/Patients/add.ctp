
<?php 
echo $this->Html->script('/plugins/iCheck/icheck.min.js');
echo $this->Html->css('/plugins/iCheck/all.css');
echo $this->Html->css('/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css');
echo $this->Html->script('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');
echo $this->Html->css('/bower_components/select2/dist/css/select2.min.css');
echo $this->Html->script('/bower_components/select2/dist/js/select2.full.min.js');
?><!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Alta de mascota</h1>    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li><?php echo $this->Html->link("Mascotas",array("action"=>"/index")); ?></li>
        <li class="active">add</li>    </ol>    
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
            <?php echo $this->Form->create('Patient',array('class' => 'form-horizontal')); ?>
            
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