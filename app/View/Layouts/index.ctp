<!DOCTYPE html>
<html lang="es">

<head>
	<title>Pets'zania | Inicio </title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Petszania, veterinaria, Tampico" />
	<script>
		addEventListener("load", function () {
				setTimeout(hideURLbar, 0);
			}, false);
	
			function hideURLbar() {
				window.scrollTo(0, 1);
			}


		</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<?php echo $this->Html->css('template/bootstrap.css'); ?>
	<?php echo $this->Html->css('template/css_slider.css', ['type'=>'text/css','rel'=>'stylesheet','media'=>'all']); ?>
	<?php echo $this->Html->css('template/style.css', ['type'=>'text/css','media'=>'all']); ?>
	<?php echo $this->Html->css('template/font-awesome.min.css', ['rel'=>'stylesheet']); ?>


	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou&amp;subset=chinese-simplified" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<div class="header-wthree-top-w3layouts d-md-flex justify-content-between align-items-center py-3 px-xl-5 px-lg-3 px-2">
					<!-- logo -->
					<h1 class="logo">
						<a href="/">Pet's zania</a>
					</h1>
					<!-- //logo -->
					<!-- menu -->
					<ul id="menu">
						<li>
							<input id="check02" type="checkbox" name="menu" />
							<label for="check02"><span class="fa fa-bars" aria-hidden="true"></span></label>
							<ul class="submenu">
								<li><a href="/" class="active">Inicio</a></li>
								<li><a href="appointments"><i class ='fa fa-calendar' aria-hidden='true'></i> Agenda tu cita</a></li>
								<li><a href="#services"><i class ='fa fa-handshake-o' aria-hidden='true'></i> Nuestros servicios</a></li>
								<li><?php echo $this->Html->link( "<i class ='fa fa-user' aria-hidden='true'></i> Ingresa", 
									array(
										'controller' => 'users',
										'action' => 'login'
									), array('escape' => false)
								); ?></li>
							</ul>
						</li>
					</ul>
					<!-- //menu -->
				</div>
			</div>
		</header>
		<!-- //header -->

		<!-- banner -->
		<div class="banner_w3lspvt">
			<div class="csslider infinity" id="slider1">
				<input type="radio" name="slides" checked="checked" id="slides_1" />
				<input type="radio" name="slides" id="slides_2" />
				<input type="radio" name="slides" id="slides_3" />
				<input type="radio" name="slides" id="slides_4" />
				<ul class="banner_slide_bg">
					<li>
						<div class="container-fluid">
							<div class="w3ls_banner_txt">
								<h3 class="w3ls_pvt-title text-wh text-uppercase let mb-2">Cl&iacute;nica veterinaria y estetica.</h3>
								<p>Enfocados en el cuidado integral de tu mejor amigo. Siempre mejorando para brindarles la mejor atenci&oacute;n y la mejor calidad en nuestros servicios.</p>
								<a href="appointments" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Agenda. &iexcl;Ya!</a>
							</div>
						</div>
					</li>
					<li>
						<div class="container-fluid">
							<div class="w3ls_banner_txt">
								<h3 class="w3ls_pvt-title text-wh text-uppercase let mb-2">Trae a tu mascota a ponerlo m&aacute;s guapo de lo que ya es</h3>
								<p>El equipo de Pet's zania agradece tu preferencia.</p>
								<a href="appointments" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Agenda. &iexcl;Ya!</a>
							</div>
						</div> 
					</li>
					<li>
						<div class="container-fluid">
							<div class="w3ls_banner_txt">
								<h3 class="w3ls_pvt-title text-wh text-uppercase let mb-2">Hospedaje</h3>
								<p>&iquest;No tienes donde dejar a tu mascota? Ven, nosotros cuidaremos de &eacute;l durante tu ausencia.</p>
								<a href="appointments" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Agenda. &iexcl;Ya!</a>
							</div>
						</div>
					</li>
				</ul>
				<div class="arrows">
					<label for="slides_1"></label>
					<label for="slides_2"></label>
					<label for="slides_3"></label>
				</div>
			</div>
		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->

	<!-- about 
	<div class="popular-wthree py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle mb-sm-5 mb-4 text-bl text-center font-weight-bold">Welcome to Doggo Website</h3>
			<div class="row py-xl-4 text-center">
				<div class="col-sm-4 popular-wthree-grid">
					<img src="img/template/ab3.jpg" class="img-fluid" alt="" />
					<div class="popular-wthree-text">
						<h5>Beautiful</h5>
					</div>
				</div>
				<div class="col-sm-4 popular-wthree-grid my-sm-0 my-4">
					<img src="img/template/ab2.jpg" class="img-fluid" alt="" />
					<div class="popular-wthree-text">
						<h5>Love</h5>
					</div>
				</div>
				<div class="col-sm-4 popular-wthree-grid">
					<img src="img/template/ab1.jpg" class="img-fluid" alt="" />
					<div class="popular-wthree-text">
						<h5>Care</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	
	<div class="wthree-about-bot-grid">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 grid1-agile-new1">
				</div>
				<div class="col-md-6 inner-sub bg-li">
					<div class="px-xl-5 px-sm-4">
						<h3>We really care about our dogs since their birth.</h3>
						<a href="#" class="link-w3l1 btn button-style mt-md-5 mt-4">Read More</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 inner-sub bg-li text-md-right mb-md-0 mb-5">
					<div class="px-xl-5 px-sm-4">
						<h3>We guarantee you and your dog's happiness.</h3>
						<a href="#" class="link-w3l1 btn button-style mt-md-5 mt-4">Read More</a>
					</div>
				</div>
				<div class="col-md-6 grid1-agile-new2">
				</div>
			</div>
		</div>
	</div>
	about bottom grids -->

	<!-- services -->
	<div class="serives-agile py-5" id="services">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle mb-sm-5 mb-4 text-bl text-center font-weight-bold">Nuestros servicios</h3>
			<div class="row welcome-bottom text-center pt-xl-4">
				<div class="col-md-4 welcome-grid">
					<i class="fa fa-stethoscope"></i>
					<h4>Servicio m&eacute;dico veterinario</h4>
				</div>
				<div class="col-md-4 welcome-grid my-md-0 my-sm-5 my-4">
					<i class="fa fa-thermometer-quarter"></i>
					<h4>Vacunas y desparasitaciones</h4>
				</div>
				<div class="col-md-4 welcome-grid">
					<i class="fa fa-flask"></i>
					<h4>Laboratorios y cirug&iacute;as</h4>
				</div>
				<div class="col-md-4 welcome-grid">
					<i class="fa fa-shower"></i>
					<h4>Est&eacute;tica y limpieza dental</h4>
				</div>
				<div class="col-md-4 welcome-grid">
					<i class="fa fa-hotel"></i>
					<h4>Hospedaje</h4>
				</div>
				<div class="col-md-4 welcome-grid">
					<i class="fa fa-spoon"></i>
					<h4>Medicamentos, alimentos y accesorios</h4>
				</div>
			</div>
		</div>
	</div>
	<!-- services -->

	<!-- team 
	<div class="team py-5 text-center" id="trainers">
		<div class="container pb-xl-5 pb-lg-3">
			<h3 class="tittle mb-sm-5 mb-4 text-bl text-center font-weight-bold">Our Trainers</h3>
			<div class="row team-bottom pt-xl-4">
				<div class="col-lg-3 col-sm-6 team-grid">
					<img src="img/template/t1.jpg" class="img-fluid" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Mack Joe</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-facebook f1" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-twitter f2" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-google-plus f3" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 team-grid mt-sm-0 mt-5">
					<img src="img/template/t3.jpg" class="img-fluid" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Cruz Deo</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-facebook f1" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-twitter f2" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-google-plus f3" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 team-grid mt-lg-0 mt-5">
					<img src="img/template/t2.jpg" class="img-fluid" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Rochy Jae</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-facebook f1" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-twitter f2" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-google-plus f3" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 team-grid  mt-lg-0 mt-5">
					<img src="img/template/t4.jpg" class="img-fluid" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Rojo Poy</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-facebook f1" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-twitter f2" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-google-plus f3" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row team-bottom mt-5 pt-lg-4">
				<div class="col-lg-3 col-sm-6 team-grid">
					<img src="img/template/t5.jpg" class="img-fluid" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Cruz Deo</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-facebook f1" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-twitter f2" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-google-plus f3" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 team-grid mt-sm-0 mt-5">
					<img src="img/template/t6.jpg" class="img-fluid" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Mack Joe</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-facebook f1" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-twitter f2" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-google-plus f3" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 team-grid mt-lg-0 mt-5">
					<img src="img/template/t7.jpg" class="img-fluid" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Rojo Poy</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-facebook f1" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-twitter f2" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-google-plus f3" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 team-grid  mt-lg-0 mt-5">
					<img src="img/template/t8.jpg" class="img-fluid" alt="">
					<div class="caption">
						<div class="team-text">
							<h4>Rochy Jae</h4>
						</div>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-facebook f1" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-twitter f2" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-google-plus f3" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	 //team -->

	<!-- stats 
	<div class="stats py-5">
		<div class="container-fluid py-xl-5 py-lg-3">
			<div class="row stats-agile text-center py-4">
				<div class="col-lg-2 col-md-3 stats-grid">
					<i class="fa fa-smile-o" aria-hidden="true"></i>
					<h4 class="numscroller">85</h4>
					<p>Happy Customers<p>
				</div>
				<div class="col-lg-2 col-md-3 stats-grid my-md-0 my-4">
					<i class="fa fa-trophy" aria-hidden="true"></i>
					<h4 class="numscroller">95</h4>
					<p>Awards Won</p>
				</div>
				<div class="col-lg-2 col-md-3 stats-grid">
					<i class="fa fa-bullhorn" aria-hidden="true"></i>
					<h4 class="numscroller">80</h4>
					<p>Popularity</p>
				</div>
				<div class="col-lg-6 col-md-3 stats-grid"></div>
			</div>
		</div>
	</div>
	//stats -->

	<!-- news 
	<div class="news py-5" id="news">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle mb-sm-5 mb-4 text-bl text-center font-weight-bold">Latest News</h3>
			<div class="row news-grids pt-xl-4">
				<div class="col-lg-5 text-lg-left text-center">
					<img src="img/template/blog1.jpg" alt="" class="img-fluid" />
				</div>
				<div class="col-lg-7 news-wthreegrid mt-lg-0 mt-5">
					<div class="news-grid-left">
						<h6>March 7th 2018</h6>
						<a href="#" class="text-news-st">Adipiscing elit sed do eiusmod tempor</a>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. Sed ut
							perspiciatis
							unde doloremque laudantium.</p>
						<a href="#" class="news-button btn">Read More</a>
					</div>
					<div class="news-grid-left mt-xl-5 mt-lg-4 mt-5">
						<h6>March 12th 2018</h6>
						<a href="#" class="text-news-st">Minima veniam, quis nostrum ullam</a>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. Sed ut
							perspiciatis
							unde doloremque laudantium.</p>
						<div class="news-button">
							<a href="#" class="news-button btn">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	 //news -->

	<!-- gallery 
	<div class="gallery py-5" id="gallery">
		<div class="container pb-xl-5 pb-lg-3">
			<h3 class="tittle mb-sm-5 mb-4 text-bl text-center font-weight-bold">Dog Breeds</h3>
			<div class="news-grids pb-lg-5 text-center">
				<div class="row">
					<div class="col-md-4 gal-img">
						<a href="#gal1" title="Pomeranian"><img src="img/template/g1.jpg" alt="gallery" class="img-fluid"></a>
					</div>
					<div class="col-md-4 gal-img my-md-0 my-4">
						<a href="#gal2" title="Rottweiler"><img src="img/template/g2.jpg" alt="gallery" class="img-fluid"></a>
					</div>
					<div class="col-md-4 gal-img">
						<a href="#gal3" title="Maltese dog"><img src="img/template/g3.jpg" alt="gallery" class="img-fluid"></a>
					</div>
				</div>
				<div class="row my-4">
					<div class="col-md-4 gal-img">
						<a href="#gal4" title="Poodle"><img src="img/template/g4.jpg" alt="gallery" class="img-fluid"></a>
					</div>
					<div class="col-md-4 gal-img my-md-0 my-4">
						<a href="#gal5" title="Retriever"><img src="img/template/g5.jpg" alt="gallery" class="img-fluid"></a>
					</div>
					<div class="col-md-4 gal-img">
						<a href="#gal6" title="Chihuahua"><img src="img/template/g6.jpg" alt="gallery" class="img-fluid"></a>
					</div>
				</div>
				<div class="row my-md-0 my-4">
					<div class="col-md-4 gal-img">
						<a href="#gal7" title="Dachshund"><img src="img/template/g7.jpg" alt="gallery" class="img-fluid"></a>
					</div>
					<div class="col-md-4 gal-img my-md-0 my-4">
						<a href="#gal8" title="Beagle"><img src="img/template/g8.jpg" alt="gallery" class="img-fluid"></a>
					</div>
					<div class="col-md-4 gal-img">
						<a href="#gal9" title="Bulldog"><img src="img/template/g9.jpg" alt="gallery" class="img-fluid"></a>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- popup-->
	<div id="gal1" class="popup-effect animate">
		<div class="popup">
			<img src="img/template/g1.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Pomeranian</h5>
			<p class="mt-3">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal2" class="popup-effect animate">
		<div class="popup">
			<img src="img/template/g2.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Rottweiler</h5>
			<p class="mt-3">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal3" class="popup-effect animate">
		<div class="popup">
			<img src="img/template/g3.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Maltese dog</h5>
			<p class="mt-3">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup3 -->
	<!-- popup-->
	<div id="gal4" class="popup-effect animate">
		<div class="popup">
			<img src="img/template/g4.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Poodle</h5>
			<p class="mt-3">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal5" class="popup-effect animate">
		<div class="popup">
			<img src="img/template/g5.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Retriever</h5>
			<p class="mt-3">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal6" class="popup-effect animate">
		<div class="popup">
			<img src="img/template/g6.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Chihuahua</h5>
			<p class="mt-3">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal7" class="popup-effect animate">
		<div class="popup">
			<img src="img/template/g7.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Dachshund</h5>
			<p class="mt-3">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal8" class="popup-effect animate">
		<div class="popup">
			<img src="img/template/g8.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Beagle</h5>
			<p class="mt-3">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal9" class="popup-effect animate">
		<div class="popup">
			<img src="img/template/g9.jpg" alt="Popup Image" class="img-fluid" />
			<h5 class="text-name-pop mt-4">Bulldog</h5>
			<p class="mt-3">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- //gallery -->

	<!-- testimonials 
	<div class="testimonials py-5" id="testimonials">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle mb-sm-5 mb-4 text-bl text-center font-weight-bold">What Clients Say</h3>
			<div class="w3_testimonials_grids pt-xl-4">
				<div class="row item-owl">
					<div class="col-md-3 col-sm-4 img-agile text-center">
						<img src="img/template/te1.jpg" class="img-fluid" alt="" />
						<h6>Michael Paul</h6>
					</div>
					<div class="col-md-9 col-sm-8 mt-sm-0 mt-4">
						<div class="test-review">
							<p>
								<i class="fa fa-quote-left" aria-hidden="true"></i> Consetetur sadipscing elitr, sed diam nonumy eirmod
								tempor
								invidunt ut labore et dolore magna aliquyam erat,
								sed diam voluptua.
								<i class="fa fa-quote-right" aria-hidden="true"></i>
							</p>
						</div>
					</div>
				</div>
				<div class="row item-owl my-5">
					<div class="col-md-9 col-sm-8 text-sm-right">
						<div class="test-review">
							<p>
								<i class="fa fa-quote-left" aria-hidden="true"></i> Consetetur sadipscing elitr, sed diam nonumy eirmod
								tempor
								invidunt ut labore et dolore magna aliquyam erat,
								sed diam voluptua.
								<i class="fa fa-quote-right" aria-hidden="true"></i>
							</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 img-agile text-center mt-sm-0 mt-4">
						<img src="img/template/te2.jpg" class="img-fluid" alt="" />
						<h6>Michael Paul</h6>
					</div>
				</div>
				<div class="row item-owl">
					<div class="col-md-3 col-sm-4 img-agile text-center">
						<img src="img/template/te3.jpg" class="img-fluid" alt="" />
						<h6>Michael Paul</h6>
					</div>
					<div class="col-md-9 col-sm-8 mt-sm-0 mt-4">
						<div class="test-review">
							<p>
								<i class="fa fa-quote-left" aria-hidden="true"></i> Consetetur sadipscing elitr, sed diam nonumy eirmod
								tempor
								invidunt ut labore et dolore magna aliquyam erat,
								sed diam voluptua.
								<i class="fa fa-quote-right" aria-hidden="true"></i>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //testimonials -->

	<!-- contact 
	<div class="contact py-5" id="mail">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle mb-sm-5 mb-4 text-bl text-center font-weight-bold">Mail Us</h3>
			<form action="#" method="post" class="pt-xl-4">
				<div class="row">
					<div class="col-md-6 contact-left">
						<input type="text" name="Name" placeholder="Your Name" required="">
						<input type="email" name="Email" placeholder="Email" required="">
						<input type="text" name="Mobile Number" placeholder="Mobile Number" required="">
					</div>
					<div class="col-md-6 contact-right mt-md-0 mt-4">
						<textarea name="Message" placeholder="Message" required=""></textarea>
						<button type="submit" class="btn">Submit</button>
					</div>
				</div>
			</form>
			<div class="row map-pos mt-5 pt-lg-5">
				<div class="col-lg-4 address-row">
					<div class="row">
						<div class="col-3 address-left text-center">
							<span class="fa fa-map-marker"></span>
						</div>
						<div class="col-9 address-right">
							<h5>Visit Us</h5>
							<p>Bmr St, Canada, New York, USA</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 address-row w3-agileits my-lg-0 my-4">
					<div class="row">
						<div class="col-3 address-left text-center">
							<span class="fa fa-envelope-o"></span>
						</div>
						<div class="col-9 address-right">
							<h5>Mail Us</h5>
							<p>
								<a href="mailto:info@example.com"> mail@example.com</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 address-row">
					<div class="row">
						<div class="col-3 address-left text-center">
							<span class="fa fa-phone"></span>
						</div>
						<div class="col-9 address-right">
							<h5>Call Us</h5>
							<p>+01 222 333 4444</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	 //contact -->

	<!-- footer -->
	<div class="footer-w3ls py-4">
		<div class="container py-xl-5 py-lg-3">
			<div class="agileits_w3layouts_logo logo2">
				<h2>
					<a href="/">Pet's zania</a>
				</h2>
				<div class="w3social-icons">
					<ul>
						<li>
							<a href="https://www.facebook.com/yopetszania/" target="_blank">
								<i class="fa fa-facebook"></i>
							</a>
						</li>
						
					</ul>
				</div>
			</div>
			<div class="row agileits_w3layouts_footer_grids">
				<div class="col-lg-4 agileits_w3layouts_footer_grid">
					<h3>Ll&aacute;manos</h3>
					<ul>
						<li><span>Tel. :</span> 833 445 4523</li>
						<li><span>Horario:</span> 8:30 - 19:30</li>
					</ul>
				</div>
				<div class="col-lg-4 agileits_w3layouts_footer_grid my-lg-0 my-5">
					<h3>Direcci&oacute;n</h3>
					<p>Rosalio Bustamante 903
						<i>Col. An&aacute;huac</i>
					</p>
				</div>
				<div class="col-lg-4 agileits_w3layouts_footer_grid">
					<h3>Agenda tu cita</h3>
					<ul>
						<li>
							<span>Aqu&iacute; :</span>
							<a href="appointments">Citas</a>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- copyright -->
	<div class="wthree_copy_right">
		<div class="container">
			<p>&copy; 2019 Petszania. Todos los derechos reservados </a>
			</p>
		</div>
	</div>
	<!-- //copyright -->
	<!-- //footer -->
	<!-- move top icon -->
	<a href="#home" class="move-top text-center"></a>
	<!-- //move top icon -->


</body>

</html>