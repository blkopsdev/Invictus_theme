<?php
get_header();
global $ins_opt;
$cat_id = get_query_var('cat');
?>
<?php
global $ins_opt;

$port_load_more = $ins_opt['ins-opt-archive-port-pagination'];
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
		<div class="archive-port-main-header-wrapper">
			<div class="archive-port-header">

			</div>

			<div class="archive-blog-banner">
			<div class="container">

			<div class="inv-under-header-main" style="height: <?php echo esc_html($inv_under_header);?>px"></div>
			<h3 class="archive-port-title"><?php echo esc_html_e('Portfolio','invictus'); ?></h3>
			
			</div>
			</div>
		</div>
	</header>

	<?php if(isset($ins_opt['ins-opt-archive-port-post-per-page']) && !empty($ins_opt['ins-opt-archive-port-post-per-page'])){  
	$pop = $ins_opt['ins-opt-archive-port-post-per-page']; 
	 }else {$pop = "-1";} ?>


<div class="container inv-portfolio-main-archive">
<div class="inv-portfolio-element-main-wrapper inv-portfolio-wapper inv-portfolio-hover-1-wrapper clearfix" style="margin: 0 -20px;">
<div class="inv-portfolio-element-holder">
<div class="portfolio-article-holder clearfix">
<?php
        $postsPerPage = $pop;
$query = array(
    'post_type' => 'portfolio',
 'posts_per_page' => $postsPerPage,
'paged'=>$paged
);
$loop = new WP_Query($query);
if($loop -> have_posts()) : ?>

<?php while($loop -> have_posts()) : $loop -> the_post(); ?>
<article style="padding: 0 20px; margin-bottom:40px;" class="col-md-4 col-lg-4 col-sm-6 col-xs-12 inv-portfolio-hover-1 inv-portfolio-item-holder">
	<div class="inv-portfolio-hover-1-content"> 
		<span class="inv-portfolio-hover-1-overlay"></span> 
		
		<div class="inv-portfolio-hover-1-thumb" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url($post->ID,'full')); ?>');"></div>
		
		<div class="inv-portfolio-hover-1-entry-header" style="background-color:#fff">
			<span class="inv-portfolio-hover-1-cats"><?php $terms = get_the_terms( $post->ID, 'portfolio_category' );
			if ( !empty( $terms ) ){
				foreach ( $terms as $term ) { ?>
						<a href=<?php echo esc_url(get_term_link($term)) ?>><span><?php echo esc_html($term->name) ?> </span></a>
				<?php  }
				} ?></span>
			<h4 class="inv-portfolio-hover-1-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h4> 
		</div>
	</div>
</article>
<?Php
endwhile; endif;
?>
	<?php wp_reset_postdata(); ?>
</div>
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
<section/>
<?php get_footer(); ?>