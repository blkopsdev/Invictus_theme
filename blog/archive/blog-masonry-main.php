	<?php
global $blog_load_more1, $blog_no_posts1, $css1, $blog_extra_class1;


		if($blog_out == "Masonry4"){
			$inv_blog_column_main = "blog-col-4";  
		}
		elseif($blog_out == "Masonry3")
		{
			$inv_blog_column_main = "blog-col-3";
		}
		else{
			$inv_blog_column_main = "blog-col-2";
		}



 if ( $posts -> have_posts() ) : ?>
	<div  class="blog-column-main-archive blog-element-masonry-main-archive  <?php echo esc_attr($css1);?> <?php echo esc_attr($blog_extra_class1);?>">
	<div class="ajax_posts clearfix">
		<div class="inv-blog-element-masonry-wrapper <?php echo esc_attr($inv_blog_column_main); ?> clearfix inv-blog-element-article-holder">
<div class="grid-sizer"></div>
		<?php while($posts->have_posts()) {
		$posts->the_post(); 


 ?>

	<?php	
			get_template_part( 'blog/archive/blog','masonry-content');
	?>

	<?php } ?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
	</div>
<?php if ( $posts -> have_posts() ) : ?>
<?php $count = $post_count ->post_count; 
if($blog_no_posts1 < $count){ ?>
<div class="invictus-pagination-wrapper col-md-12">
<?php 
	if($blog_load_more1 == "ajax_button"){ ?>
		<div id="default_more_posts_archive" class="blog-load-more-button-holder"><span class="inv_blog_load_more"><span class="loading_button"><?php echo esc_html_e('Load More','invictus'); ?></span><span class="post_loading"><?php echo esc_html_e('Loading...','invictus'); ?></span></span></div>
 <?php	}  
	elseif($blog_load_more1 == "pagination"){
		if (function_exists("insignia_pagination")) {
    insignia_pagination($posts->max_num_pages);
} 
	} 
	elseif($blog_load_more1 == "infinite"){ ?>
		<div id="infinite_scroll_posts_archive" class="blog-load-more-button-holder"><span class="inv_blog_load_more"><?php echo esc_html_e('Loading...','invictus'); ?></span></div>
	<?php } 
?>
	</div>
	<?php 
}
endif; ?>
	</div>
	</div>
