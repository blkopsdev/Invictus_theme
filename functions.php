<?php
/**
 * The main template file.
 *
 * @package Insignia Agency
 * @author insignia Technolabs
 * @link http://insigniatechnolabs.com/
 */

/**
*
* Load Theme Options
*
**/

if ( !isset( $ins_opt ) && file_exists( get_template_directory() . '/insigniathemeoptions/insigniacustomoptions/insignia-config.php' ) ) {
	require_once( get_template_directory() . '/insigniathemeoptions/insigniacustomoptions/insignia-config.php' );
}

if( class_exists('ReduxFrameworkPlugin')){
Redux::init( 'ins_opt' );
global $ins_opt;
    $selected_value = $ins_opt['theme-header'];
}

/***
*
*Insignia Theme Support
*
***/
add_action( 'after_setup_theme', 'insignia_theme_support' );
function insignia_theme_support() {
   add_theme_support( 'custom-header' );
   add_theme_support( 'custom-background' );
   add_theme_support( 'woocommerce' );

add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
   load_theme_textdomain( 'invictus', get_template_directory() . '/languages' );
   add_theme_support( 'title-tag' );
   add_theme_support( 'post-thumbnails' );
   add_theme_support('post-formats', array(
        'gallery',
        'quote',
        'video',
        'audio'
    ));
}
/**
*
* For Contant Width
*
**/
 if ( ! isset( $content_width ) ) {
	$content_width = 600;
}

add_theme_support( 'automatic-feed-links' );




/***
*
*Editor Styles
*
***/

add_action( 'init', 'insignia_add_editor_styles' );
function insignia_add_editor_styles() {

    add_editor_style( 'style.css' );

}

/**
*
* Load css & Script
*
**/ 



add_action( 'admin_enqueue_scripts', 'insignia_load_custom_wp_admin_style' );
function insignia_load_custom_wp_admin_style() {
        wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/css/admin-style.css', false, '1.0.0' );
         wp_register_style('simple_line_icons', get_template_directory_uri() . '/css/simple-line-icons.css');

        wp_enqueue_style( 'custom_wp_admin_css' );
        wp_enqueue_style( 'simple_line_icons' );

        wp_localize_script( 'ajax-load-post-script', 'ajax_posts', array(
    'ajaxurl' => admin_url( 'admin-ajax.php' ),
    'noposts' => esc_html__('No older posts found', 'invictus'),
));

}



/***
*
*Comment's Replay Script 
***/
function insignia_enqueue_comments_reply() {
	
		wp_enqueue_script( 'comment-reply' );
	
}

add_action( 'comment_form_before', 'insignia_enqueue_comments_reply' );



