<?php $user = $this->Session->read('Auth.User'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title; ?></title>
        <link rel="apple-touch-icon" sizes="57x57" href="/consola/app/webroot/dist/img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/consola/app/webroot/dist/img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/consola/app/webroot/dist/img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/consola/app/webroot/dist/img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/consola/app/webroot/dist/img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/consola/app/webroot/dist/img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/consola/app/webroot/dist/img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/consola/app/webroot/dist/img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/consola/app/webroot/dist/img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="/consola/app/webroot/dist/img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="144x144" href="/consola/app/webroot/dist/img/favicon/android-icon-144x144.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/consola/app/webroot/dist/img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="72x72" href="/consola/app/webroot/dist/img/favicon/favicon-72x72.png">
        <link rel="icon" type="image/png" sizes="48x48" href="/consola/app/webroot/dist/img/favicon/favicon-48x48.png">
        <link rel="icon" type="image/png" sizes="36x36" href="/consola/app/webroot/dist/img/favicon/favicon-36x36.png">        
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <?php echo $this->Html->css('/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?> 
        <!-- Font Awesome -->
        <?php echo $this->Html->css('/bower_components/font-awesome/css/font-awesome.min.css'); ?>
        <!-- Ionicons -->
        <?php echo $this->Html->css('/bower_components/Ionicons/css/ionicons.min.css'); ?>
        <!-- Theme style -->
        <?php echo $this->Html->css('/dist/css/AdminLTE.min.css'); ?>
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <?php echo $this->Html->css('/dist/css/skins/_all-skins.min.css'); ?>

        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.min.css"/>
        <!-- Default theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/default.min.css"/>
        <!-- Semantic UI theme -->
        <!-- link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/semantic.min.css"/-->
        <!-- Bootstrap theme -->
        <!-- link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/bootstrap.min.css"/-->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <!-- JavaScript -->
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/alertify.min.js"></script>

        <!-- jQuery 3 -->
        <?php echo $this->Html->script("/bower_components/jquery/dist/jquery.min.js"); ?>
        <!-- Bootstrap 3.3.7 -->
        <?php echo $this->Html->script("/bower_components/bootstrap/dist/js/bootstrap.min.js"); ?>
        <!-- SlimScroll -->
        <?php echo $this->Html->script("/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"); ?>
        <!-- FastClick -->
        <?php echo $this->Html->script("/bower_components/fastclick/lib/fastclick.js"); ?>
        <!-- AdminLTE App -->
        <?php echo $this->Html->script("/dist/js/adminlte.min.js"); ?>
        <!-- AdminLTE for demo purposes -->
        <?php echo $this->Html->script("/dist/js/demo.js"); ?>
        <style type="text/css">.error-message{color: red;font-weight: bold;} #flashMessage{display: none}</style>
	
	 <?php echo $this->Html->script(array("daypilot-all.min")); ?>

	 <?php echo $this->Html->css("appointment"); ?>
    </head>
    <body class="sidebar-mini skin-green-light">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <?php 
                echo $this->Html->link($this->Html->tag('span', 'Pet&acute;s zania', array('class'=>'logo-lg') ) . $this->Html->tag('span', 'PZ', array('class'=>'logo-mini')), 
                  array('controller'=>'Companies','action'=>'index'), array('escape'=>false, 'class'=>'logo')); 

                  ?>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!--
                    <div class="navbar-custom-menu">
                       <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-
                       
                    <!-- User Account: style can be found in dropdown.less 
                    <li class="dropdown user user-menu">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <?php echo $this->Html->image('/dist/img/user2-160x160.jpg', array('class' => 'user-image', 'alt' => 'User Image')); ?>
                       <span class="hidden-xs"><?php echo AuthComponent::user('username'); ?></span>
                       </a>
                       <ul class="dropdown-menu">
                    <!-- User image 
                    <li class="user-header">
                    <?php echo $this->Html->image('/dist/img/user2-160x160.jpg', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                       <p>
                    <?php echo AuthComponent::user('username'); ?>
                          <small>Member since Nov. 2012</small>
                       </p>
                    </li>
                    <!-- Menu Body 
                    <li class="user-body">
                       <div class="row">
                          <div class="col-xs-4 text-center">
                             <a href="#">Followers</a>
                          </div>
                          <div class="col-xs-4 text-center">
                             <a href="#">Sales</a>
                          </div>
                          <div class="col-xs-4 text-center">
                             <a href="#">Friends</a>
                          </div>
                       </div>
                    <!-- /.row 
                 </li>
                    <!-- Menu Footer
                    <li class="user-footer">
                       <div class="pull-left">
                          <a href="#" class="btn btn-default btn-flat">Profile</a>
                       </div>
                       <div class="pull-right">
                          <a href="#" class="btn btn-default btn-flat">Sign out</a>
                       </div>
                    </li>
                 </ul>
              </li>
                    <!-- Control Sidebar Toggle Button
                    <li><a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a></li>
                 </ul>
              </div>
                    -->
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="image">
                            <?php echo $this->Html->image('/dist/img/user2-160x160.jpg', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                        </div>
                        <div class="info" style="position:relative; left: 0px;">
                            <p><?php echo AuthComponent::user('username'); ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form 
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form> -->
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">Men&uacute;</li>
                        <?php
                        $menus = array(
                            array(
                                'title' => '<i class="fa fa-home"></i><span>Inicio</span>',
                                'redirect' => array('controller' => 'Patients', 'action' => 'index'),
                                'normalUser' => 1
                            ),
                            array(
                                'title' => '<i class="fa fa-user" aria-hidden="true"></i><span>Usuarios</span>',
                                'redirect' => array('controller' => 'Users', 'action' => 'index'),
                                'normalUser' => 0
                            ),
                            array(
                                'title' => '<i class="fa fa-paw" aria-hidden="true"></i><span>Mascotas</span>',
                                'redirect' => array('controller' => 'Patients', 'action' => 'index'),
                                'normalUser' => 1
                            ),
			    array(
                                'title' => '<i class="fa fa-calendar" aria-hidden="true"></i><span>Citas</span>',
                                'redirect' => array('controller' => 'Appointments', 'action' => 'doctor'),
                                'normalUser' => 1
                            ),
			    array(
                                'title' => '<i class="fa fa-cogs" aria-hidden="true"></i><span>Config Agenda</span>',
                                'redirect' => array('controller' => 'Appointments', 'action' => 'manager'),
                                'normalUser' => 1
                            ),
                            array(
                                'title' => '<i class="fa fa-stethoscope" aria-hidden="true"></i><span>Consultas</span>',
                                'redirect' => array('controller' => 'Encounters', 'action' => 'index'),
                                'normalUser' => 0
                            ),
                            array(
                                'title' => '<i class="fa fa-sign-out" aria-hidden="true"></i><span>Cerrar sesión</span>',
                                'redirect' => array('controller' => 'Users', 'action' => 'logout'),
                                'normalUser' => 1
                            )
                        );
                        if ($user['role'] == 'admin') {
                            foreach ($menus as $menu) {
                                echo "<li>" . $this->Html->link(__($menu['title']), $menu['redirect'], array('escape' => false)) . "</li>";
                            }
                        } else {
                            foreach ($menus as $menu) {
                                if ($menu['normalUser'] == 1) {
                                    echo "<li>" . $this->Html->link(__($menu['title']), $menu['redirect'], array('escape' => false)) . "</li>";
                                }
                            }
                        }
                        ?>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <?php echo $this->Flash->render(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
            <!-- /.content-wrapper -->

            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <?php // echo $this->element('sql_dump');  ?>
                
            </footer>

            <!-- Control Sidebar -->
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->
    </body>
    <script>
        $(document).ready(function () {

            $('.sidebar-menu').tree();

            if ($('#flashMessage').length) {
                var message = $('#flashMessage').html();
                message = message.replace(/&lt;/g, '<');
                message = message.replace(/&gt;/g, '>');
                var hasClassError = $('#flashMessage').hasClass("error");
                var hasClassSuccess = $('#flashMessage').hasClass("success");
                if (hasClassError) {
                    alertify.dialog('errorAlert', function factory() {
                        return{
                            build: function () {
                                var header = '<span class="fa fa-times-circle fa-2x" style="vertical-align:middle;color:#e10000;"></span> Pets zania - Error';
                                this.setHeader(header);
                            }
                        };
                    }, true, 'alert');
                    alertify.errorAlert(message);
                }
                if (hasClassSuccess) {
                    alertify.dialog('successAlert', function factory() {
                        return{
                            build: function () {
                                var header = '<span class="fa fa-check-circle fa-2x" style="vertical-align:middle;color:#1f7d40;"></span> Pets zania - Mensaje';
                                this.setHeader(header);
                            }
                        };
                    }, true, 'alert');
                    alertify.successAlert(message);
                }
            }
        });

    </script>
</html>