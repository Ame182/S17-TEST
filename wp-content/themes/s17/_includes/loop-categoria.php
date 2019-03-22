
	<h2 class="categoria"><?php echo get_the_title() ?></h2>
	<div class="row items">
    <?php 
    	while ( have_rows('antipastos') ) : the_row();

        // display a sub field value
      	the_sub_field('nombre');
        the_sub_field('imagen');
        the_sub_field('precio');
        the_sub_field('detalle');

      	echo get_template_part('_includes/loop', 'posts');

    endwhile; ?>