function insignia_get_meta($value,$post) {
	
	$field = get_post_meta( $post, $value, 1);
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}
	function insignia_Basic_Enqueue_Scripts() 
	{
		
		
		/** CSS **/
		 wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6');
                 wp_enqueue_style('insignia-default', get_template_directory_uri() . '/css/default.css',array(), null);
                 wp_enqueue_style('ddfullscreenmenu', get_template_directory_uri() . '/css/ddfullscreenmenu.css'); 
                 wp_enqueue_style('insignia-element', get_template_directory_uri() . '/css/element.css'); 
                 wp_enqueue_style('insignia-event', get_template_directory_uri() . '/css/event.css'); 
		 wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.5.0');
		 wp_enqueue_style('simple-line-icons', get_template_directory_uri() . '/css/simple-line-icons.css');
		 wp_enqueue_style('insignia-main', get_template_directory_uri() . '/style.css');
                 wp_enqueue_style('insignia-invictus', get_template_directory_uri() . '/css/invictus.css');


		/** JS **/
		wp_enqueue_script('instafeed-min', get_template_directory_uri() . '/js/instafeed.min.js', array('jquery'), false,false); 

		wp_enqueue_script('ddfullscreenmenu', get_template_directory_uri() . '/js/ddfullscreenmenu.js', array('jquery'), false,true);
		wp_enqueue_script('tilt', get_template_directory_uri() . '/js/tilt.jquery.js', array('jquery'), false,true);
		wp_enqueue_script('html5-shiv-script', get_template_directory_uri() . '/js/html5shiv.min.js', array(), false);
		wp_enqueue_script('aos-script', get_template_directory_uri() . '/js/aos.js', array('jquery'), false); 
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), true,true);
		wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.js', array('jquery'), false,false);

		global $ins_opt;
		$api_key = '';
				
		if ( $ins_opt['ins-opt-google-api'] ) {
		$api_key = esc_attr( $ins_opt['ins-opt-google-api'] );
			wp_register_script( 'google-map-sensor', '//maps.google.com/maps/api/js?key=' . $api_key , array( 'jquery' ) );
			wp_register_script( 'google-map-label', get_template_directory_uri() . '/js/plugins/map/markerwithlabel.js', array( 'google-map-sensor' ) );
				}


	}
              
              function insignia_add_footer_styles() {

		wp_enqueue_style('slick-carousel-style', get_template_directory_uri() . '/css/slick.css'); 
		wp_enqueue_script('insignia-menu', get_template_directory_uri() . '/js/classie.js', array('jquery'));
		wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', array('jquery'));
		wp_enqueue_script('counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array('jquery'));
		wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array('jquery'));
		wp_enqueue_script('typed', get_template_directory_uri() . '/js/typed.js', array('jquery'));
		wp_enqueue_style('swipebox', get_template_directory_uri() . '/css/swipebox.min.css');  
		wp_enqueue_style('aos', get_template_directory_uri() . '/css/aos.css');  

		wp_enqueue_script('isotope-pkgd', get_template_directory_uri() . '/js/isotope.pkgd.js', array('jquery'));
		wp_enqueue_script('masonry-horizontal', get_template_directory_uri() . '/js/masonry-horizontal.js', array('jquery'), false,true);
		wp_enqueue_script( 'imagesloaded' );

		wp_enqueue_script('insignia-script', get_template_directory_uri() . '/js/ensign.js', array('jquery'), false,true); 

		wp_enqueue_script('PageScroll2id', get_template_directory_uri() . '/js/jquery.malihu.PageScroll2id.js', array('jquery'), false,true);
		wp_enqueue_script('swipebox', get_template_directory_uri() . '/js/jquery.swipebox.js', array('jquery'), false, false); 
		wp_enqueue_script('insignia-dlmenu', get_template_directory_uri() . '/js/jquery.dlmenu.js', array('jquery'), null,true);
}


     function insignia_custom_Enqueue_Scripts(){
    if ( class_exists('ReduxFrameworkPlugin') ) {
		ob_start();
		get_template_part( 'css/default-dynamic-css' );
		$output = ob_get_contents();
		ob_end_clean();
                wp_add_inline_style( 'insignia-main', $output); 
    } 
}

     function insignia_custom_Enqueue_js(){

		ob_start();
                get_template_part( 'js/ensign-custom-script' );
		$out = ob_get_contents();
                ob_end_clean();
                wp_add_inline_script( 'insignia-script', $out);          
	}

			
			add_action('wp_enqueue_scripts', 'insignia_Basic_Enqueue_Scripts');
                        
                        add_action( 'get_footer', 'insignia_add_footer_styles' );
add_action('get_footer', 'insignia_custom_Enqueue_js');
                        add_action('wp_enqueue_scripts', 'insignia_custom_Enqueue_Scripts');




/**
*
* Site Branding
*
**/
function insignia_add_branding() {
global $ins_opt;
if(!empty($ins_opt['insignia-logo'])){
$myimage = $ins_opt['insignia-logo']['url'];
}
if(!empty($ins_opt['insignia-fixed-header-logo'])){
$fixed_logo = $ins_opt['insignia-fixed-header-logo']['url'];
}
if(!empty($ins_opt['insignia-mobile-header-logo'])){
$mobile_logo = $ins_opt['insignia-mobile-header-logo']['url'];
}
if(!empty($ins_opt['insignia-retina-mobile-header-logo'])){
$retina_mobile_logo = $ins_opt['insignia-retina-mobile-header-logo']['url'];
}
if(!empty($ins_opt['insignia-retina-fixed-header-logo'])){
$retina_fixed_logo = $ins_opt['insignia-retina-fixed-header-logo']['url'];
}
if(!empty($ins_opt['insignia-retina-logo'])){
$retina_logo = $ins_opt['insignia-retina-logo']['url'];
}
        ?>
		<a href="<?php echo get_site_url(); ?>">
			<?php if (isset($myimage) && $myimage != '') { ?>
				<img src="<?php echo esc_url($myimage); ?>" alt="Logo" class="inv-main-header-logo-img inv-header-logo-img">

				<?php if (isset($retina_logo) && $retina_logo != '') { ?>
				<img src="<?php echo esc_url($retina_logo); ?>" alt="Logo" class="retina-main-logo inv-header-logo-img">
				<?php } ?>
				
				<?php if (isset($fixed_logo) && $fixed_logo != '') { ?>
				<img src="<?php echo esc_url($fixed_logo); ?>" alt="Logo" class="inv-fixed-header-logo-img inv-header-logo-img">
				<?php }else{ ?>
				<img src="<?php echo esc_url($myimage); ?>" alt="Logo" class="inv-fixed-header-logo-img inv-header-logo-img">
				<?php } ?>

				<?php if (isset($retina_fixed_logo) && $retina_fixed_logo != '') { ?>
				<img src="<?php echo esc_url($retina_fixed_logo); ?>" alt="Logo" class="retina-fixed-logo inv-header-logo-img">
				<?php } ?>
				
				<?php if (isset($mobile_logo) && $mobile_logo != '') { ?>
				<img src="<?php echo esc_url($mobile_logo); ?>" alt="Logo" class="inv-mobile-header-logo-img inv-header-logo-img">
				<?php }else{ ?>
				<img src="<?php echo esc_url($myimage); ?>" alt="Logo" class="inv-mobile-header-logo-img inv-header-logo-img">
				<?php } ?>

				<?php if (isset($retina_mobile_logo) && $retina_mobile_logo != '') { ?>
				<img src="<?php echo esc_url($retina_mobile_logo); ?>" alt="Logo" class="retina-mobile-logo inv-header-logo-img">
				<?php } ?>

				
			<?php } else{ ?>
				<div class="title-if-no-logo"><?php bloginfo('name'); ?></div><?php } ?>
		</a> 
        <?php
}
add_action( 'insignia_branding_header', 'insignia_add_branding' );


