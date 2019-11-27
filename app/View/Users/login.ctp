<?php // echo $this->Session->flash('auth'); ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<style>

@import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
.login-block{
	background: #3385ff;  /* fallback for old browsers */
	background: -webkit-linear-gradient(to bottom, #ffffff, #d9d9d9);  /* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to bottom, #ffffff, #d9d9d9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	float:left;
	width:100%;
	padding : 50px 0;
}


@media only screen and (max-width:2000px) {
    .banner-sec{background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
}


.container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
.carousel-inner{border-radius:0 10px 10px 0;}
.carousel-caption{text-align:left; left:5%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
.login-sec .copy-text i{color:#FEB58A;}
.login-sec .copy-text a{color:#E36262;}
.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #001133;}
.login-sec h2:after{content:" "; width:100px; height:5px; background:#DDDDDD; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: #DE6262; color:#fff; font-weight:600;}
.banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
.banner-text h2{color:#fff; font-weight:600;}
.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
.banner-text p{color:#fff;}

</style>



<section class="login-block">
    <div class="container">
  <div class="row">
    <div class="col-md-4 login-sec">
        <h2 class="text-center">Pet&acute;s zania Ingreso</h2>
        <?php echo $this->Form->create('User'); ?>
  <div class="form-group has-feedback">
    <label for="UserUsername" class="text-uppercase">Correo</label>
    <?php echo $this->Form->email('username',array("class" => "form-control", "label" => false, "placeholder" => "Correo electr&oacute;nico", "autocomplete" => "off")); ?>
    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
  </div>
  <div class="form-group has-feedback">
    <label for="UserPassword" class="text-uppercase">Contrase&ntilde;a</label>
    <?php echo $this->Form->password('password',array("class" => "form-control", "label" => false, "placeholder" => "Contrase&ntilde;a", "autocomplete" => "off")); ?>
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
  </div>
  
  
  <div class="form-check">
    <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar sesi&oacute;n</button>
  </div>
  
<?php echo $this->Form->end(); ?>

<br>
    <?php echo $this->Html->link('¿Olvidaste t&uacute; contrase&ntilde;a?', array('action' => 'forgotPassword')); ?>

    </div>
    <div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="img/login_slide1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Bienvenido a Pet&acute;s zania</h2>
            <p>.</p>
        </div>  
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/login_slide2.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Bienvenido a Pet&acute;s zania</h2>
            <p>.</p>
        </div>  
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/login_slide3.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Bienvenido a Pet&acute;s zania</h2>
            <p>.</p>
        </div>  
    </div>
  </div>
            </div>     
        
    </div>
  </div>
</div>
</section>
    
