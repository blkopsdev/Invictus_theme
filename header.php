<?php
/**
 * The Header for our theme.
 *
 * @package chefry
 * @author insignia Technolabs
 * @link http://insigniatechnolabs.com/
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php global $ins_opt;

if(isset($ins_opt['insignia-favicon']['url'])){  

       $name = $ins_opt['insignia-favicon']['url'];

       if ( ! ( function_exists( 'has_site_icon' ) && has_site_icon() ) ) {
  
?>
                <link rel="shortcut icon" href="<?php echo esc_url($name); ?>">
         <?php } }


?>



<?php wp_head(); ?>


</head>

<?php 
	if ( is_single() ) { $menu_from_page = get_post_meta( $post->ID, '_ins_header', 1 );
	} else{ $menu_from_page = "zero"; }
	$selected_value = $ins_opt['theme-header'];
if(($selected_value == 'vertical') || ($menu_from_page == 'vertical')){
$verticle_menu = 'verticle-menu-left';
}
else{
$verticle_menu = '';
}
?>

<body <?php body_class(); ?>>

<div class="animsition <?php echo esc_html($verticle_menu); ?>">
<?php
$disable_preloader = $ins_opt['disable-preloader'];
 if ( $disable_preloader == '0'){  ?>

<div class="se-pre-con"></div>
<?php } ?>
<div id="wrapper" class="hfeed">



<!-- start of Header demo five html !-->
<header id="masthead" class="site-header" role="banner">
<?php

global $post;    
//check if post is object otherwise you're not in singular post
  if( !is_object($post) )
     return get_template_part('templates/header/style', '2');
     
     
$header_from_page = get_post_meta( $post->ID, '_ins_header', 1 );
$template = get_page_template_slug( $post->ID );
if($template !== "no-header-footer.php"){
if(is_plugin_active('invictus-meta-box/index.php') && is_plugin_active('redux-framework/redux-framework.php')){

if(empty($header_from_page)){
	 get_template_part('templates/header/style', '2');

}else{
if (isset($header_from_page) && $header_from_page !== 'zero'){

	 get_template_part('templates/header/style', '1');

}else{
	 get_template_part('templates/header/style', '2');
}
}
}else{

 	         get_template_part( 'header/header','default');
}
}
?>
</header>
</div>

<div id="search">
    <button type="button" class="close"> <?php echo wp_kses_post('x'); ?> </button>
<?php echo insignia_header_search_form('',''); ?>
</div>
<!-- end of Header demo five html !-->
