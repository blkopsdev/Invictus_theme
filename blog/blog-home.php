<?php
/**
 * Template Name: Homapage Template
 * Template Post Type: post, page, product
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Insignia Themes
 * @subpackage Insignia 
 * @since Insignia 0.1
 */

 get_header(); 


global $blog_load_more1, $blog_no_posts1,$css1, $blog_extra_class1, $blog_gap1;
 if ( $posts -> have_posts() ) : ?>
	<div  class="blog-column-main-archive blog-element-main-archive <?php echo esc_attr($css1);?> <?php echo esc_attr($blog_extra_class1);?> 
">
	<div class="ajax_posts clearfix">
		<div class="inv-blog-element-grid-wrapper inv-blog-element-article-holder" style="margin: 0 -<?php echo esc_html($blog_gap1/2); ?>px;">
<div class="grid-sizer"></div>
		<?php while($posts->have_posts()) {
		$posts->the_post(); 
 ?>
	<?php	
			get_template_part( 'blog/archive/blog','grid-content');  
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

 ?>




