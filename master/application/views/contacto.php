<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>Carmen Libre y Directo</title>


	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo base_url();?>files/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>files/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url();?>files/css/simple-line-icons.css">
	<link rel="stylesheet" href="<?php echo base_url();?>files/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>files/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>files/rs-plugin/css/settings.css">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	
	<div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">

				<header class="site-header">
					<div id="main-header" class="main-header header-sticky">
						<div class="inner-header clearfix">
							<div class="logo">
							<img src="<?php echo base_url();?>files/images/logo.png" height="100px">
								<a href="index-2.html"></a>
							</div>
							<div class="header-right-toggle pull-right hidden-md hidden-lg">
								<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
							</div>
							<nav class="main-navigation pull-right hidden-xs hidden-sm">
								<ul>
									<li><a href="<?php echo base_url();?>index.php/periodico/index">Inicio</a></li>
									<li><a href="#" class="has-submenu">Secciones</a>
										<ul class="sub-menu">
											<li><a href="services.html">Noticia general</a></li>
											<li><a href="<?php echo base_url();?>index.php/periodico/policiaco">Policiaco</a></li>
											<li><a href="<?php echo base_url();?>index.php/periodico/deportes">Deportes</a></li>
											<li><a href="<?php echo base_url();?>index.php/periodico/cultural">Cultural</a></li>
											<li><a href="<?php echo base_url();?>index.php/periodico/social">Sociales</a></li>
											<li><a href="<?php echo base_url();?>index.php/periodico/aviso">Avisos</a></li>
										</ul>
									</li>
									<li><a href="#" class="has-submenu">Noticias</a>
										<ul class="sub-menu">
											<li><a href="<?php echo base_url();?>index.php/periodico/noticianu">Recientes</a></li>
											<li><a href="<?php echo base_url();?>index.php/periodico/noticiapa">Pasadas</a></li>
					
										</ul>
									</li>
									<li><a href="<?php echo base_url();?>index.php/periodico/sobre">Acerca de nosotros</a></li>
	
									</li>
									<li><a href="<?php echo base_url();?>index.php/periodico/contacto">Contacto</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>

				<section class="page-heading wow fadeIn" data-wow-duration="1.5s" style="background-image: url(files/images/01-heading.jpg)">
					<div class="container">
						<div class="page-name">
							<h1>Contactanos</h1>
							<span>Carmen Libre y Directo</span>
						</div>
					</div>
				</section>

				<section class="contact-map-wrapper">
					<div class="container">
						<div class="section-heading">
							<h2>Encuentranos en el mapa</h2>
							<div class="section-dec"></div>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d945.1196700329851!2d-91.81740036319673!3d18.642503726252993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85f10790cea3c44b%3A0x1ae79077ddd6eb3e!2sCalle+19+10%2C+Benito+Ju%C3%A1rez%2C+24180+Cd+del+Carmen%2C+Camp.!5e0!3m2!1ses-419!2smx!4v1502135068805" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>

					</div>
				</section>


				<section class="contact-us">
					<div class="container">
						<div class="section-heading">
							<h2>Envianos un mensaje</h2>
							<div class="section-dec"></div>
						</div>
						<div class="send-message col-sm-12">
							<form id="contact_form" action="<?php echo base_url();?>index.php/periodico/enviar" method="POST" enctype="multipart/form-data">
								<div class=" col-md-4 col-sm-4 col-xs-6">
									<input type="text" class="blog-search-field" name="nombre" placeholder="Tu nombre..." >
								</div>
								<div class="col-md-4 col-sm-4 col-xs-6">
									<input type="text" class="blog-search-field" name="email" placeholder="Tu email..." >
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<input type="text" class="subject" name="asunto" placeholder="Asunto..." >
								</div>
								<div class="col-md-12 col-sm-12">
									<textarea id="message" class="input" name="mensaje" placeholder="Mensaje..."></textarea>
								</div>
								<div class="submit-coment col-md-12">
									<div class="btn-black">
										<input type="submit" value="ENVIAR" id="boton">
									</div>
								</div>
							</form>		
						</div>
					</div>
				</section>

		

                <footer class="footer">
      <div class="three spacing"></div>
	  <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h1>
            <a href="index.html">
            <img src="<?php echo base_url();?>files/images/logo.png" height="100px">
            </a>
          </h1>
          <p></p>
          <div class="spacing"></div>
          <ul class="socials">
            <li>
              <a href="http://facebook.com">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="http://twitter.com">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="http://dribbble.com">
                <i class="fa fa-dribbble"></i>
              </a>
            </li>
            <li>
              <a href="http://tumblr.com">
                <i class="fa fa-tumblr"></i>
              </a>
            </li>
          </ul>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3">
          <div class="spacing"></div>
          <div class="links">
            <h4>Menu</h4>
            <ul>
     								 <li><a href="index-2.html">Inicio</a></li>
									<li><a href="#" class="has-submenu">Secciones</a>
										<ul class="sub-menu">
											<li><a href="services.html">Noticia general</a></li>
											<li><a href="clients.html">Policiaco</a></li>
											<li><a href="clients.html">Deportes</a></li>
											<li><a href="clients.html">Cultural</a></li>
											<li><a href="clients.html">Sociales</a></li>
											<li><a href="clients.html">Avisos</a></li>
										</ul>
									</li>
									<li><a href="#" class="has-submenu">Noticias</a>
										<ul class="sub-menu">
											<li><a href="blog.html">Recientes</a></li>
											<li><a href="blog-grid.html">Pasadas</a></li>
					
										</ul>
									</li>
									<li><a href="about.html">Acerca de nosotros</a></li>
	
									</li>
									<li><a href="contact.html">Contacto</a></li>



            </ul>
          </div>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3">
          <div class="spacing"></div>
          <div class="links">
           
          </div>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3">
          <div class="spacing"></div>
          <h4>Email </h4>
          <p>Pongase en contacto con nosotros </p>
          <form>
            <input class="email-address" placeholder="Deje su mensaje" type="text">
            <input class="button boxed small" type="submit">
          </form>
          <div class="spacing"></div>
        </div>
      </div>
	  </div>
      <div class="two spacing"></div>
    </footer>
				
				<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

			</div>

		</div>

		<nav class="sidebar-menu slide-from-left">
			<div class="nano">
				<div class="content">
					<nav class="responsive-menu">
						<ul>
							<li><a href="index-2.html">Home</a></li>
							<li class="menu-item-has-children"><a href="#">Pages</a>
								<ul class="sub-menu">
									<li><a href="services.html">Services</a></li>
									<li><a href="clients.html">Clients</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children"><a href="#">Blog</a>
								<ul class="sub-menu">
									<li><a href="blog.html">Blog Classic</a></li>
									<li><a href="blog-grid.html">Blog Grid</a></li>
									<li><a href="blog-single.html">Single Post</a></li>
								</ul>
							</li>
							<li><a href="about.html">About</a></li>
							<li class="menu-item-has-children"><a href="#">Works</a>
								<ul class="sub-menu">
									<li><a href="work-3columns.html">Three Columns</a></li>
									<li><a href="work-4columns.html">Four Columns</a></li>
									<li><a href="single-project.html">Single Project</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</nav>

	</div>


	

	<script type="text/javascript" src="<?php echo base_url();?>files/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>files/js/bootstrap.min.js"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="<?php echo base_url();?>files/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo base_url();?>files/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>files/js/plugins.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>files/js/custom.js"></script>

</body>

<!-- Mirrored from torchtemplates.net/html/YOM/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Jun 2015 08:35:04 GMT -->
</html>