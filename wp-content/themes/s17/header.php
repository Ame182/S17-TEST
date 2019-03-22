<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset') ?>">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title><?php bloginfo('name'); ?></title>
	    <?php wp_head() ?>
	</head>

<body>
	<?php
 		$custom_logo_id = get_theme_mod( 'custom_logo' );
 		$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	?>

	<header>
<!-- navbar-->
		<div class="navbar">
			<nav class="navbar navbar-light bg-light">
			  <a class="navbar-brand" href="#">
			    <img src="<?php echo $logo[0]; ?>" class="logo" width="180" height="40" alt="IlFontiDiModerna">
			  </a>
			  <ul class="menu-list list-inline text-xs-right">
			  	<li class="list-inline-item">
			  		<a data-scroll href="#">INICIO</a>	  		
			  	</li>
			  	<li class="list-inline-item">
			  		<a data-scroll href="#us">NOSOTROS</a>	  		
			  	</li>
			  	<li class="list-inline-item">
			  		<a data-scroll href="#menu">MENU</a>
			  	</li>
			  	<li class="list-inline-item">
			  		<a data-scroll href="#book">RESERVAS</a>
			  	</li>
			  		<li class="list-inline-item">
			  		<a data-scroll href="#contact">CONTACTO</a>
			  	</li>
			  </ul>
			</nav>
		</div>
<!-- Termina navbar-->
		<img src="<?php echo get_template_directory_uri();?>/assets/img/sitio/pizza.jpg" class="fondo" alt="comida italiana">
		<div class="container-fluid banner">
			<div class="row col-md-8">
				<img src="<?php echo $logo[0]; ?>" class="logo" width="30%" alt="IlFontiDiModerna">
				<h2>LOS SABORES DE ITALIA</h2>
			</div>
			
		</div>


	</header>