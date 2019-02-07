<?php get_header();
global $post;
?>



<section id="content" role="main">

<?php
global $ins_opt;
$ph_status = get_post_meta( $post->ID, '_ins_ph_status', 1 );
$ph_img =  get_post_meta( $post->ID, '_ins_ph_image', 1 );
$ph_color =  get_post_meta( $post->ID, '_ins_ph_color', 1 );
$ph_size =  get_post_meta( $post->ID, '_ins_ph_size', 1 );
$ph_position =  get_post_meta( $post->ID, '_ins_ph_position', 1 );
$ph_height =  get_post_meta( $post->ID, '_ins_ph_height', 1 );
$ph_bg_img = '';

$main_menu_height = $ins_opt['ins-opt-menu-height'];
$menu_position = $ins_opt['opt_content_position'];
if($menu_position == 2){
$inv_under_header = $main_menu_height;
} else{
$inv_under_header = '0';
} 


if (isset($ph_img) && !empty($ph_img)){
$ph_bg_img =  get_post_meta( $post->ID, '_ins_ph_image', 1 );
}
else{
if (isset($ins_opt['ins-opt-header-image']) && !empty($ins_opt['ins-opt-header-image'])){
$ph_bg_img = $ins_opt['ins-opt-header-image']['url'];
} 
}
if (isset($ph_color) && !empty($ph_color) ){
$ph_bg_clr =  get_post_meta( $post->ID, '_ins_ph_color', 1 );
}
else{
$ph_bg_clr = $ins_opt['ins-opt-header-clr'];
} 

if (isset($ph_position) && $ph_position !=="inherit from theme option" ){
$ph_posi = get_post_meta( $post->ID, '_ins_ph_position', 1 );
}
else{
$ph_posi = $ins_opt['ins-opt-header-bg-position'];
}

if (isset($ph_size) && $ph_size !=="inherit from theme option" ){
$ph_bg_size =  get_post_meta( $post->ID, '_ins_ph_size', 1 );
}
else{
$ph_bg_size = $ins_opt['ins-opt-header-bg-size'];
} 

if (isset($ph_height) && !empty($ph_height) ){
$ph_bg_height =  get_post_meta( $post->ID, '_ins_ph_height', 1 );
}
else{
$ph_bg_height = $ins_opt['ins-opt-header-height'];
} 

 ?>
 
 
 

<?php if(is_home() || is_front_page() ){ ?>

<?php } else { if($ph_status != 'disable'){ ?>
<div class="subpage-page-header-main-wrapper" style=" background-color: <?php echo esc_html($ph_bg_clr);  ?>;">
<div class="subpage-banner-wrapper" style="height: <?php echo esc_html($ph_bg_height);  ?>; background-image: url('<?php echo esc_url($ph_bg_img); ?>'); background-color: <?php echo esc_html($ph_bg_clr);  ?>;  background-position: <?php echo esc_html($ph_posi); ?>; background-size:<?php echo esc_html($ph_bg_size); ?> ">
</div>
		<div class="subpage-banner">
	     <div class="container">

			<div class="inv-under-header-main" style="height: <?php echo esc_html($inv_under_header);?>px"></div>
			<h3 class="subpage-title"><?php echo get_the_title(); ?></h3>

<?php
global $ins_opt;
$bread = $ins_opt['ins-opt-breadcrumbs'];
if($bread == 1){
 if (function_exists('insignia_breadcrumbs')) insignia_breadcrumbs(); } ?>
 </div>
		</div>
	</div>
<?php }
} ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container">
<div class="row">
<?php
$left_sidebar = get_post_meta( $post->ID, '_ins_select_layout', 1 ); 
if($left_sidebar == 'left_sidebar' || $left_sidebar == 'right_sidebar' ){ 
$content_class = 'col-lg-9 col-md-9';
}else{
$content_class = 'col-lg-12 col-md-12';
}
 if($left_sidebar == 'left_sidebar' ){ ?>
<div class="col-md-3 col-lg-3 col-sm-12">
<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
	<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</div>
<?php endif; ?>
</div>
<?php } ?>

<div class="page-content-wrapper <?php echo esc_attr($content_class); ?>">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="entry-content">

<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>

</section>
</article>
</div>

<?php
 if($left_sidebar == 'right_sidebar' ){ ?>
<div class="col-md-3 col-lg-3 col-sm-12">
<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
	<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</div>
<?php endif; ?>
</div>
<?php } ?>
</div>
<?php comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>