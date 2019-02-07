<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
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
<div class="shop-page-main-header-wrapper">
<div class="shop-page-header">

</div>
<div class="product-banner">
<div class="container">

<div class="inv-under-header-main" style="height: <?php echo esc_html($inv_under_header);?>px"></div>
<div class="inv-product-breadcrumb">
<?php woocommerce_breadcrumb(); ?>
</div>
<?php

		$prev = get_previous_post_link(
			'<li class="inv-nav__list-item _prev">%link</li>',
			'<span class="inv-nav__icon _prev"><span class="inv-arrow-left"></span></span>'
			
		);

		$next = get_next_post_link(
			'<li class="inv-nav__list-item _next">%link</li>',
			'<span class="inv-nav__icon _next"><span class="inv-arrow-right"></span></span>'
			
			
		);

?>

        <ul class="inv-nav-product">
				<?php echo wp_kses_post($prev); ?>
                                  <li class="inv-nav__list-item inv-shop-page-link">
                                  <?php  $shop_page_url = get_permalink( wc_get_page_id ( 'shop' ) ); ?>
                                           <a href="<?php echo esc_url($shop_page_url); ?>">

                                     <span class="ti-layout-grid2 inv-nav-shop-icon"></span>
                                      </a>
                        
                                </li>
				<?php echo wp_kses_post($next); ?>
	</ul>

</div>
	</div>
</div>
<div class="container inv-single-product-wrapper">
               


   

 
	<?php


		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>
</div>
<?php get_footer( 'shop' ); ?>
