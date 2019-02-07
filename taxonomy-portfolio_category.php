<?php get_header(); ?>

<?php

global $ins_opt;

$main_menu_height = $ins_opt['ins-opt-menu-height'];
$menu_position = $ins_opt['opt_content_position'];
if($menu_position == 2){
$inv_under_header = $main_menu_height;
} else{
$inv_under_header = '0';
} 

?>

<section id="content" role="main">
<header class="header">
<?php 
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>
<div class="archive-port-main-header-wrapper">
<div class="archive-port-header">

</div>
<div class="archive-port-banner">
<div class="inv-under-header-main" style="height: <?php echo esc_html($inv_under_header);?>px"></div>
		<h3 class="archive-port-title"><?php echo esc_html($term->name); ?></h3>
<?php
global $ins_opt,$port_load_more1;
$bread = $ins_opt['ins-opt-archive-port-breadcrumbs'];
if($bread == 1){
 if (function_exists('insignia_breadcrumbs')) insignia_breadcrumbs(); } ?>
	</div>
</div>
<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
</header>
<div class="container">
<div class="inv-portfolio-empty-space" style="height:80px;"></div>
<div class="inv-portfolio-element-main-wrapper inv-portfolio-wapper inv-portfolio-hover-2-wrapper clearfix ">
<div class="portfolio-article-holder clearfix">
<?php

	if ( have_posts() ) :
	while(have_posts()) {
	the_post(); 
?>

	<?php global $post;
$image_size = 'large';
 ?>
<article style="padding: 0 15px; margin-bottom:30px;" class="col-md-4 col-lg-4 col-sm-6 col-xs-12  inv-portfolio-hover-1 inv-portfolio-item-holder">
	<div class="inv-portfolio-hover-1-content"> 
		<span class="inv-portfolio-hover-1-overlay"></span> 
		
		<div class="inv-portfolio-hover-1-thumb" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url($post->ID,$image_size)); ?>');"></div>
		
		<div class="inv-portfolio-hover-1-entry-header" style="background-color: #fff;">
			<span class="inv-portfolio-hover-1-cats"><?php $terms = get_the_terms( $post->ID, 'portfolio_category' );
			if ( !empty( $terms ) ){
				foreach ( $terms as $term ) { ?>
						<a href=<?php echo esc_url(get_term_link($term)) ?>><span> <?php echo esc_html($term->name) ?> </span></a>
				<?php  }
				} ?></span>
			<h4 class="inv-portfolio-hover-1-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h4> 
		</div>
	</div>
</article>

	<?php } ?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
</div>
<div class="invictus-pagination-wrapper col-md-12">
<?php
		if (function_exists("insignia_pagination")) {
    insignia_pagination($posts->max_num_pages);
	} 	
?>
</div>

</div>
</div>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>