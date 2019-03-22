<?php get_header(); ?>

<div class="container">
	<div class="row">
		<?php 
			$arg = array(
				'post_type' => 'post' ,
				'posts_per_page' => -1
			);

			$get_arg = new WP_Query( $arg );

			while ( $get_arg->have_posts ()) {
				$get_arg->the_post();
		?>

		<div class="col-md-3 offset-md-1">
			<?php the_post_thumbnail('custom-size-blog', array('class'=> 'img-fluid mb-3')) ?>
			<h3><?php the_title() ?></h3>
			<h4><?php ?></h4>
			<p>Descripcion</p>
			<img src="" alt=""> 
				
		</div>

		<?php } wp_reset_postdata(); ?>
	</div>
</div>
	
<?php get_footer(); ?>
