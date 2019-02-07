<?php
/**
 * The template used for displaying post content in single.php
 *
 * @package Insignia Themes
 * @subpackage Insignia
 * @since Insignia 0.1
 */
?>

<?php get_header(); ?>

<section id="content" role="main">

<?php 
$sidebar = get_post_meta( $post->ID, '_ins_select_layout', 1 ); 

if (isset($sidebar) && $sidebar !== 'select_layout'){
	
			if($sidebar == 'full_width'){
				get_template_part( 'blog/blog','full'); 
			}
			elseif($sidebar == 'left_sidebar'){
				get_template_part( 'blog/blog','left'); 
			}
			else{
				get_template_part( 'blog/blog','right'); 
			}
	
}else{

		global $ins_opt;
		$selected_value = $ins_opt['blog-layout'];

			if($selected_value == 1){
				get_template_part( 'blog/blog','full'); 
			}
			else if($selected_value == 2){
				get_template_part( 'blog/blog','left'); 
			}
			else{
				get_template_part( 'blog/blog','right'); 
			}
}
?>
</section>


<?php get_footer(); ?>