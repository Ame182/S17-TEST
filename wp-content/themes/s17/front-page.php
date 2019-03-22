<?php get_header(); ?>


<!-- Nosotros -->
	<div class="container-fluid" id="us">
		<div class="titulo1 col-md-12">
			<h2><i class="far fa-pizza-slice"></i> NOSOTROS</h2>
		</div>
		<section class="p-0" id="us">
		    <div class="container-fluid">
		      <hr class="my-4">
		      <div class="row no-gutters popup-gallery">

		        <?php
		          $arg = array(
		            'post_type'    => 'nosotros',
		            'posts_per_page' => 6
		          );

		          $get_arg = new WP_Query( $arg );

		          while ( $get_arg->have_posts() ) {
		            $get_arg->the_post();
		          ?>

	            <div class="container-fluid">
            		 <a class="us__inner_background" href="<?php the_post_thumbnail_url( 'large' ); ?>">
	                <?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?>
	                <div class="us__inner">
	                   <h3>
	                   	 <?php the_title() ?>
	                   </h3>
	                   <?php the_content() ?>
                	</div>
             		</a>	
            	</div>
	         </div>
	        </div>
	    </section>
	    <?php } wp_reset_postdata(); ?>
	</div>

<!-- CARTA -->
	<div class="container-fluid" id="menu">
		<div class="row">
			<div class="titulo3 col-md-12">
				<h2><i class="far fa-pizza-slice"></i> MENÚ</h2>
			</div>
			<div class="col-md-12">
				<h2 class="categoria">ANTIPASTOS</h2>
			</div>
  			<?php while ( have_rows('antipastos') ) : the_row();
    // display a sub field value
    		echo get_template_part('_includes/loop', 'posts');
			endwhile; ?>
			
			<div class="col-md-12">
				<h2 class="categoria">ENSALADAS</h2>
			</div>
  			<?php while ( have_rows('ensaladas') ) : the_row();
    // display a sub field value
    		echo get_template_part('_includes/loop', 'posts');
			endwhile; ?>

			<div class="col-md-12">
				<h2 class="categoria">SOPAS</h2>
			</div>
  			<?php while ( have_rows('sopas') ) : the_row();
    // display a sub field value
    		echo get_template_part('_includes/loop', 'posts');
			endwhile; ?>
				
		


			<div class="col-md-12">
				<h2 class="categoria">PIZZA TRADICIONAL</h2>
			</div>
  			<?php while ( have_rows('pizza_tradi') ) : the_row();
    // display a sub field value
    		echo get_template_part('_includes/loop', 'posts');
			endwhile; ?>
				
		

		

			<div class="col-md-12">
				<h2 class="categoria">PIZZAS</h2>
			</div>
  			<?php while ( have_rows('pizzas') ) : the_row();
    // display a sub field value
    		echo get_template_part('_includes/loop', 'posts');
			endwhile; ?>
				
		

		

			<div class="col-md-12">
				<h2 class="categoria">POSTRES</h2>
			</div>
  			<?php while ( have_rows('postres') ) : the_row();
    // display a sub field value
    		echo get_template_part('_includes/loop', 'posts');
			endwhile; ?>
				
		


			<div class="col-md-12">
				<h2 class="categoria">INFUSIONES</h2>
			</div>
  			<?php while ( have_rows('infusiones') ) : the_row();
    // display a sub field value
    		echo get_template_part('_includes/loop', 'posts');
			endwhile; ?>
				
		


			<div class="col-md-12">
				<h2 class="categoria">BEBIDAS</h2>
			</div>
  			<?php while ( have_rows('bebidas') ) : the_row();
    // display a sub field value
    		echo get_template_part('_includes/loop', 'posts');
			endwhile; ?>
				
		
		
	</div>
	</div>





<!-- BOOKING -->
		<div class="container-fluid" id="book">
			<div class="titulo4 col-md-12">
				<h2><i class="far fa-pizza-slice"></i> RESERVAS</h2>
			</div>

		<section class="p-0" id="book">
		    <div class="container-fluid">


		        <?php
		          $arg = array(
		            'post_type'    => 'booking',
		            'posts_per_page' => 6
		          );

		          $get_arg = new WP_Query( $arg );

		          while ( $get_arg->have_posts() ) {
		            $get_arg->the_post();
		          ?>

	            <div class="container-fluid">
            		 <a class="" href="<?php the_post_thumbnail_url( 'large' ); ?>">
	                <?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?>
	                <div class="book_inner">
	                   <h3>
	                   	 <?php the_title() ?>
	                   </h3>
	                   <?php the_content() ?>
                	</div>
             		</a>	
            	</div>
	         </div>
	        </div>
	    </section>
	    <?php } wp_reset_postdata(); ?>
	</div>






<?php get_footer(); ?>