/**
*
* Insignia Theme plugin Activator
*
**/

require_once( get_template_directory() .'/functions/plugins/insignia_plugin.php' );









/**
*
* Numbered Pagination
*
**/

function insignia_pagination($pages = '', $range = 2)
{  
     $showitems = $range + 1;  

     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination inv-pagination\"><span></span>";
         echo "<div class=\"inv-prev-page\">";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a class=\"inv-pagination-arrow\" href='".get_pagenum_link(1)."'>&laquo; <span>First</span></a>";
         if($paged > 1 && $showitems < $pages) echo "<a class=\"inv-pagination-arrow\" href='".get_pagenum_link($paged - 1)."'>&lsaquo; <span>Prev</span></a>";
          echo "</div>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))

                 {
                   
                    
                 echo ($paged == $i)? "<span class=\"current inv-pages\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive inv-pages\">".$i."</a>";
             }
               
         } 
          echo "<div class=\"inv-next-page\">";

          if ($paged < $pages && $showitems < $pages) echo "<a class=\"inv-pagination-arrow\" href=\"".get_pagenum_link($paged + 1)."\"> <span>Next</span> &rsaquo;  </a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a class=\"inv-pagination-arrow\" href='".get_pagenum_link($pages)."'> <span>Last</span> &raquo;             
</a>";
          echo "</div>";

         echo "</div>\n";
     }
}

