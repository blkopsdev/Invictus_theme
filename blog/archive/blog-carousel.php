	<?php

   global $css1, $blog_extra_class1;

 if ( $posts -> have_posts() ) : ?>
	<div  class="blog-column-main-archive blog-element-main-archive <?php echo esc_attr($css1);?> <?php echo esc_attr($blog_extra_class1);?>">
	<div>
		<article class="blog-3-column ensign-carousel-slider slider blog-carousel-element">

		<?php while($posts->have_posts()) {
		$posts->the_post(); 
 ?>

	<?php	


			get_template_part( 'blog/archive/blog','grid-content');

	?>
	<?php } ?>
	<?php endif; ?>

	<?php wp_reset_postdata(); ?>



	</article>
	</div>
	</div>

