<div class="col-md-3 offset-md-1  img-thumbnail">

	<div class="plato_img">
		<img src="<?php echo get_sub_field('imagen')['url']; ?>" class="img-fluid mb-3"/>
	</div>		
		  
		<h3><?php the_sub_field('nombre');?></h3>
		<h4><?php the_sub_field('precio');?></h4>
		<p><?php the_sub_field('descripcion'); ?></p>
		
</div>

