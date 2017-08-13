<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>Carmen libre y directo</title>


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
									


									</li>
										<?php if($this->session->userdata('username')): ?>
										<li><a href="<?=site_url('logincontrolador/logout');?>">Cerrar sesión</a></li>
									<?php else: ?>
										<li><a href="<?=site_url('logincontrolador');?>">Iniciar sesión</a></li>
									<?php endif;?>
								</ul>
							</nav>
						</div>
					</div>
				</header>

				<div class="slider">
					<div class="fullwidthbanner-container">
						<div class="fullwidthbanner">
							<ul>
								<li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
									<img src="<?php echo base_url();?>files/images/peña.jpg" data-fullwidthcentering="on" alt="slide">
									<div class="tp-caption first-line lft tp-resizeme start" data-x="center" data-hoffset="0" data-y="250" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">Y DONDE ESTA MI AGUINALDO </div>
									<div class="tp-caption second-line lfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="340" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">El jefe enrique Peña dice qu elos 3 millones no le alcanza </div>
									<div class="tp-caption slider-btn sfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="510" data-speed="1000" data-start="2200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><a href="#" class="btn btn-slider">Seguir noticia</a></div>
								</li>
								<li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
									<img src="<?php echo base_url();?>files/images/poli.jpg" data-fullwidthcentering="on" alt="slide">
									<div class="tp-caption first-line lft tp-resizeme start" data-x="center" data-hoffset="0" data-y="250" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">LOS PITUFOS HACEN DE LAS SUYAS </div>
									<div class="tp-caption second-line lfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="340" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">El comandante nose que invadio y pidio mordida</div>
									<div class="tp-caption slider-btn sfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="510" data-speed="1000" data-start="2200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><a href="#" class=" second-btn btn btn-slider">Seguir noticia</a></div>
								</li>
								<li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
									<img src="<?php echo base_url();?>files/images/pito.jpg" data-fullwidthcentering="on" alt="slide">
									<div class="tp-caption first-line lft tp-resizeme start" data-x="center" data-hoffset="0" data-y="250" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">Valiente encuentro </div>
									<div class="tp-caption second-line lfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="340" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">Partido entre el selectivo de Quintana Roo </div>
									<div class="tp-caption slider-btn sfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="510" data-speed="1000" data-start="2200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><a href="#" class="btn btn-slider">Seguir noticia</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				
				
				<section class="blog-posts">
					<div class="container">
						<div class="section-heading">
							<h2>Noticias</h2>
							<div class="section-dec"></div>
						</div>
						<div class="blog-item">
							<div class="col-md-4">
								<a href="blog-single.html"><img src="<?php echo base_url();?>files/images/general.jpg" height="200px" alt=""></a>
								<h3><a href="blog-single.html">General</a></h3>
								<span><a href="#">Syam Kesav</a> / <a href="#">6 June 2015</a> / <a href="#">Uncategorized</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit alis quam est leo, imperdiet eget dictum sed, congue non erosa senean sed ligula hendrerit...</p>
								<div class="read-more">
									<a href="blog-single.html">Leer mas</a>
								</div>
							</div>
						</div>
						<div class="blog-item">
							<div class="col-md-4">
								<a href="blog-single.html"><img src="<?php echo base_url();?>files/images/policiaco.jpg" height="200px" alt=""></a>
								<h3><a href="<?php echo base_url();?>index.php/periodico/policiaco">Policiaco</a></h3>
								<span><a href="#">Manohar Raj</a> / <a href="#">6 June 2015</a> / <a href="#">Uncategorized</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit alis quam est leo, imperdiet eget dictum sed, congue non erosa senean sed ligula hendrerit...</p>
								<div class="read-more">
									<a href="<?php echo base_url();?>index.php/periodico/policiaco">Leer mas</a>
								</div>
							</div>
						</div>
						<div class="blog-item">
							<div class="col-md-4">
								<a href="blog-single.html"><img src="<?php echo base_url();?>files/images/politico.jpg" height="200px" alt=""></a>
								<h3><a href="<?php echo base_url();?>index.php/periodico/polic">Politica</a></h3>
								<span><a href="#">Manohar Raj</a> / <a href="#">6 June 2015</a> / <a href="#">Uncategorized</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit alis quam est leo, imperdiet eget dictum sed, congue non erosa senean sed ligula hendrerit...</p>
								<div class="read-more">
									<a href="<?php echo base_url();?>files/images/politico.jpg">Leer mas</a>
								</div>
							</div>
						</div>
							<div class="blog-item">
							<div class="col-md-4">
								<a href="blog-single.html"><img src="<?php echo base_url();?>files/images/deporte.jpg" height="200px" alt=""></a>
								<h3><a href="<?php echo base_url();?>index.php/periodico/deportes">Deportes</a></h3>
								<span><a href="#">Manohar Raj</a> / <a href="#">6 June 2015</a> / <a href="#">Uncategorized</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit alis quam est leo, imperdiet eget dictum sed, congue non erosa senean sed ligula hendrerit...</p>
								<div class="read-more">
									<a href="<?php echo base_url();?>files/images/deporte.jpg">Leer mas</a>
								</div>
							</div>
						</div>
							<div class="blog-item">
							<div class="col-md-4">
								<a href="blog-single.html"><img src="<?php echo base_url();?>files/images/cultural.jpg"  height="200px" alt=""></a>
								<h3><a href="<?php echo base_url();?>index.php/periodico/cultural">Cultural</a></h3>
								<span><a href="#">Manohar Raj</a> / <a href="#">6 June 2015</a> / <a href="#">Uncategorized</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit alis quam est leo, imperdiet eget dictum sed, congue non erosa senean sed ligula hendrerit...</p>
								<div class="read-more">
									<a href="<?php echo base_url();?>index.php/periodico/cultural">Leer mas</a>
								</div>
							</div>
						</div>
							<div class="blog-item">
							<div class="col-md-4">
								<a href="blog-single.html"><img src="<?php echo base_url();?>files/images/aviso.jpg" height="200px" alt=""></a>
								<h3><a href="<?php echo base_url();?>index.php/periodico/aviso">Avisos</a></h3>
								<span><a href="#">Manohar Raj</a> / <a href="#">6 June 2015</a> / <a href="#">Uncategorized</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit alis quam est leo, imperdiet eget dictum sed, congue non erosa senean sed ligula hendrerit...</p>
								<div class="read-more">
									<a href="<?php echo base_url();?>index.php/periodico/aviso">Leer mas</a>
								</div>
							</div>
						</div>


					</div>

				</section>



				
			
				<section class="clients">
					<div class="container">
						<div class="section-heading">
							<h2>Patrocinadores</h2>
							<div class="section-dec"></div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo base_url();?>files/images/01-client.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo base_url();?>files/images/02-client.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo base_url();?>files/images/03-client.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo base_url();?>files/images/04-client.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo base_url();?>files/images/05-client.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo base_url();?>files/images/06-client.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo base_url();?>files/images/07-client.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo base_url();?>files/images/08-client.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo base_url();?>files/images/09-client.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo base_url();?>files/images/10-client.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo base_url();?>files/images/11-client.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<a href="#"><img src="<?php echo base_url();?>files/images/12-client.png" alt=""></a>
							</div>
						</div>
					</div>
				</section>















				




	<section class="portfolio">
					<div class="container">
						<div class="section-heading-white">
							<h2>Noticias recientes</h2>
				          <div class="section-dec"></div>
						  </div>
						 <div class="row">
							<div class="col-md-12">
								<div id="owl-portfolio" class="owl-carousel owl-theme">
								
							
								    <div class="item">
								  		<figure>
				        					<img alt="portfolio" src="<?php echo base_url();?>files/images/peña.jpg">
				        					<figcaption>
				            					<h3>Locavore Brooklyn</h3>
				            					<p>Lorem ipsum dolor sit amet consectetur.</p>
				        					</figcaption>
				    					</figure>								    
				    				</div>
				    				<div class="item">
								  		<figure>
				        					<img alt="portfolio" src="<?php echo base_url();?>files/images/poli.jpg">
				        					<figcaption>
				            					<h3>Meggings Mixtape</h3>
				            					<p>Lorem ipsum dolor sit amet consectetur.</p>
				        					</figcaption>
				    					</figure>								    
				    				</div>
								    <div class="item">
								  		<figure>
				        					<img alt="portfolio" src="<?php echo base_url();?>files/images/pito.jpg">
				        					<figcaption>
				            					<h3>Normcore Dreamcatcher</h3>
				            					<p>Lorem ipsum dolor sit amet consectetur.</p>
				        					</figcaption>
				    					</figure>								    
				    				</div>
								</div>
							</div>
						</div>
						<div class="owl-navigation">
						  <a class="btn prev fa fa-angle-left"></a>
						  <a class="btn next fa fa-angle-right"></a>
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
							<li><a href="<?php echo base_url();?>index.php/periodico/index">Inicio</a></li>
							<li class="menu-item-has-children"><a href="#">Secciones</a>
								<ul class="sub-menu">
								<li><a href="services.html">Noticia general</a></li>
											<li><a href="<?php echo base_url();?>index.php/periodico/policiaco">Policiaco</a></li>
											<li><a href="<?php echo base_url();?>index.php/periodico/deportes">Deportes</a></li>
											<li><a href="<?php echo base_url();?>index.php/periodico/cultural">Cultural</a></li>
											<li><a href="<?php echo base_url();?>index.php/periodico/social">Sociales</a></li>
											<li><a href="<?php echo base_url();?>index.php/periodico/aviso">Avisos</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children"><a href="#">Noticias</a>
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
</html>