function insignia_get_post_page_url() {

	if( 'page' == get_option( 'show_on_front' ) ) {
		
		return get_permalink( get_option('page_for_posts' ) );

	} else {

		return home_url();

	} 
}
/* Register Widget Sidebar */
function insignia_widgets_init() {

	register_sidebar( array(
		'name' => esc_html__( 'Default Sidebar', 'invictus' ),
		'id' => 'sidebar-4',
		'description' => esc_html__( 'The main sidebar appears on the right on each page', 'invictus' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Blog Sidebar', 'invictus' ),
		'id' => 'sidebar-1',
		'description' => esc_html__( 'The main sidebar appears on each blog page', 'invictus' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );

	register_sidebar( array(
		'name' =>esc_html__( 'Shop sidebar', 'invictus'),
		'id' => 'sidebar-2',
		'description' => esc_html__( 'Appears on the woocommerce pages.', 'invictus' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
register_sidebar( array(
		'name' =>esc_html__( 'Portfolio sidebar', 'invictus'),
		'id' => 'sidebar-3',
		'description' => esc_html__( 'Appears on the Portfolio pages.', 'invictus' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
register_sidebar( array(
		'name' =>esc_html__( 'Footer column 1', 'invictus'),
		'id' => 'sidebar-footer-col1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
register_sidebar( array(
		'name' =>esc_html__( 'Footer column 2', 'invictus'),
		'id' => 'sidebar-footer-col2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
register_sidebar( array(
		'name' =>esc_html__( 'Footer column 3', 'invictus'),
		'id' => 'sidebar-footer-col3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
register_sidebar( array(
		'name' =>esc_html__( 'Footer column 4', 'invictus'),
		'id' => 'sidebar-footer-col4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
	}


add_action( 'widgets_init', 'insignia_widgets_init' );

function insignia_header_search_form($form1) {
    $form1 = '<form role="search" method="get" action="' . esc_url(home_url( '/' )) . '" >
    <input type="search" value="" placeholder="Search" name="s" id="searchform-input" autocomplete="off" />
    <button type="submit" class="serchbtn"><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>';
 
    return $form1;
}
add_filter( 'get_search_form', 'insignia_header_search_form' );

function insignia_my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' .  esc_url(home_url( '/' ))  . '" >
    <div>
    <input type="text" placeholder="Search" value="' . get_search_query() . '" name="s" id="s" class="ins_search_input" />
    <button type="submit" class="ins_submit_btn" id="searchsubmit" value="'. esc_attr( 'Search','invictus' ) .'" ><i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
    </form>';

    return $form;
}

add_filter( 'get_search_form', 'insignia_my_search_form', 100 );
 

require_once( get_template_directory() .'/functions/woocommerce_configuration.php' );
require_once( get_template_directory() .'/functions/ins-comments.php' );
require_once( get_template_directory() .'/demo-importer.php' );

require_once( get_template_directory() .'/functions/breadcrumbs.php' );
global $ins_opt;
	$selected_value = $ins_opt['theme-header'];
if(($selected_value == 'standard') ||  !class_exists('ReduxFrameworkPlugin')){
require_once( get_template_directory() .'/functions/menu.php' );
}

require_once( get_template_directory() .'/functions/ajax-loadmore.php' );

// ensure is_plugin_active() exists (not on frontend)
		if( !function_exists('is_plugin_active') ) {
			
			include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
			
		}

if(is_plugin_active( 'invictus-vc-elements/index.php' ) && is_plugin_active( 'js_composer/js_composer.php' )){


require_once( get_template_directory() .'/functions/vc_uiblocks/insignia_core.php' );

require_once( get_template_directory() .'/functions/vc_uiblocks/theme-vc-templates-panel-editor.php' );
require_once( get_template_directory() .'/functions/vc_uiblocks/invictus-templates.php' );

}




/**
*
* ADDITIONL MENU ITEMS
*
**/

function insignia_cart_menu($items, $args) {

if ( class_exists( 'WooCommerce' )){

global $woocommerce, $ins_opt;
      $cart_icon= $ins_opt['ins-opt-cart-icon'];           
		$count = sizeof(WC()->cart->get_cart());
                 
		ob_start();
		woocommerce_mini_cart();
		$minicart = ob_get_clean();
		if( 'right-menu' === $args -> theme_location || 'primary-menu' === $args -> theme_location ) {
	if($cart_icon == '1'){
		$items .= '<li class="menu-item menu-item-cart"><a href="'.esc_url(get_permalink(wc_get_page_id('cart'))).'" class="minicart-menu-link ' . ($count == 0 ? 'empty' : '') . '">' .  '</a><div class="minicart"><div class="ins_cart_content">'.$minicart.'</div></div></li>';
	}
	}
}
	return $items;
}
add_filter('wp_nav_menu_items', 'insignia_cart_menu',11,2);

function insignia_menu_item_search($items, $args){
                   global $ins_opt;
      $search_icon= $ins_opt['ins-opt-search-icon'];
	if( 'right-menu' === $args -> theme_location || 'primary-menu' === $args -> theme_location) {
       
              if($search_icon== '1'){

		$items .= '<li class="menu-item menu-item-search"><a href="#search"></a></li>';
	   }
        }
	return $items;
}
add_filter('wp_nav_menu_items', 'insignia_menu_item_search', 10, 2);

function insignia_reduxdemo() {
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
    }
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
    }
}
add_action('init', 'insignia_reduxdemo');

add_action( 'init', 'insignia_register_my_menus' );
function insignia_register_my_menus() {
	register_nav_menus(
		array(
			'primary-menu' => esc_html__('Primary Menu', 'invictus'),
			'top-left-menu' => esc_html__('Top Left Menu (for centered logo position)', 'invictus'),
			'top-right-menu' => esc_html__('Top Right Menu (for centered logo position)', 'invictus'),
			'mobile-menu' => esc_html__('Mobile Menu (for centered logo position)', 'invictus')
		)
	);
}

/**
*
* After VC Init
*
**/

add_action( 'vc_after_init', 'insignia_vc_after_init_actions' );

function insignia_vc_after_init_actions() {
 
  if( function_exists('vc_set_default_editor_post_types') ){
     
      $list = array(
          'page',
          'post',
          'portfolio',
      );
     
      vc_set_default_editor_post_types( $list );
     
  }
   
}

/***
*
*limit words in post content
*
****/
function insignia_custom_excerpt_length( $length ) {
        return 25;
    }
    add_filter( 'excerpt_length', 'insignia_custom_excerpt_length', 999 );


